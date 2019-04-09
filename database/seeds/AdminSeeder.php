<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::insert('insert into users (id,level,phone ,address, name, email, password) values (?,?,?, ?, ?, ?, ?)', [1,'Admin','0795039006', 'Hà Nội', 'Nguyễn Huy Nguyên', 'nguyennh.vnist@gmail.com', bcrypt('12345')]);
    }
}
