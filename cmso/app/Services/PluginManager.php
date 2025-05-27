<?php

namespace App\Services;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log; // Optional: for logging errors

class PluginManager
{
    protected $pluginsPath;

    public function __construct()
    {
        $this->pluginsPath = base_path('cmso-plugins');
    }

    public function discoverPlugins(): array
    {
        $plugins = [];
        if (!File::isDirectory($this->pluginsPath)) {
            return $plugins;
        }

        $pluginDirectories = File::directories($this->pluginsPath);

        foreach ($pluginDirectories as $pluginDir) {
            $manifestPath = $pluginDir . '/plugin.json';
            if (File::exists($manifestPath)) {
                try {
                    $manifestContent = File::get($manifestPath);
                    $manifestData = json_decode($manifestContent, true);

                    if (json_last_error() === JSON_ERROR_NONE && isset($manifestData['name'])) {
                        $manifestData['path'] = $pluginDir; // Add path for reference
                        $plugins[basename($pluginDir)] = $manifestData;
                    } else {
                        // Optional: Log invalid manifest
                        Log::warning("Invalid plugin.json in: " . $pluginDir . " - " . json_last_error_msg());
                    }
                } catch (\Exception $e) {
                    // Optional: Log reading error
                    Log::error("Error reading plugin.json in: " . $pluginDir . " - " . $e->getMessage());
                }
            }
        }
        return $plugins;
    }
}
