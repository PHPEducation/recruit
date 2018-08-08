<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;
use Illuminate\Database\Eloquent\SoftDeletes;

class Apply extends Model
{
    use CrudTrait;
    use SoftDeletes;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */
    protected static function boot()
    {
        parent::boot();
        static::with(Job::class);
    }

    protected $table = 'job_has_cvs';
    protected $fillable = [
        'is_pass',
    ];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */
    public function getDetailLink()
    {
        return url(config('backpack.base.route_prefix') . '/apply/review/' . $this->id);
    }

    public function getOpenButton()
    {
        return view('libraries.buttons.open_button', ['link' => $this->getDetailLink()]);
    }

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */
    public function job()
    {
        return $this->belongsTo(Job::class)->first();
    }

    public function cv()
    {
        return $this->belongsTo(CurriculumVitae::class)->first();
    }
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
}
