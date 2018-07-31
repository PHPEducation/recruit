<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Job extends Model
{
    use CrudTrait;
//    use Sluggable;
    use SluggableScopeHelpers;
    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'jobs';
    protected $fillable = [
        'name',
        'guard_name',
        'description',
        'purposes',
        'salary',
        'expire',
        'is_active',
        'created_by',
        'updated_by',
        'deleted_by',
        'thumbnail',
    ];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */
    public function getJobLink()
    {
        return url('jobs/' . $this->guard_name);
    }

    public function getOpenButton()
    {
        return view('libraries.buttons.open_button', ['link' => $this->getJobLink()]);
    }

    public static function findBySlug(string $slug, array $columns = ['*'])
    {
        return static::whereGuardName($slug)->first($columns);
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
    public function scopeActive($query)
    {
        return $query->where('is_active', 1);
    }
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
    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        if ($this->guard_name != '') {
            return $this->guard_name;
        }

        return $this->title;
    }
}
