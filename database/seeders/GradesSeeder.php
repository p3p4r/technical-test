<?php

namespace Database\Seeders;

use App\Enums\Grades;
use App\Enums\GradeStatuses;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class GradesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $table_name = 'grades';
        $num_grades = DB::table($table_name)->count();
        if ($num_grades !== 0) {
            return;
        }
        $grades = Grades::array();
        $data = [];
        foreach($grades as $id => $grade) {
            $data[] = [
                'id'=> $id,
                'name' => $grade,
                'status' =>  GradeStatuses::ACTIVE,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ];
        }

        if (!empty($data)) {
            DB::table($table_name)->insert($data);
        }
    }
}
