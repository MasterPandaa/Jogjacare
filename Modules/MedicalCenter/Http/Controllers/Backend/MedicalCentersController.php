<?php

namespace Modules\MedicalCenter\Http\Controllers\Backend;

use App\Authorizable;
use App\Http\Controllers\Backend\BackendBaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Laracasts\Flash\Flash;

class MedicalCentersController extends BackendBaseController
{
    use Authorizable;

    protected $module_action;

    public function __construct()
    {
        // Page Title
        $this->module_title = 'MedicalCenters';

        // module name
        $this->module_name = 'medicalcenters';

        // directory path of the module
        $this->module_path = 'medicalcenter::backend';

        // module icon
        $this->module_icon = 'fa-regular fa-sun';

        // module model name, path
        $this->module_model = "Modules\MedicalCenter\Models\MedicalCenter";

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
        
        $medicalcares = $query->paginate();
        
        $districts = $module_model::distinct('district')->pluck('district');
        $sub_districts = $module_model::select('district', 'sub_district')->distinct()->get();

        return view(
            "$module_path.$module_name.index",
            compact('module_title', 'module_name', 'medicalcares', 'module_icon', 'module_action', 'module_name_singular', 'districts', 'sub_districts')
        );
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255',
            'type' => 'required|string|max:255',
            'intro' => 'required|string',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'address' => 'nullable|string',
            'maps' => 'nullable|string',
            'contact' => 'nullable|string',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'meta_keywords' => 'nullable|string',
            'status' => 'required',
            'district' => 'required|string', // Tambahkan ini
            'sub_district' => 'required|string', // Tambahkan ini
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $path = public_path('uploads/medicalcenters');
            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }
            if ($image->move($path, $filename)) {
                $data['image'] = 'uploads/medicalcenters/' . $filename;
            } else {
                return back()->withErrors(['image' => 'Gagal mengunggah gambar.']);
            }
        }

        $medicalcenter = $this->module_model::create($data);

        Flash::success("<i class='fas fa-check'></i> New ".Str::singular($this->module_title)." Added")->important();

        Log::info(label_case($this->module_title.' '.$this->module_action)." | '".$medicalcenter->name.'(ID:'.$medicalcenter->id.") ' by User:".auth()->user()->name.'(ID:'.auth()->user()->id.')');

        return redirect("admin/$this->module_name");
    }

    public function update(Request $request, $id)
    {
        $medicalcenter = $this->module_model::findOrFail($id);

        $data = $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:medicalcenters,slug,'.$id,
            'type' => 'required|string|max:255',
            'intro' => 'required|string',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'address' => 'nullable|string',
            'maps' => 'nullable|string',
            'contact' => 'nullable|string',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'meta_keywords' => 'nullable|string',
            'district' => 'required|string', // Tambahkan ini
            'sub_district' => 'required|string', // Tambahkan ini
        ]);

        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($medicalcenter->image && file_exists(public_path($medicalcenter->image))) {
                unlink(public_path($medicalcenter->image));
            }

            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $path = public_path('uploads/medicalcenters');
            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }
            if ($image->move($path, $filename)) {
                $data['image'] = 'uploads/medicalcenters/' . $filename;
            } else {
                return back()->withErrors(['image' => 'Gagal mengunggah gambar.']);
            }
        }

        $medicalcenter->update($data);

        Flash::success("<i class='fas fa-check'></i> ".Str::singular($this->module_title)." Updated Successfully")->important();

        Log::info(label_case($this->module_title.' '.$this->module_action)." | '".$medicalcenter->name.'(ID:'.$medicalcenter->id.") ' by User:".auth()->user()->name.'(ID:'.auth()->user()->id.')');

        return redirect("admin/$this->module_name");
    }
}