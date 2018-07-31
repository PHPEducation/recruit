<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class PageTableSeeder extends Seeder
{
    protected $records = [
        [
            'template' => 'homepage_default',
            'name' => 'homepage',
            'title' => 'Trang Chủ',
            'slug' => '/',
            'content' => '',
            'extras' => '{"meta_title":"Trang ch\u1ee7 s4c - c\u00e2u l\u1ea1c b\u1ed9 k\u1ef9 n\u0103ng m\u1ec1m","meta_description":"c\u00e2u l\u1ea1c b\u1ed9 k\u0129 n\u0103ng m\u1ec1m S4C","meta_keywords":"s4c, clb s4c","banner_background":null,"left_banner_title":"B\u1ea1n ch\u01b0a c\u00f3 CV cho ri\u00eang m\u00ecnh?","left_banner_content":"D\u1ec5 d\u00e0ng t\u1ea1o CV v\u00e0 \u1ee9ng tuy\u1ec3n ngay v\u00e0o S4C Club ch\u1ec9 trong 5 ph\u00fat","left_banner_button_title":"T\u1ea1o CV c\u1ee7a b\u1ea1n","left_banner_button_icon":"fa-pencil","left_banner_button_link":"\/cvs","left_banner_background":null,"right_banner_title":"B\u1ea1n \u0111\u00e3 c\u00f3 CV <br> \u1ee9ng tuy\u1ec3n ngay!","right_banner_content":"T\u00ecm ki\u1ebfm v\u1ecb tr\u00ed ph\u00f9 h\u1ee3p, m\u00f4i tr\u01b0\u1eddng ph\u00e1t tri\u1ec3n to\u00e0n di\u1ec7n t\u1ea1i S4C","right_banner_button_title":"N\u1ed9p CV ngay","right_banner_button_icon":"fa-search","right_banner_button_link":"\/jobs","right_banner_background":null,"section_infography_title":"\u1ee8ng tuy\u1ec3n v\u00e0o S4C Club nh\u01b0 th\u1ebf n\u00e0o?","section_inforgraphy_content":"[{\"thumbnail\":\"https:\/\/www.topcv.vn\/v3\/images\/welcome\/how_1.png\",\"title\":\"T\u1ea1o CV\",\"link\":\"#\"},{\"thumbnail\":\"https:\/\/www.topcv.vn\/v3\/images\/welcome\/how_2.png\",\"title\":\"N\u1ed9p CV\",\"link\":\"#\"},{\"thumbnail\":\"https:\/\/www.topcv.vn\/v3\/images\/welcome\/how_3.png\",\"title\":\"\u0110i ph\u1ecfng v\u1ea5n\",\"link\":\"#\"}]","section_reason_title":"T\u1ea1i sao b\u1ea1n n\u00ean tham gia v\u00e0o S4C Club?","section_reason_content":"[{\"thumbnail\":\"https:\/\/www.topcv.vn\/v3\/images\/welcome\/why_1.png\",\"title\":\"M\u00f4i tr\u01b0\u1eddng sinh vi\u00ean n\u0103ng \u0111\u1ed9ng\",\"description\":\"V\u1edbi r\u1ea5t nhi\u1ec1u m\u1eabu CV \u0111\u1ed9c \u0111\u00e1o, t\u01b0\u01a1ng t\u00e1c tr\u1ef1c quan c\u00f9ng v\u1edbi \u0111a d\u1ea1ng ng\u00f4n ng\u1eef (Vi\u1ec7t, Anh, Nh\u1eadt) gi\u00fap b\u1ea1n d\u1ec5 d\u00e0ng s\u1edf h\u1eefu CV chuy\u00ean nghi\u1ec7p.\"},{\"thumbnail\":\"https:\/\/www.topcv.vn\/v3\/images\/welcome\/why_2.png\",\"title\":\"\u0110\u01b0\u1ee3c tham gia nhi\u1ec1u s\u1ef1 ki\u1ec7n\",\"description\":\"V\u1edbi r\u1ea5t nhi\u1ec1u m\u1eabu CV \u0111\u1ed9c \u0111\u00e1o, t\u01b0\u01a1ng t\u00e1c tr\u1ef1c quan c\u00f9ng v\u1edbi \u0111a d\u1ea1ng ng\u00f4n ng\u1eef (Vi\u1ec7t, Anh, Nh\u1eadt) gi\u00fap b\u1ea1n d\u1ec5 d\u00e0ng s\u1edf h\u1eefu CV chuy\u00ean nghi\u1ec7p.\"},{\"thumbnail\":\"https:\/\/www.topcv.vn\/v3\/images\/welcome\/why_3.png\",\"title\":\"\u0110\u01b0\u1ee3c teamwork h\u1ebft m\u00ecnh\",\"description\":\"V\u1edbi r\u1ea5t nhi\u1ec1u m\u1eabu CV \u0111\u1ed9c \u0111\u00e1o, t\u01b0\u01a1ng t\u00e1c tr\u1ef1c quan c\u00f9ng v\u1edbi \u0111a d\u1ea1ng ng\u00f4n ng\u1eef (Vi\u1ec7t, Anh, Nh\u1eadt) gi\u00fap b\u1ea1n d\u1ec5 d\u00e0ng s\u1edf h\u1eefu CV chuy\u00ean nghi\u1ec7p.\"},{\"thumbnail\":\"https:\/\/www.topcv.vn\/v3\/images\/welcome\/why_4.png\",\"title\":\"\u0110\u01b0\u1ee3c g\u1eb7p g\u1ee1 nh\u1eefng ng\u01b0\u1eddi n\u1ed5i ti\u1ebfng\",\"description\":\"V\u1edbi r\u1ea5t nhi\u1ec1u m\u1eabu CV \u0111\u1ed9c \u0111\u00e1o, t\u01b0\u01a1ng t\u00e1c tr\u1ef1c quan c\u00f9ng v\u1edbi \u0111a d\u1ea1ng ng\u00f4n ng\u1eef (Vi\u1ec7t, Anh, Nh\u1eadt) gi\u00fap b\u1ea1n d\u1ec5 d\u00e0ng s\u1edf h\u1eefu CV chuy\u00ean nghi\u1ec7p.\"}]","section_member_title":"TH\u00c0NH VI\u00caN N\u1ed4I B\u1eacT","section_member_content":"[{\"avatar\":\"#\",\"name\":\"#\",\"position\":\"#\",\"comment\":\"#\"},{\"avatar\":\"#\",\"name\":\"#\",\"position\":\"#\",\"comment\":\"#\"},{\"avatar\":\"#\",\"name\":\"#\",\"position\":\"#\",\"comment\":\"#\"},{\"avatar\":\"#\",\"name\":\"#\",\"position\":\"#\",\"comment\":\"#\"},{\"avatar\":\"#\",\"name\":\"#\",\"position\":\"#\",\"comment\":\"#\"},{\"avatar\":\"#\",\"name\":\"#\",\"position\":\"#\",\"comment\":\"#\"}]"}'
        ],
        [
            'template' => 'choose_cv',
            'name' => 'choose cv',
            'title' => 'Mẫu CV',
            'slug' => '/cvs',
            'content' => '',
            'extras' => '{"meta_title":"Trang ch\u1ee7 s4c - c\u00e2u l\u1ea1c b\u1ed9 k\u1ef9 n\u0103ng m\u1ec1m","meta_description":"c\u00e2u l\u1ea1c b\u1ed9 k\u0129 n\u0103ng m\u1ec1m S4C","meta_keywords":"s4c, s4c clb"}',
        ],
        [
            'template' => 'list_jobs',
            'name' => 'list job',
            'title' => 'Danh sách các công việc cần nhân sự',
            'slug' => '/jobs',
            'content' => '',
            'extras' => '{"meta_title":"Trang ch\u1ee7 s4c - c\u00e2u l\u1ea1c b\u1ed9 k\u1ef9 n\u0103ng m\u1ec1m","meta_description":"c\u00e2u l\u1ea1c b\u1ed9 k\u0129 n\u0103ng m\u1ec1m S4C","meta_keywords":null,"heading":"C\u00e1c c\u00f4ng vi\u1ec7c \u0111ang c\u1ea7n t\u00ecm nh\u00e2n s\u1ef1","sub_heading":"\u1ee8ng tuy\u1ec3n v\u00e0o b\u1ea5t c\u1ee9 v\u1ecb tr\u00ed n\u00e0o b\u1ea1n mong mu\u1ed1n"}',
            ],

    ];

    public function run()
    {
        $count = 0;
        foreach ($this->records as $key => $record) {
            try {
//                $record['created_at'] = new DateTime();
//                $record['updated_at'] = new DateTime();
                \Illuminate\Support\Facades\DB::table('pages')->insert($record);
                $count++;
            } catch (Exception $e) {
                $this->command->info('Record ' . $key . ' fail.');
                $this->command->error($e->getMessage());
            }
        }
        $this->command->info('Inserted ' . $count . ' records');
    }
}
