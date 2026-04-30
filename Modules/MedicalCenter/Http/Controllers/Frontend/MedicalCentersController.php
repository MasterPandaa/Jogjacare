<?php

namespace Modules\MedicalCenter\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;
use Modules\MedicalCenter\Models\MedicalCenter;

class MedicalCentersController extends Controller
{
    public $module_title;

    public $module_name;

    public $module_path;

    public $module_icon;

    public $module_model;

    public function __construct()
    {
        // Page Title
        $this->module_title = 'MedicalCenters';

        // module name
        $this->module_name = 'medicalcenters';

        // directory path of the module
        $this->module_path = 'medicalcenter::frontend';

        // module icon
        $this->module_icon = 'fa-regular fa-sun';

        // module model name, path
        $this->module_model = MedicalCenter::class;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Request $request): Response
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'List';

        $query = $module_model::query();

        if ($request->filled('search')) {
            $query->where('name', 'like', '%' . $request->search . '%');
        }

        if ($request->filled('type')) {
            $query->where('type', $request->type);
        }

        if ($request->filled('district')) {
            $query->where('district', $request->district);
        }

        if ($request->filled('sub_district')) {
            $query->where('sub_district', $request->sub_district);
        }

        if ($request->filled('sort')) {
            if ($request->sort == 'recent') {
                $query->orderBy('created_at', 'desc');
            } elseif ($request->sort == 'oldest') {
                $query->orderBy('created_at', 'asc');
            }
        } else {
            $query->orderBy('created_at', 'desc'); // Default sorting
        }

        $medicalcenters = $query->paginate();

        $districts = $module_model::distinct('district')->pluck('district');
        $sub_districts = $module_model::select('district', 'sub_district')
            ->distinct()
            ->get()
            ->groupBy('district')
            ->map(function ($item) {
                return $item->pluck('sub_district');
            });

        return response()->view(
            "$module_path.$module_name.index",
            compact('module_title', 'module_name', 'medicalcenters', 'module_icon', 'module_action', 'module_name_singular', 'districts', 'sub_districts')
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id): Response
    {
        $id = decode_id($id);

        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'Show';

        $medicalcenter = $module_model::findOrFail($id);

        return response()->view(
            "$module_path.$module_name.show",
            compact('module_title', 'module_name', 'module_icon', 'module_action', 'module_name_singular', 'medicalcenter')
        );
    }

    public function getSubDistricts(Request $request)
    {
        $district = $request->district;
        $subDistricts = $this->module_model::where('district', $district)
                            ->distinct('sub_district')
                            ->pluck('sub_district');
        return response()->json($subDistricts);
    }
}