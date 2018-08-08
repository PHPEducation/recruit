<?php

namespace App\Http\Controllers\Admin;

use App\Models\Apply;
use App\Models\Job;
use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\ApplyRequest as StoreRequest;
use App\Http\Requests\ApplyRequest as UpdateRequest;
use Carbon\Carbon;
use League\Flysystem\Config;
use Spatie\Permission\Models\Role;

/**
 * Class ApplyCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class ApplyCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Apply');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/apply');
        $this->crud->setEntityNameStrings('apply', 'applies');

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->addColumn([
            'name' => 'job_name',
            'label' => 'Apply to Job',
            'type' => 'closure',
            'function' => function ($entry) {
                return ($entry->job()->name);
            }
        ]);

        $this->crud->addColumn([
            'name' => 'user_name',
            'label' => 'User Apply',
            'type' => 'closure',
            'function' => function ($entry) {
                return ($entry->cv()->user()->name);
            }
        ]);

        $this->crud->addColumn([
            'name' => 'apply_time',
            'label' => 'Apply at',
            'type' => 'closure',
            'function' => function ($entry) {
                return ($entry->created_at);
            }
        ]);


        $this->crud->addColumn([
            'name' => 'pass',
            'label' => 'Pass',
            'type' => 'closure',
            'function' => function ($entry) {
                if ($entry->is_pass == 0) return "--";
                elseif ($entry->is_pass == 1) return "Pass";
                return 'Fail';
            }
        ]);

        $this->crud->addFilter([ // date filter
            'type' => 'date',
            'name' => 'date',
            'label' => 'Date'
        ],
            false,
            function ($value) { // if the filter is active, apply these constraints
                $time = Carbon::createFromFormat('Y-m-d', $value)->startOfDay();
                $this->crud->addClause('where', 'created_at', '>', $time->toDateTimeString());
                $this->crud->addClause('where', 'created_at', '<', $time->endOfDay()->toDateTimeString());

            });
        // ------ CRUD ACCESS
        // ------ CRUD BUTTONS
        $this->crud->addButtonFromModelFunction('line', 'open', 'getOpenButton', 'beginning');

        if (auth()->user()->hasRole(config('role.root'))) $this->crud->denyAccess(['create', 'update']);
        else $this->crud->denyAccess(['create', 'update', 'delete']);

        $this->crud->enableExportButtons();

        $this->crud->orderBy('created_at', 'asc');
    }

    public function store(StoreRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::storeCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }

    public function update(UpdateRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::updateCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }

    public function detail($id){
        $apply = Apply::findOrFail($id);
        $cv = $apply->cv();
        $job = $apply->job();

        return view('admin.apply.review', compact('apply', 'cv', 'job'));
    }
    public function checkCV($id, $status)
    {
        $cv = Apply::findOrFail($id);

        $cv->is_pass = $status;
        $cv->save();

        return redirect()->route('apply.index');
    }
}
