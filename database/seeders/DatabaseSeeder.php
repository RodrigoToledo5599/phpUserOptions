<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    
    public function run(): void
    {
         // Let's insert some sample tasks
         DB::table('tasks')->insert([
            'title' => 'Task 1',
            'description' => 'Description for Task 1',
            'user_id' => 4, 
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tasks')->insert([
            'title' => 'Task 2',
            'description' => 'Description for Task 2',
            'user_id' => 4, 
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tasks')->insert([
            'title' => 'Complete Project Proposal',
            'description' => 'Draft and complete the project proposal document for client review.',
            'user_id' => 6, 
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        DB::table('tasks')->insert([
            'title' => 'Meeting with Team',
            'description' => 'Schedule and conduct a meeting with the development team to discuss project timelines and goals.',
            'user_id' => 7, 
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        DB::table('tasks')->insert([
            'title' => 'Bug Fixing Session',
            'description' => 'Dedicate time to fix reported bugs and issues in the application.',
            'user_id' => 12, 
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        DB::table('tasks')->insert([
            'title' => 'Prepare for Product Launch',
            'description' => 'Coordinate with marketing and sales teams to prepare for the upcoming product launch event.',
            'user_id' => 4, 
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        DB::table('tasks')->insert([
            'title' => 'Research New Technologies',
            'description' => 'Stay updated on the latest technologies in web development and propose potential improvements.',
            'user_id' => 8,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        for ($userId = 4; $userId <= 13; $userId++) {
            for ($i = 1; $i <= 5; $i++) { // Create 5 tasks for each user
                DB::table('tasks')->insert([
                    'title' => "Task $i for User $userId",
                    'description' => "Description for Task $i for User $userId",
                    'user_id' => $userId,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
