<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    protected $records = [
        [
            'name' => 'Đăng nhập',
            'guard_name' =>'login',
        ],
        [
            'name' => 'Đăng ký',
            'guard_name' =>'register',
        ],
        [
            'name' => 'Reset password',
            'guard_name' =>'reset_password',
        ],
        [
            'name' => 'Xác thực tài khoản',
            'guard_name' =>'verify_account',
        ],
        [
            'name' => 'Cấp quyền user',
            'guard_name' =>'grant_user',
        ],
        [
            'name' => 'Deactive User',
            'guard_name' =>'deactive_user',
        ],
        [
            'name' => 'Xem các job',
            'guard_name' =>'show_jobs',
        ],
        [
            'name' => 'Tạo thêm job',
            'guard_name' =>'create_jobs',
        ],
        [
            'name' => 'Sửa thông tin job',
            'guard_name' =>'change_info_job',
        ],
        [
            'name' => 'Deactive Job đang thực hiện',
            'guard_name' =>'deactive_job',
        ],
        [
            'name' => 'Tạo CV',
            'guard_name' =>'create_cv',
        ],
        [
            'name' => 'Sửa CV',
            'guard_name' =>'change_cv',
        ],
        [
            'name' => 'Xoá CV',
            'guard_name' =>'delete_cv',
        ],
        [
            'name' => 'Xem CV',
            'guard_name' =>'show_cv',
        ],
        [
            'name' => 'Vote CV',
            'guard_name' =>'vote_cv',
        ],
        [
            'name' => 'Xác nhận Pass CV',
            'guard_name' =>'verify_pass_cv',
        ],
        [
            'name' => 'Chọn lịch phỏng vấn',
            'guard_name' =>'select_interview_schedule',
        ],
        [
            'name' => 'Xếp lịch mời phỏng vấn',
            'guard_name' =>'arrange_interview_schedule',
        ],
        [
            'name' => 'Xác nhận check in khi ứng viên tới tham gia phỏng vấn',
            'guard_name' =>'checkin',
        ],
        [
            'name' => 'Xem đề phỏng vấn',
            'guard_name' =>'show_threads_interview',
        ],
        [
            'name' => 'Tạo form phỏng vấn',
            'guard_name' =>'create_forms',
        ],
        [
            'name' => 'Cập nhật kết quả phỏng vấn',
            'guard_name' =>'update_results',
        ],
        [
            'name' => 'Xoá kết quả phỏng vấn',
            'guard_name' =>'delete_results',
        ],
        [
            'name' => 'Xem kết quả phỏng vấn',
            'guard_name' =>'show_results',
        ],
        [
            'name' => 'Xem danh sách các câu hỏi',
            'guard_name' =>'show_questions',
        ],
        [
            'name' => 'Xem thông tin của ứng viên',
            'guard_name' =>'show_applicant_infor',
        ],
        [
            'name' => 'Xem danh sách ứng viên',
            'guard_name' =>'show_applicant_list',
        ],
        [
            'name' => 'Xếp ứng viên ưu tiên vào phỏng vấn',
            'guard_name' =>'arrange_applicant_interview',
        ],
        [
            'name' => 'Vote ứng viên pass phỏng vấn',
            'guard_name' =>'vote_pass_applicant',
        ],
        [
            'name' => 'Xác nhận ứng viên trúng/trượt',
            'guard_name' =>'verify_applicant',
        ],
        [
            'name' => 'Xác nhận thời gian trả kết quả',
            'guard_name' =>'verify_feedback_time',
        ],
        [
            'name' => 'Xem lại kết quả ',
            'guard_name' =>'show_result',
        ],
    ];
    public function run()
    {
        $count = 0;
        foreach ($this->records as $key => $record){
            try{
                $record['created_at'] = new DateTime();
                $record['updated_at'] = new DateTime();
                \Illuminate\Support\Facades\DB::table('permissions')->insert($record);
                $count++;
            }catch (Exception $e){
                $this->command->info('Record ' . $key . ' fail.');
            }
        }

        $this->command->info('Inserted ' . $count . ' records');

    }
}
