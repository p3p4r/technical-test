<?php

namespace Database\Seeders;

use App\Enums\Roles;
use App\Enums\RoleStatuses;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $table_name = 'roles';
        $num_roles = DB::table($table_name)->count();
        if ($num_roles !== 0) {
            return;
        }
        $roles = Roles::array();
        $data = [];
        foreach($roles as $id => $role) {
            $data[] = [
                'id' => $id,
                'name' => Str($role),
                'status' => RoleStatuses::ACTIVE,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ];
        }

        if (!empty($data)) {
            DB::table($table_name)->insert($data);
        }
    }
}
