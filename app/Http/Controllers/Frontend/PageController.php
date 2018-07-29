<?php

namespace App\Http\Controllers\Frontend;

use Backpack\PageManager\app\Models\Page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function index($slug = null)
    {
        if ($slug == null) {
            return $this->getHomePage();
        }
        $page = Page::findBySlug($slug);

        if (!$page) {
            abort(404, 'Please go back to our <a href="' . url('') . '">homepage</a>.');
        }

        $this->data['title'] = $page->title;
        $this->data['page'] = $page->withFakes();

        return view('frontend.pages.' . $page->template, $this->data);
    }

    public function getHomePage()
    {
        $page = Page::findBySlug('/');
        if ($page) {
            $this->data['title'] = $page->title;
        } else {
            $this->data['title'] = trans('frontend.home.title');
        }
        $this->data['page'] = $page->withFakes();

        return view('frontend.pages.homepage', $this->data);
    }
}
