<?php

namespace App\Http\Controllers\Frontend;

use App\Models\CurriculumVitae;
use Backpack\PageManager\app\Models\Page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Config;

class CuriculumVitaeController extends Controller
{

    public function index($slug = null)
    {
        if ($slug == null) {
            return $this->getListCurriculumViateList();
        }
        $page = CurriculumVitae::findBySlug($slug);

        if (!$page) {
            abort(404, trans('errors.404.message'));
        }

        $this->data['title'] = $page->title;
        $this->data['page'] = $page->withFakes();

        return view('frontend.pages.' . $page->template, $this->data);
    }

    public function getListCurriculumViateList()
    {
        $cv_home = Page::findBySlugOrFail(Config::get('settings.cvs_page'));
        $jobs = CurriculumVitae::paginate(6);
        $this->data['page'] = $cv_home->withFakes();
        $this->data['page']->jobs = $jobs;

        return view('frontend.curriculum_vitaes.homepage', $this->data);
    }
}
