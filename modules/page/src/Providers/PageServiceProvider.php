<?php

namespace Modules\Page\Providers;

use Event;
use Illuminate\Routing\Events\RouteMatched;
use Illuminate\Support\Facades\File;
use Illuminate\Support\ServiceProvider;
use Modules\Page\Repositories\Eloquents\PageRepository;
use Modules\Page\Repositories\Eloquents\PageTranslationRepository;
use Modules\Page\Repositories\Interfaces\PageInterface;
use Modules\Page\Repositories\Interfaces\PageTranslationInterface;

class PageServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(PageInterface::class, PageRepository::class);
        $this->app->bind(PageTranslationInterface::class, PageTranslationRepository::class);
    }

    public function boot()
    {
        $module = 'page';
        $namespace = 'Modules\\Page\\';
        $module_path = base_path('modules' . DIRECTORY_SEPARATOR . 'page');

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
        widgets: app('arrilot.widget-namespaces')->registerNamespace($module, $namespace . 'Widgets');
        // shortcodes: Shortcode::register('product', ProductShortcode::class);
    }

    public function loadAdminMenu()
    {
        Event::listen(RouteMatched::class, function () {
            dashboard_menu()
                ->registerItem([
                    'id'          => 'mod-page',
                    'priority'    => 3,
                    'parent_id'   => null,
                    'name'        => 'page::admin.page_management',
                    'icon'        => 'fa fa-network-wired',
                    'url'         => route('page.admin.list'),
                    'permissions' => ['page.admin.list'],
                ])
                ->registerItem([
                    'id'          => 'mod-page-list',
                    'priority'    => 1,
                    'parent_id'   => 'mod-page',
                    'name'        => 'page::admin.list_page',
                    'url'         => route('page.admin.list'),
                    'permissions' => ['page.admin.list'],
                ]);
        });
    }
}
