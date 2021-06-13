<?php

namespace Modules\Activity\Providers;

use Event;
use Illuminate\Routing\Events\RouteMatched;
use Illuminate\Support\Facades\File;
use Illuminate\Support\ServiceProvider;
use Modules\Activity\Repositories\Eloquents\ActivityRepository;
use Modules\Activity\Repositories\Interfaces\ActivityInterface;

class ActivityServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(ActivityInterface::class, ActivityRepository::class);
    }

    public function boot()
    {
        $module = 'activity';
        $namespace = 'Modules\\Activity\\';
        $module_path = base_path('modules' . DIRECTORY_SEPARATOR . 'activity');

        /**
         * Load routes
         */
        if (File::isDirectory($module_path . DIRECTORY_SEPARATOR . 'routes')) {
            $routes = File::glob($module_path . DIRECTORY_SEPARATOR . 'routes' . DIRECTORY_SEPARATOR . '*.php');
            foreach ($routes as $route) {
                $this->loadRoutesFrom($route);
            }
        }

        /**
         * Load helpers
         */
        if (File::isDirectory($module_path . DIRECTORY_SEPARATOR . 'helpers')) {
            $helpers = File::glob($module_path . DIRECTORY_SEPARATOR . 'helpers' . DIRECTORY_SEPARATOR . '*.php');
            foreach ($helpers as $helper) {
                File::requireOnce($helper);
            }
        }

        /**
         * Load configs
         */
        if (File::isDirectory($module_path . DIRECTORY_SEPARATOR . 'config')) {
            $configs = File::glob($module_path . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . '*.php');
            foreach ($configs as $config) {
                $this->mergeConfigFrom($config, $module . '::' . basename($config, '.php'));
            }
        }

        /**
         * Load translations
         */
        if (File::isDirectory($module_path . DIRECTORY_SEPARATOR . 'resources' . DIRECTORY_SEPARATOR . 'lang')) {
            $this->loadTranslationsFrom($module_path . DIRECTORY_SEPARATOR . 'resources' . DIRECTORY_SEPARATOR . 'lang', $module);
        }

        /**
         * Load breadcrumbs
         */
        if (File::exists($module_path . DIRECTORY_SEPARATOR . 'includes' . DIRECTORY_SEPARATOR . 'breadcrumbs.php')) {
            File::requireOnce($module_path . DIRECTORY_SEPARATOR . 'includes' . DIRECTORY_SEPARATOR . 'breadcrumbs.php');
        }

        /**
         * Load views
         */
        if (File::isDirectory($module_path . DIRECTORY_SEPARATOR . 'resources' . DIRECTORY_SEPARATOR . 'views')) {
            $this->loadViewsFrom($module_path . DIRECTORY_SEPARATOR . 'resources' . DIRECTORY_SEPARATOR . 'views', $module);
        }

        // $this->app->register(HookServiceProvider::class);

        /**
         * Load admin menu
         */
        $this->loadAdminMenu();

        /**
         * Load widgets, shortcodes,...
         */
        // widgets: app('arrilot.widget-namespaces')->registerNamespace($module, $namespace . 'Widgets');
        // shortcodes: Shortcode::register('product', ProductShortcode::class);
    }

    public function loadAdminMenu()
    {
        Event::listen(RouteMatched::class, function () {
            dashboard_menu()
                ->registerItem([
                    'id'          => 'mod-activity',
                    'priority'    => 3,
                    'parent_id'   => null,
                    'name'        => 'activity::admin.activity_management',
                    'icon'        => 'fab fa-battle-net',
                    'url'         => route('activity.admin.list'),
                    'permissions' => ['activity.admin.list'],
                ])
                ->registerItem([
                    'id'          => 'mod-activity-list',
                    'priority'    => 1,
                    'parent_id'   => 'mod-activity',
                    'name'        => 'activity::admin.list',
                    'url'         => route('activity.admin.list'),
                    'permissions' => ['activity.admin.list'],
                ])->registerItem([
                    'id'          => 'mod-activity-add',
                    'priority'    => 1,
                    'parent_id'   => 'mod-activity',
                    'name'        => 'activity::admin.create',
                    'url'         => route('activity.admin.create'),
                    'permissions' => ['activity.admin.create'],
                ]);
        });
    }
}
