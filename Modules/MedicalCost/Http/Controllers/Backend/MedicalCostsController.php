<?php

namespace Modules\MedicalCost\Http\Controllers\Backend;

use App\Authorizable;
use App\Http\Controllers\Backend\BackendBaseController;

class MedicalCostsController extends BackendBaseController
{
    use Authorizable;

    public function __construct()
    {
        // Page Title
        $this->module_title = 'MedicalCosts';

        // module name
        $this->module_name = 'medicalcosts';

        // directory path of the module
        $this->module_path = 'medicalcost::backend';

        // module icon
        $this->module_icon = 'fa-regular fa-sun';

        // module model name, path
        $this->module_model = "Modules\MedicalCost\Models\MedicalCost";
    }
}