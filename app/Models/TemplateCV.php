<?php

namespace App\Models;

use Backpack\CRUD\CrudTrait;
use Backpack\CRUD\ModelTraits\SpatieTranslatable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Config;

class TemplateCV extends Model
{
    use CrudTrait;
    use SluggableScopeHelpers;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'template_cvs';
    protected $fillable = [
        'template',
        'name',
        'title',
        'slug',
        'content',
        'extras',
        'path_source',
        'thumbnail',
    ];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */
    public static function findByPath($path)
    {
        $result = self::where('path_source', $path)->first();
        return $result;
    }

    public function getCvLink()
    {
        return url(Config::get('settings.cvs_page') . $this->slug);
    }

    public function getOpenButton()
    {
        return view('libraries.buttons.open_button', ['link' => $this->getCvLink()]);
    }
    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESORS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public static function findBySlug($slug)
    {
        return self::where('slug', $slug)->first();
    }
}
