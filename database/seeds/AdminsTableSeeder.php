<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->delete();
        $adminRecords =  [
            [
                'id' => 1, 'name' => 'admin', 'type' => 'admin', 'mobile' => '09120823679',
                'email' => 'admin@admin.com', 'password' => '$2y$10$mTCV4BGqVhXgjGLvqwjAJ..zVZcTrBSPpCj1B/3W8DEwkLel2Rx8i',
                'image' => '', 'status' => 1,

            ],
            [
                'id' => 2, 'name' => 'john', 'type' => 'subadmin', 'mobile' => '09120823679',
                'email' => 'john@admin.com', 'password' => '$2y$10$mTCV4BGqVhXgjGLvqwjAJ..zVZcTrBSPpCj1B/3W8DEwkLel2Rx8i',
                'image' => '', 'status' => 1,

            ],
        ];

        DB::table('admins')->insert($adminRecords);
        // foreach ($adminRecords as $key  =>  $record) {
        //     \App\Admin::create($record);
        // }
    }
}
