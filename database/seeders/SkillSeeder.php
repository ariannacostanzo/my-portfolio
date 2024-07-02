<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $skills = [
            [
                'name' => 'html',
                'image_path' => 'images/skills/html.png'
            ],
            [
                'name' => 'css',
                'image_path' => 'images/skills/css.webp'
            ],
            [
                'name' => 'javascript',
                'image_path' => 'images/skills/javascript.webp'
            ],
            [
                'name' => 'react',
                'image_path' => 'images/skills/react.png'
            ],
            [
                'name' => 'java',
                'image_path' => 'images/skills/java.png'
            ],
            [
                'name' => 'laravel',
                'image_path' => 'images/skills/laravel.png'
            ],
            [
                'name' => 'sass',
                'image_path' => 'images/skills/sass.png'
            ],
            [
                'name' => 'python',
                'image_path' => 'images/skills/python.webp'
            ],
            [
                'name' => 'vite',
                'image_path' => 'images/skills/vite.png'
            ],
            [
                'name' => 'vue',
                'image_path' => 'images/skills/vue.png'
            ],
            [
                'name' => 'tailwind',
                'image_path' => 'images/skills/tailwind.webp'
            ],
            [
                'name' => 'mysql',
                'image_path' => 'images/skills/mysql.png'
            ],
            [
                'name' => 'c#',
                'image_path' => 'images/skills/csharp.png'
            ],
            [
                'name' => 'git',
                'image_path' => 'images/skills/git.png'
            ],
            [
                'name' => 'postman',
                'image_path' => 'images/skills/postman.png'
            ],
            [
                'name' => 'unity',
                'image_path' => 'images/skills/unity.png'
            ],
        ];

        foreach ($skills as $skill) {
            $new_skill = new Skill();
            $new_skill->fill($skill);
            $new_skill->save();
        }
    }
}
