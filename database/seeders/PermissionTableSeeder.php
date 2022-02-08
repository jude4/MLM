<?php

namespace Database\Seeders;

use App\Models\Permissions;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Permissions::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $permisssion =  [
            [
                'name' => 'Admin List',
                'guard_name' => 'Admin Management',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
                'status' => '1',
            ],
            [
                'name' => 'Member List',
                'guard_name' => 'Member Management',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
                'status' => '1',
            ],
            [
                'name' => 'MLM Membership Management',
                'guard_name' => 'Member Management',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
                'status' => '1',
            ],
            [
                'name' => 'Total PV accumulation history',
                'guard_name' => 'PV management',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
                'status' => '1',
            ],
            [
                'name' => 'Total PV usage history',
                'guard_name' => 'PV management',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
                'status' => '1',
            ],
            [
                'name' => 'PV withdrawal request history',
                'guard_name' => 'PV management',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
                'status' => '1',
            ],
            [
                'name' => 'PV conversion application details',
                'guard_name' => 'PV management',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
                'status' => '1',
            ],
            [
                'name' => 'PV transmission application details',
                'guard_name' => 'PV management',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
                'status' => '1',
            ],
            [
                'name' => 'Elim Point Application Details',
                'guard_name' => 'Point Management',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
                'status' => '1',
            ],
            [
                'name' => 'Elim Point Exchange History',
                'guard_name' => 'Point Management',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
                'status' => '1',
            ],
            [
                'name' => 'Elim point transfer history',
                'guard_name' => 'Point Management',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
                'status' => '1',
            ],
            [
                'name' => 'T point details by member',
                'guard_name' => 'Point Management',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
                'status' => '1',
            ],
            [
                'name' => 'Trading order history',
                'guard_name' => 'ELIM Bot Management',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
                'status' => '1',
            ],
            [
                'name' => 'Trading Settings',
                'guard_name' => 'ELIM Bot Management',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
                'status' => '1',
            ],
            [
                'name' => 'Notice',
                'guard_name' => 'Customer Service Center',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
                'status' => '1',
            ],
            [
                'name' => 'Frequently Asked Questions',
                'guard_name' => 'Customer Service Center',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
                'status' => '1',
            ],
            [
                'name' => 'One-on-one inquiry',
                'guard_name' => 'Customer Service Center',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
                'status' => '1',
            ],

        ];

        Permissions::insert($permisssion);
    }
}
