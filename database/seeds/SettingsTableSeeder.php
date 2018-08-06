<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    protected $settings = [
        [
            'key' => 'logo',
            'name' => 'Logo Site',
            'description' => 'Logo của câu lạc bộ S4C',
            'value' => '/images/logo.png',
            'field' => '{"name":"value", "label":"Value", "type":"image"}',
            'active' => 1,
        ],
        [
            'key' => 'address',
            'name' => 'Địa chỉ',
            'description' => 'Địa chỉ của trụ sở, tạm coi là học viện',
            'value' => 'PTIT – Km10 Nguyễn Trãi, Hà Đông, Hà Nội',
            'field' => '{"name":"value", "label":"Value", "type":"textarea"}',
            'active' => 1,
        ],
        [
            'key' => 'copyright',
            'name' => 'Copyright',
            'description' => 'Copyright ở phía dưới trang web',
            'value' => '© 2018 S4C Club. All Rights Reserved',
            'field' => '{"name":"value", "label":"Value", "type":"textarea"}',
            'active' => 1,
        ],
        [
            'key' => 'description',
            'name' => 'Description',
            'description' => 'Description cho SEO',
            'value' => 'Nộp CV và ứng tuyển ngay vào những vị trí vô cùng hấp dẫn tại S4C Club. Cùng nhau trải nghiệm môi trường làm việc nhóm năng động, hiện đại và đầy nhiệt huyết.',
            'field' => '{"name":"value", "label":"Value", "type":"textarea"}',
            'active' => 1,
        ],
        [
            'key' => 'home_page',
            'name' => 'HomePage',
            'description' => 'Url trang chủ',
            'value' => '/',
            'field' => '{"name":"value", "label":"Value", "type":"Value"}',
            'active' => 1,
        ],
        [
            'key' => 'jobs_page',
            'name' => 'Jobs page',
            'description' => 'Các jobs available',
            'value' => '/jobs',
            'field' => '{"name":"value", "label":"Value", "type":"Value"}',
            'active' => 1,
        ],
        [
            'key' => 'jobs_page',
            'name' => 'Jobs page',
            'description' => 'Các jobs available',
            'value' => '/jobs',
            'field' => '{"name":"value", "label":"Value", "type":"Value"}',
            'active' => 1,
        ],
        [
            'key' => 'cvs_page',
            'name' => 'Curriculum vitae page',
            'description' => 'Các CV',
            'value' => '/cvs',
            'field' => '{"name":"value", "label":"Value", "type":"Value"}',
            'active' => 1,
        ],
        [
            'key' => 'contact_page',
            'name' => 'Contact page',
            'description' => 'Contact us page ',
            'value' => '/contact',
            'field' => '{"name":"value", "label":"Value", "type":"Value"}',
            'active' => 1,
        ],
        [
            'key' => 'about_page',
            'name' => 'About page',
            'description' => 'About us page',
            'value' => '/about',
            'field' => '{"name":"value", "label":"Value", "type":"Value"}',
            'active' => 1,
        ],
    ];

    public function run()
    {
        $count = 0;
        foreach ($this->settings as $index => $setting) {
            try {
                $result = \Illuminate\Support\Facades\DB::table('settings')->insert($setting);
                $count++;
            } catch (Exception $e) {
                $this->command->warn('Insert failed at record ' . $index . '.');
            }
        }
        $this->command->info('Inserted ' . $count . ' records.');
    }
}
