<?php

namespace App\Models;

use App\User;
use Backpack\CRUD\ModelTraits\SpatieTranslatable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Config;

class CurriculumVitae extends Model
{
    use CrudTrait;
    use SluggableScopeHelpers;
    use SoftDeletes;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'curiculum_vitaes';
    protected $fillable = [
        'user_id',
        'description',
        'basic_information',
        'skills',
        'experiences',
        'studies',
        'activities',
        'socials',
        'external_sources',
        'is_pass',
        'is_active',
        'created_by',
        'updated_by',
        'deleted_by',
    ];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id')->first();
    }
    public function jobs(){
        return $this->belongsToMany(Job::class);
    }
    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */
    public function createCV($user)
    {
        $this->user_id = $user->id;
        $this->created_by = auth()->user()->id;
        $this->updated_by = auth()->user()->id;
        $this->save();
        return $this;
    }

    /*
    |--------------------------------------------------------------------------
    | ACCESORS
    |--------------------------------------------------------------------------
    */
    public function getBasicInformationAttribute($value)
    {
        return json_decode($value);
    }

    public function getDescriptionAttribute($value)
    {
        return json_decode($value);
    }

    public function getSkillsAttribute($value)
    {
        return json_decode($value);
    }

    public function getExperiencesAttribute($value)
    {
        return json_decode($value);
    }

    public function getStudiesAttribute($value)
    {
        return json_decode($value);
    }

    public function getActivitiesAttribute($value)
    {
        return json_decode($value);
    }

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

}
