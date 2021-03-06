<?php

namespace Core\Http\Controllers;

use File, Artisan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Core\Repositories\Interfaces\ModuleInterface;
use Core\Supports\Controllers\BaseController;

class ModuleController extends BaseController
{
    protected $moduleRepository;

    function __construct(ModuleInterface $moduleRepository)
    {
        $this->moduleRepository = $moduleRepository;
    }

    public function getListModule()
    {
        page_title()->setTitle(trans('core::module.module_management'));

        cms_fix_order_model(ModuleInterface::class, 'order', 'name');
        cache()->flush();
        Artisan::call('config:clear');
        Artisan::call('route:clear');
        Artisan::call('cache:clear');
        /**
         * Get list modules not install
         */
        $listModules = cms_scan_folder(base_path('modules'));
        $not_install_modules = null;
        if ($listModules) {
            foreach ($listModules as $mod) {
                if (!module_check_installed($mod)) {
                    if (File::exists(base_path('modules' . DIRECTORY_SEPARATOR . $mod . DIRECTORY_SEPARATOR . 'info.json'))) {
                        $content = cms_read_file_json(base_path('modules' . DIRECTORY_SEPARATOR . $mod . DIRECTORY_SEPARATOR . 'info.json'));
                        $not_install_modules[] = $content;
                    }
                }
            }
        }

        /**
         * Get list installed modules
         */
        $installed_modules = cms_installed_modules();
        $data['installed_modules'] = $this->moduleRepository->whereIn('name', $installed_modules)->orderBy('order', 'asc')->get();
        $data['not_installed_modules'] = $not_install_modules;
        $data['minOrder'] = $this->moduleRepository->min('order');
        $data['maxOrder'] = $this->moduleRepository->max('order');
        return view('core::module.list', $data);
    }

    // Install a new module
    public function getInstallModule($module)
    {
        if (!File::exists(base_path('modules' . DIRECTORY_SEPARATOR . $module . DIRECTORY_SEPARATOR . 'info.json')) || module_check_installed($module)) {
            return redirect()->route('core.admin.list_module')->with('flash_data', ['type' => 'error', 'message' => 'Kh??ng th??? c??i ?????t module!']);
        }

        // Execute install module
        cms_install_module($module);

        // Log
        activity('module')
            ->causedBy(auth()->user())
            ->withProperties(['name' => $module])
            ->log('install module');

        // Redirect
        return redirect()->route('core.admin.edit_module', $module)->with('flash_data', ['type' => 'success', 'message' => '???? c??i ?????t module th??nh c??ng. H??y c???p nh???t th??ng tin module.']);
    }

    // Uninstall a module
    public function getUninstallModule($module)
    {
        if (in_array($module, config('cms.system_modules'))) {
            return redirect()->route('core.admin.list_module')->with('flash_data', ['type' => 'error', 'message' => 'Kh??ng th??? g??? c??i ?????t module h??? th???ng.']);
        }

        cms_uninstall_module($module);

        // Log
        activity('module')
            ->causedBy(auth()->user())
            ->withProperties(['name' => $module])
            ->log('uninstall module');

        // Redirect
        return redirect()->route('core.admin.list_module')->with('flash_data', ['type' => 'success', 'message' => 'G??? c??i ?????t module th??nh c??ng.']);
    }

    public function getEditModule($name)
    {
        $data['module'] = $this->moduleRepository->findByField('name', $name)->first();
        if ($data['module']) {
            return view('core::module.edit', $data);
        }
        return redirect()->route('core.admin.list_module')->with('flash_data', ['type' => 'error', 'message' => 'Kh??ng t??m th???y module']);
    }

    public function postEditModule($name, Request $request)
    {
        $request->validate([
            'title' => 'required'
        ], [
            'title.required' => 'Ch??a nh???p t??n module'
        ]);

        $status = in_array($name, config('cms.system_modules')) ? 1 : ($request->has('status') ? 1 : 0);

        $this->moduleRepository->where('name', $name)->update([
            'title' => $request->title,
            'icon' => $request->icon,
            'description' => $request->description,
            'status' => $status
        ]);

        // Log
        activity('module')
            ->causedBy(auth()->user())
            ->withProperties(['name' => $name])
            ->log('updated module');

        // Redirect
        return redirect()->route('core.admin.list_module')->with('flash_data', ['type' => 'success', 'message' => 'C???p nh???t th??nh c??ng']);
    }

    public function ajaxChangeStatus(Request $request)
    {
        try {
            if (in_array($request->name, config('cms.system_modules')) && !$request->status) {
                return response()->json(['status' => false, 'message' => 'Kh??ng th??? t???t module h??? th???ng']);
            }

            $this->moduleRepository->where('name', $request->name)->update([
                'status' => $request->status
            ]);

            cache()->flush();

            // Log
            activity('module')
                // ->causedBy($user)
                ->withProperties(['name' => $request->name])
                ->log('updated status module to ' . $request->status);

            // Redirect
            return response()->json(['status' => true, 'message' => '???? c???p nh???t tr???ng th??i']);
        } catch (\Throwable $th) {
            return response()->json(['status' => false, 'message' => '???? x???y ra l???i']);
        }
    }

    /**
     * ajax change mod
     */
    public function ajaxChangeOrderModule(Request $request)
    {
        $mod = $request->mod;
        $order = $request->order;
        $listMod = $this->moduleRepository->where([['name', '!=', $mod]])->orderBy('order', 'asc')->get(['name']);
        $weight = 0;
        foreach ($listMod as $module) {
            ++$weight;
            if ($weight == $order) {
                ++$weight;
            }
            $this->moduleRepository->where('name', $module['name'])->update(['order' => $weight]);
        }
        $this->moduleRepository->where('name', $mod)->update(['order' => $order]);
        cms_fix_order_model(ModuleInterface::class, 'order', 'name');
        cache()->flush();

        activity('module')
            // ->causedBy($user)
            ->withProperties(['name' => $mod])
            ->log('change order ' . $order);

        $request->session()->flash('flash_data', ['type' => 'success', 'message' => 'C???p nh???t th??nh c??ng']);

        return response()->json([
            'status' => true,
            'message' => 'C???p nh???t th??nh c??ng',
        ]);
    }
}