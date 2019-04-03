<?php namespace Rap2hpoutre\LaravelLogViewer; use Illuminate\Support\ServiceProvider; class LaravelLogViewerServiceProvider extends ServiceProvider { protected $defer = false; public function boot() { if (method_exists($this, 'package')) { $this->package('rap2hpoutre/laravel-log-viewer', 'laravel-log-viewer', __DIR__ . '/../../'); } if (method_exists($this, 'loadViewsFrom')) { $this->loadViewsFrom(__DIR__.'/../../views', 'laravel-log-viewer'); } if (method_exists($this, 'publishes')) { $this->publishes([ __DIR__.'/../../views' => base_path('/resources/views/vendor/laravel-log-viewer'), ], 'views'); } } public function register() { } public function provides() { return array(); } } 