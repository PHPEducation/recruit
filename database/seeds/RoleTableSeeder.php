<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    protected $record = [
        [
            'name' => 'Root',
            'guard_name' =>'root',
        ],
        [
            'name' => 'Quản lý',
            'guard_name' =>'manager',
        ],
        [
            'name' => 'Trainer',
            'guard_name' =>'trainer',
        ],
        [
            'name' => 'Tuyển dụng',
            'guard_name' =>'receptionist',
        ],
        [
            'name' => 'Ứng viên',
            'guard_name' =>'applicant',
        ],
    ];
    public function run()
    {
        $count = 0;
        foreach ($this->records as $key => $record){
            try{
                $record['created_at'] = new DateTime();
                $record['updated_at'] = new DateTime();
                \Illuminate\Support\Facades\DB::table('roles')->insert($record);
                $count++;
            }catch (Exception $e){
                $this->command->info('Record ' . $key . ' fail.');
            }
        }
        $this->command->info('Inserted ' . $count . ' records');
    }
}
