<?php

use Illuminate\Database\Seeder;

class FeedbackTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('feedback_types')->delete();
        factory(App\FeedbackType::class, 5)->create();
    }
}
