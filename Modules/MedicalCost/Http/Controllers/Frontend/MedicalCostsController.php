<?php

namespace Modules\MedicalCost\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;
use Modules\MedicalCost\Models\MedicalCost;

class MedicalCostsController extends Controller
{
    public $module_title;

    public $module_name;

    public $module_path;

    public $module_icon;

    public $module_model;

    public function __construct()
    {
        // Page Title
        $this->module_title = 'MedicalCosts';

        // module name
        $this->module_name = 'medicalcosts';

        // directory path of the module
        $this->module_path = 'medicalcost::frontend';

        // module icon
        $this->module_icon = 'fa-regular fa-sun';

        // module model name, path
        $this->module_model = MedicalCost::class;
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

        $medicalcosts = $module_model::query();

        if ($request->has('search')) {
            $medicalcosts->where('name', 'like', '%' . $request->search . '%');
        }

        if ($request->has('min_price') && is_numeric($request->min_price)) {
            $medicalcosts->where('lowest_price', '>=', (float)$request->min_price);
        }

        if ($request->has('max_price') && is_numeric($request->max_price)) {
            $medicalcosts->where('highest_price', '<=', (float)$request->max_price);
        }

        if ($request->has('sort')) {
            if ($request->sort == 'lowest_price') {
                $medicalcosts->orderBy('lowest_price', 'asc');
            } elseif ($request->sort == 'highest_price') {
                $medicalcosts->orderBy('highest_price', 'desc');
            }
        }

        $medicalcosts = $medicalcosts->paginate();

        return response()->view(
            "$module_path.$module_name.index",
            compact('module_title', 'module_name', 'module_path', 'module_icon', 'module_action', 'module_name_singular', 'medicalcosts')
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

        $medicalcost = $module_model::findOrFail($id);

        return response()->view(
            "$module_path.$module_name.show",
            compact('module_title', 'module_name', 'module_path', 'module_icon', 'module_action', 'module_name_singular', 'medicalcost')
        );
    }
}