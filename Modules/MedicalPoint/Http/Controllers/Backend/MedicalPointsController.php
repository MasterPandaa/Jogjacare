<?php

namespace Modules\MedicalPoint\Http\Controllers\Backend;

use App\Authorizable;
use App\Http\Controllers\Backend\BackendBaseController;
use Modules\MedicalPoint\Models\MedicalPoint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Laracasts\Flash\Flash;

class MedicalPointsController extends BackendBaseController
{
    use Authorizable;

    protected $module_action;

    public function __construct()
    {
        // Page Title
        $this->module_title = 'MedicalPoints';

        // module name
        $this->module_name = 'medicalpoints';

        // directory path of the module
        $this->module_path = 'medicalpoint::backend';

        // module icon
        $this->module_icon = 'fa-regular fa-sun';

        // module model name, path
        $this->module_model = "Modules\MedicalPoint\Models\MedicalPoint";

        // Tambahkan ini
        $this->module_action = 'Store';
    }

    public function index()
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'List';

        $query = $module_model::query();

        if (request()->has('search')) {
            $query->where('name', 'like', '%' . request()->search . '%');
        }

        if (request()->has('type') && request()->type != '') {
            $query->where('type', request()->type);
        }

        if (request()->has('sort')) {
            if (request()->sort == 'recent') {
                $query->orderBy('created_at', 'desc');
            } elseif (request()->sort == 'oldest') {
                $query->orderBy('created_at', 'asc');
            }
        } else {
            $query->orderBy('created_at', 'desc'); // Default sorting
        }

        $districts = $module_model::distinct('district')->pluck('district');
        $sub_districts = $module_model::select('district', 'sub_district')->distinct()->get();

        $$module_name = $query->paginate();

        return view(
            "$module_path.$module_name.index",
            compact('module_title', 'module_name', "$module_name", 'module_icon', 'module_action', 'module_name_singular', 'districts', 'sub_districts')
        );
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:medicalpoints',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'intro' => 'required|string',
            'description' => 'required|string',
            'type' => 'required|in:Clinic,Public health center,Pharmacy',
            'district' => 'required|string',
            'sub_district' => 'required|string',
            'address' => 'required|string',
            'maps' => 'nullable|string',
            'contact' => 'required|string',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'meta_keywords' => 'nullable|string|max:255',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $path = public_path('uploads/medicalpoints');
            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }
            if ($image->move($path, $filename)) {
                $data['image'] = 'uploads/medicalpoints/' . $filename;
            } else {
                return back()->withErrors(['image' => 'Gagal mengunggah gambar.']);
            }
        }

        $medicalpoint = $this->module_model::create($data);

        Flash::success("<i class='fas fa-check'></i> New ".Str::singular($this->module_title)." Added")->important();

        Log::info(label_case($this->module_title.' '.$this->module_action)." | '".$medicalpoint->name.'(ID:'.$medicalpoint->id.") ' by User:".auth()->user()->name.'(ID:'.auth()->user()->id.')');

        return redirect("admin/$this->module_name");
    }

    public function update(Request $request, $id)
    {
        $medicalpoint = $this->module_model::findOrFail($id);

        $data = $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:medicalpoints,slug,'.$id,
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'intro' => 'required|string',
            'description' => 'required|string',
            'type' => 'required|in:Clinic,Public health center,Pharmacy',
            'district' => 'required|string',
            'sub_district' => 'required|string',
            'address' => 'required|string',
            'maps' => 'nullable|string',
            'contact' => 'required|string',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'meta_keywords' => 'nullable|string|max:255',
        ]);

        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($medicalpoint->image && file_exists(public_path($medicalpoint->image))) {
                unlink(public_path($medicalpoint->image));
            }

            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $path = public_path('uploads/medicalpoints');
            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }
            if ($image->move($path, $filename)) {
                $data['image'] = 'uploads/medicalpoints/' . $filename;
            } else {
                return back()->withErrors(['image' => 'Gagal mengunggah gambar.']);
            }
        }

        $medicalpoint->update($data);

        Flash::success("<i class='fas fa-check'></i> ".Str::singular($this->module_title)." Updated Successfully")->important();

        Log::info(label_case($this->module_title.' '.$this->module_action)." | '".$medicalpoint->name.'(ID:'.$medicalpoint->id.") ' by User:".auth()->user()->name.'(ID:'.auth()->user()->id.')');

        return redirect("admin/$this->module_name");
    }
}