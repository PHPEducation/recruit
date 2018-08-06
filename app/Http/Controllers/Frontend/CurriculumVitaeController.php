<?php

namespace App\Http\Controllers\Frontend;

use App\Models\CurriculumVitae;
use App\Models\Job;
use App\Models\TemplateCV;
use Backpack\PageManager\app\Models\Page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class CurriculumVitaeController extends Controller
{


    public function index($slug = null)
    {
        if ($slug == null) {
            return $this->getListCurriculumViateList();
        } else {
            $this->middleware('auth');
        }
        $template = TemplateCV::findBySlug($slug);
        $page = CurriculumVitae::findBySlug($slug);

        if (!$page) {
            abort(404, trans('errors.404.message'));
        }

        $this->data['title'] = $page->title;
        $this->data['page'] = $page->withFakes();
        $this->data['template'] = $template->withFakes();

        return view('frontend.curriculum_vitaes.' . $page->template, $this->data);
    }

    public function getListCurriculumViateList()
    {
        $cv_home = Page::findBySlugOrFail(Config::get('settings.cvs_page'));
        $cvs = auth()->user()->cvs()->get();
        $this->data['page'] = $cv_home->withFakes();
        $this->data['page']->cvs = $cvs;

        return view('frontend.curriculum_vitaes.homepage', $this->data);
    }

    public function create()
    {
        $this->data['user'] = auth()->user();
        // Tạo trước 1 CV, đặt trạng thái
        // Kiểm tra nếu user có 1 bản ghi CV chưa active, ( chưa save) thì lấy lại để sử dụng, không thì tạo mới

        $cv = CurriculumVitae::firstOrNew(['is_active' => 0, 'user_id' => $this->data['user']->id]);
        if ($cv->created_by == null) {
            $cv->created_by = $this->data['user']->id;
            $cv->updated_by = $this->data['user']->id;
            $cv->save();
        }
        $this->data['cv'] = $cv;

        return redirect()->route('frontend.cv.edit.get', ['id' => $cv->id]);
    }


    public function update(Request $request, $cv_id)
    {
        $res = [
            'success' => false,
            'message' => trans('errors.save_fail'),
        ];
        try {
            $cv = CurriculumVitae::findOrFail($cv_id);
            foreach ($request->data as $key => $data) {
                $cv->$key = json_encode($data);
            }
            $cv->is_active = 1;
            $cv->save();
            $res['success'] = true;
            $res['message'] = trans('errors.save_success');

            return $res;

        } catch (\Exception $exception) {
            Log::error($exception->getMessage());
            return $res;
        }
    }

    public function edit($cv_id)
    {
        $cv = CurriculumVitae::findOrFail($cv_id);
        $user = $cv->user();
        $this->data['cv'] = $cv;
        $this->data['user'] = $user;

        return view('frontend.curriculum_vitaes.template', $this->data);

    }

    public function apply($job_id)
    {
        $cvs = Auth::user()->cvs()->get();
        $job = Job::findOrFail($job_id);
        $this->data['cvs'] = $cvs;
        $this->data['job'] = $job;
        return view('frontend.jobs.apply', $this->data);
    }


    public function applyCV($job_id, $cv_id)
    {
        $check = DB::table('job_has_cvs')->where('job_id', $job_id)->where('cv_id', $cv_id)->first();
        if ($check) {
            return redirect()->route('frontend.jobs.apply.response', ['status'=>'existed']);
        } else {
            DB::table('job_has_cvs')->insert([
                'job_id' => $job_id,
                'cv_id' => $cv_id,
                'created_at' => new \DateTime(),
            ]);
            return redirect()->route('frontend.jobs.apply.response', ['status'=>'success']);
        }
    }
    public function response($status){
        switch ($status){
            case 'existed':
                return view('frontend.jobs.status.existed');
                break;
            case 'success':
                return view('frontend.jobs.status.success');
                return 'success';
                break;
            case 'fail':
                return view('frontend.jobs.status.fail');
                break;
            default:
                return view('frontend.jobs.status.fail');
        }
    }
}
