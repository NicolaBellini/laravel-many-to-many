<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;
use App\Models\Technology;


class project_technology_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // faccio l' operazione per 100 volte in modo da avere più di una tecnologia per progetto
        for($i=0;$i<100;$i++){

            $project = Project::inRandomOrder()->first();
            $technology_id= Technology::inRandomOrder()->first()->id;

            // dopo aver stabilito le variabil aggiungo la relazione nella tabella pivot
            $project->technologies()->attach($technology_id);
        }

    }
}
