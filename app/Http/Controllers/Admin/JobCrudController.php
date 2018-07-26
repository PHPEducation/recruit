<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;
// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\JobRequest as StoreRequest;
use App\Http\Requests\JobRequest as UpdateRequest;
use Carbon\Carbon;

/**
 * Class JobCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class JobCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Job');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/job');
        $this->crud->setEntityNameStrings('job', 'jobs');

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */

        $this->crud->setFromDb();

        // ------ CRUD COLUMNS
        $this->crud->removeColumns(['guard_name', 'description', 'purposes', 'created_by', 'updated_by', 'deleted_by']);

        // ------ CRUD FIELDS

        // add asterisk for fields that are required in JobRequest
        $this->crud->setRequiredFields(StoreRequest::class, 'create');
        $this->crud->setRequiredFields(UpdateRequest::class, 'edit');

        // ------ CRUD BUTTONS
        $this->crud->addButtonFromModelFunction('line', 'open', 'getOpenButton', 'beginning');

        // ------ CRUD ACCESS
        $this->crud->allowAccess(['list', 'create', 'update', 'reorder']);
        if (auth()->user()->hasRole('root')) {
            $this->crud->denyAccess(['delete']);
        }

        $this->crud->enableAjaxTable();
        $this->crud->enableExportButtons();

        // ------ ADVANCED QUERIES
        $this->crud->orderBy('updated_at');
        $this->crud->limit(25);
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
}
