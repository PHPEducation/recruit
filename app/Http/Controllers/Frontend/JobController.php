<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Job;
use Backpack\PageManager\app\Models\Page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Config;

class JobController extends Controller
{
    public function index($slug = null)
    {
        if ($slug == null) {
            return $this->getListJobPage();
        }
        $page = Job::findBySlug($slug);
        if (!$page) {
            abort(404, 'Please go back to our <a href="' . url('') . '">homepage</a>.');
        }

        $this->data['title'] = $page->title;

        return view('frontend.jobs.detail', $this->data);
    }

    public function getListJobPage()
    {
        $job_home = Page::findBySlugOrFail(Config::get('settings.jobs_page'));
        $jobs = Job::active()->paginate(6);
        $this->data['page'] = $job_home->withFakes();
        $this->data['page']->jobs = $jobs;

        return view('frontend.jobs.homepage', $this->data);
    }
}
