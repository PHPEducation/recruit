<?php

namespace App\Http\Controllers\Admin;

use App\Models\CurriculumVitae;
use App\Models\TemplateCV;
use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\CurriculumVitaeRequest as StoreRequest;
use App\Http\Requests\CurriculumVitaeRequest as UpdateRequest;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Log;

/**
 * Class CurriculumVitaeCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class CurriculumVitaeCrudController extends CrudController
{
    public function __construct()
    {
        parent::__construct();
        $this->readTemplate();
    }

    protected function readTemplate()
    {
        $templates = array_filter(glob(resource_path('views/frontend/curriculum_vitaes/template*')), "is_dir");
        foreach ($templates as $template) {
            try {
                $temp = TemplateCV::findByPath($template);
                if (!$temp) {
                    $temp = new TemplateCV();
                    $temp->template = glob($template . '/layout.blade.php')[0];
                    $temp->name = 'template_default';
                    preg_match('(\/template_\w+$)', $template, $folder_name);
                    $temp->slug = mb_ereg_replace('(/', '', $folder_name[0]);
                    $temp->title = trim(mb_ereg_replace('(template|/|_)', ' ', $temp->slug));
                    $temp->path_source = $template;
                    if (file_exists(public_path('/curriculum_vitaes_themes/' . $temp->slug . '/thumbnail.png'))) $temp->thumbnail = asset('/curriculum_vitaes_themes/' . $temp->slug . '/thumbnail.png');
                    elseif (file_exists(public_path('/curriculum_vitaes_themes/' . $temp->slug . '/thumbnail.jpg'))) $temp->thumbnail = asset('/curriculum_vitaes_themes/' . $temp->slug . '/thumbnail.jpg');
                    else $temp->thumbnail = asset('/curriculum_vitaes_themes/thumbnail_default.png');

                    $temp->save();
                }
            } catch (\Exception $exception) {
                Log::error($exception->getMessage() . '\n' . $exception->getTraceAsString());
                dump($exception->getTraceAsString());
            }
        }
    }

    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\TemplateCV');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/template_cv');
        $this->crud->setEntityNameStrings('template_cv', 'template_cvs');

        // add asterisk for fields that are required in CurriculumVitaeRequest
        $this->crud->setRequiredFields(StoreRequest::class, 'create');
        $this->crud->setRequiredFields(UpdateRequest::class, 'edit');

//        $this->crud->addColumns(['name', 'title', 'path_source']);
        $this->crud->setFromDb();
        $this->crud->removeFields(['path_source', 'template', 'extras', 'content']);
        $this->crud->addField([
            'name' => 'template',
            'type' => 'browse',
            'readonly' => false
        ]);

        $this->crud->addButtonFromModelFunction('line', 'open', 'getOpenButton', 'beginning');
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
