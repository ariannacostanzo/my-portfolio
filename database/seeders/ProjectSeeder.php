<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = [
            [
                'name' => 'Progetto 1',
                'description' => 'Primo progetto',
                'is_visible' => 1,
                'link' => 'link',
            ],
            [
                'name' => 'Progetto 2',
                'description' => 'Secondo progetto',
                'is_visible' => 1,
                'link' => 'link',
            ],
            [
                'name' => 'Progetto 3',
                'description' => 'Terzo progetto',
                'is_visible' => 1,
                'link' => 'link',
            ],
            [
                'name' => 'Progetto 4',
                'description' => 'Quarto progetto',
                'is_visible' => 1,
                'link' => 'link',
            ],
            [
                'name' => 'Progetto 5',
                'description' => 'Quinti progetto',
                'is_visible' => 1,
                'link' => 'link',
            ],
            [
                'name' => 'Progetto 6',
                'description' => 'Sesto progetto',
                'is_visible' => 1,
                'link' => 'link',
            ],
        ];

        foreach($projects as $project) {
            $new_project = new Project();
            $new_project->fill($project);
            $new_project->save();
        }
    }
}
