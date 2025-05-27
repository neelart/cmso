<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\PluginManager; // Import PluginManager

class SettingController extends Controller
{
    public function index(PluginManager $pluginManager) // Inject PluginManager
    {
        $discoveredPlugins = $pluginManager->discoverPlugins();
        return view('admin.settings.index', ['plugins' => $discoveredPlugins]);
    }
}
