<?php

namespace Modules\MedicalAlter\Http\Controllers\Backend;

use App\Authorizable;
use App\Http\Controllers\Backend\BackendBaseController;
use Modules\MedicalAlter\Models\MedicalAlter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Laracasts\Flash\Flash;

class MedicalAltersController extends BackendBaseController
{
    use Authorizable;

    protected $module_action;

    public function __construct()
    {
        // Page Title
        $this->module_title = 'MedicalAlters';

        // module name
        $this->module_name = 'medicalalters';

        // directory path of the module
        $this->module_path = 'medicalalter::backend';

        // module icon
        $this->module_icon = 'fa-regular fa-sun';

        // module model name, path
        $this->module_model = "Modules\MedicalAlter\Models\MedicalAlter";

        // Tambahkan ini
        $this->module_action = 'Store';
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255',
            'type' => 'required|string|max:255',
            'intro' => 'required|string',
            'benefits' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'meta_keywords' => 'nullable|string',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $path = public_path('uploads/medicalalters');
            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }
            if ($image->move($path, $filename)) {
                $data['image'] = 'uploads/medicalalters/' . $filename;
            } else {
                return back()->withErrors(['image' => 'Gagal mengunggah gambar.']);
            }
        }

        $medicalalter = $this->module_model::create($data);

        Flash::success("<i class='fas fa-check'></i> New ".Str::singular($this->module_title)." Added")->important();

        Log::info(label_case($this->module_title.' '.$this->module_action)." | '".$medicalalter->name.'(ID:'.$medicalalter->id.") ' by User:".auth()->user()->name.'(ID:'.auth()->user()->id.')');

        return redirect("admin/$this->module_name");
    }

    public function update(Request $request, $id)
    {
        $medicalalter = $this->module_model::findOrFail($id);

        $data = $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:unique:medicalalters,slug,'.$id,
            'type' => 'required|string|max:255',
            'intro' => 'required|string',
            'benefits' => 'nullable|string',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'meta_keywords' => 'nullable|string',
        ]);

        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($medicalalter->image && file_exists(public_path($medicalalter->image))) {
                unlink(public_path($medicalalter->image));
            }

            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $path = public_path('uploads/medicalalters');
            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }
            if ($image->move($path, $filename)) {
                $data['image'] = 'uploads/medicalalters/' . $filename;
            } else {
                return back()->withErrors(['image' => 'Gagal mengunggah gambar.']);
            }
        }

        $medicalalter->update($data);

        Flash::success("<i class='fas fa-check'></i> ".Str::singular($this->module_title)." Updated Successfully")->important();

        Log::info(label_case($this->module_title.' '.$this->module_action)." | '".$medicalalter->name.'(ID:'.$medicalalter->id.") ' by User:".auth()->user()->name.'(ID:'.auth()->user()->id.')');

        return redirect("admin/$this->module_name");
    }
}