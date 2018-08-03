<?php

use Illuminate\Database\Seeder;

class MenuTableSeeder extends Seeder
{
    public function run()
    {
        $pages = \Backpack\PageManager\app\Models\Page::where('slug', '/')->orWhere('slug', '/cvs')->orWhere('slug', '/jobs')->get();
        $count = 0;
        foreach ($pages as $key => $page) {
            try {
                $record['name'] = $page->name;
                $record['link'] = url($page->slug);
                $record['page_id'] = $page->page_id;
                $record['created_at'] = new DateTime();
                $record['updated_at'] = new DateTime();
                \Illuminate\Support\Facades\DB::table('menu_items')->insert($record);
                $count++;
            } catch (Exception $e) {
                $this->command->info('Record ' . $key . ' fail.');
                $this->command->error($e->getMessage());
            }
        }
        $this->command->info('Inserted ' . $count . ' records');
    }
}
