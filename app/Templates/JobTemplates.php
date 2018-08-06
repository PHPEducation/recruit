<?php

namespace App\Templates;

use Illuminate\Support\Facades\Auth;

trait JobTemplates
{
    /*
    |--------------------------------------------------------------------------
    | Page Templates for Backpack\PageManager
    |--------------------------------------------------------------------------
    |
    | Each page template has its own method, that define what fields should show up using the Backpack\CRUD API.
    | Use snake_case for naming and PageManager will make sure it looks pretty in the create/update form
    | template dropdown.
    |
    | Any fields defined here will show up after the standard page fields:
    | - select template
    | - page name (only seen by admins)
    | - page title
    | - page slug
    */


    private function default()
    {
        $this->crud->addField([   // CustomHTML
            'name' => 'metas_separator',
            'type' => 'custom_html',
            'value' => '<h2>' . trans('jobmanager.default.header') . '</h2><hr>',
        ]);
        $this->crud->addField([
            'name' => 'is_active',
            'label' => trans('jobmanager.default.active'),
            'type' => 'radio',
            'options' => [
                0 => 'Deactive',
                1 => 'Active',
            ],
            'inline' => true,
        ]);
        $this->crud->addField([
            'name' => 'created_by',
            'type' => 'hidden',
            'value' => Auth::user()->id,
        ]);
        $this->crud->addField([
            'name' => 'updated_by',
            'type' => 'hidden',
            'value' => Auth::user()->id,
        ]);
        $this->crud->addField([
            'name' => 'salary',
            'label' => trans('jobmanager.default.salary'),
            'type' => 'number',
            'min' => 0,
            'max' => 99999999
        ]);
        $this->crud->addField([
            'name' => 'purposes',
            'label' => trans('jobmanager.default.purposes'),
            'type' => 'wysiwyg',
        ]);

        $this->crud->addField([
            'name' => 'description',
            'type' => 'wysiwyg',
            'label' => trans('jobmanager.default.description'),
        ]);
        $this->crud->addField([
            'name' => 'expire',
            'label' => trans('jobmanager.default.expire'),
            'type' => 'datetime',
            'default' => now(),
        ]);
        $this->crud->addField([
           'name' => 'thumbnail',
           'type' => 'browse',
           'default' => asset('images/job_default.png'),
        ]);

    }
}
