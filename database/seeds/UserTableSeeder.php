<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    protected $record = [
        [
            'name' => 'root',
            'email' => 'root@gmail.com',
            'is_member' => 1,
            'is_active' => 1,
            'gender' => 1,
        ],
        [
            'name' => 'manager1',
            'is_member' => 1,
            'is_active' => 1,
            'gender' => 1,
        ],
        [
            'name' => 'manager2',
            'email' => 'manager2@gmail.com',
            'is_member' => 1,
            'is_active' => 1,
            'gender' => 1,
        ],
        [
            'name' => 'manager3',
            'email' => 'manager3@gmail.com',
            'is_member' => 1,
            'is_active' => 1,
            'gender' => 1,
        ],
        [
            'name' => 'trainer1',
            'email' => 'trainer1@gmail.com',
            'is_member' => 1,
            'is_active' => 1,
            'gender' => 1,
        ],
        [
            'name' => 'trainer2',
            'email' => 'trainer2@gmail.com',
            'is_member' => 1,
            'is_active' => 1,
            'gender' => 1,
        ],
        [
            'name' => 'trainer3',
            'email' => 'trainer3@gmail.com',
            'is_member' => 1,
            'is_active' => 1,
            'gender' => 1,
        ],
        [
            'name' => 'trainer4',
            'email' => 'trainer4@gmail.com',
            'is_member' => 1,
            'is_active' => 1,
            'gender' => 1,
        ],
        [
            'name' => 'trainer5',
            'email' => 'trainer5@gmail.com',
            'is_member' => 1,
            'is_active' => 1,
            'gender' => 1,
        ],
        [
            'name' => 'receptionist1',
            'email' => 'receptionist1@gmail.com',
            'is_member' => 1,
            'is_active' => 1,
            'gender' => 1,
        ],
        [
            'name' => 'receptionist2',
            'email' => 'receptionist2@gmail.com',
            'is_member' => 1,
            'is_active' => 1,
            'gender' => 1,
        ],
        [
            'name' => 'applicant1',
            'email' => 'applicant1@gmail.com',
            'is_member' => 1,
            'is_active' => 1,
            'gender' => 1,
        ],
        [
            'name' => 'applicant2',
            'email' => 'applicant2@gmail.com',
            'is_member' => 1,
            'is_active' => 1,
            'gender' => 1,
        ],
        [
            'name' => 'applicant3',
            'email' => 'applicant3@gmail.com',
            'is_member' => 1,
            'is_active' => 1,
            'gender' => 1,
        ],
        [
            'name' => 'applicant4',
            'email' => 'applicant4@gmail.com',
            'is_member' => 1,
            'is_active' => 1,
            'gender' => 1,
        ],
        [
            'name' => 'applicant5',
            'email' => 'applicant5@gmail.com',
            'is_member' => 1,
            'is_active' => 1,
            'gender' => 1,
        ],
        [
            'name' => 'applicant6',
            'email' => 'applicant6@gmail.com',
            'is_member' => 1,
            'is_active' => 1,
            'gender' => 1,
        ],
        [
            'name' => 'applicant7',
            'email' => 'applicant7@gmail.com',
            'is_member' => 1,
            'is_active' => 1,
            'gender' => 1,
        ],
        [
            'name' => 'applicant8',
            'email' => 'applicant8@gmail.com',
            'is_member' => 1,
            'is_active' => 1,
            'gender' => 1,
        ],
        [
            'name' => 'applicant9',
            'email' => 'applicant9@gmail.com',
            'is_member' => 1,
            'is_active' => 1,
            'gender' => 1,
        ],
        [
            'name' => 'applicant10',
            'email' => 'applicant10@gmail.com',
            'is_member' => 1,
            'is_active' => 1,
            'gender' => 1,
        ],
    ];
    public function run()
    {
        $count = 0;
        foreach ($this->records as $key => $record){
            try{
                $record['password'] = bcrypt('123456');
                $record['created_at'] = new DateTime();
                $record['updated_at'] = new DateTime();
                \Illuminate\Support\Facades\DB::table('user')->insert($record);
                $count++;
            }catch (Exception $e){
                $this->command->info('Record ' . $key . ' fail.');
            }
        }
        $this->command->info('Inserted ' . $count . ' records');
    }
}
