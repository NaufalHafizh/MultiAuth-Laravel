<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class project_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Project::create([

            'nama_project' => 'Testing-1',
            'keterangan' => 'Testing-1 adalah sebuah project yang dikembangkan untuk mengetets 1',
            'status' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Project::create([

            'nama_project' => 'Testing-2',
            'keterangan' => 'Testing-1 adalah sebuah project yang dikembangkan untuk mengetets 2',
            'status' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
