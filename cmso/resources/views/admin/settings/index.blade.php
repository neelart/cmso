@extends('layouts.admin')

@section('title', 'Settings')

@section('content')
<div class="container">
    <h1>Settings</h1>
    <p>Manage your CMS settings here. Options for addons and themes will be added in the future.</p>
    {{-- Placeholder for actual settings form --}}

    <hr style="margin-top: 2rem; margin-bottom: 2rem;">
    <h2>Discovered Plugins</h2>
    @if (!empty($plugins))
        <ul style="list-style: none; padding-left: 0;">
            @foreach ($plugins as $pluginKey => $plugin)
                <li style="margin-bottom: 1rem; padding: 1rem; border: 1px solid #eee; border-radius: 4px;">
                    <strong>{{ $plugin['name'] }} (<code>{{ $pluginKey }}</code>)</strong> - v{{ $plugin['version'] ?? 'N/A' }}
                    <p style="margin-top: 0.5rem; margin-bottom: 0.5rem;">{{ $plugin['description'] ?? 'No description.' }}</p>
                    <small>Author: {{ $plugin['author'] ?? 'N/A' }}</small><br>
                    <small>Service Provider: <code>{{ $plugin['service_provider'] ?? 'N/A' }}</code></small><br>
                    <small>Path: <code>{{ $plugin['path'] ?? 'N/A' }}</code></small>
                    {{-- Placeholder for enable/disable actions --}}
                </li>
            @endforeach
        </ul>
    @else
        <p>No plugins discovered in the <code>cmso-plugins</code> directory.</p>
    @endif
</div>
@endsection
