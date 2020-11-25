<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("users")->insert([
            "name"      => "test",
            "username"  => "pendaftar",
            "password"  => Hash::make("pendaftar"),
            "level"     => "pendaftar"
        ]);
        DB::table("users")->insert([
            "name"      => "test",
            "username"  => "kabid",
            "password"  => Hash::make("kabid"),
            "level"     => "kabid"
        ]);
        DB::table("users")->insert([
            "name"      => "test",
            "username"  => "kepala",
            "password"  => Hash::make("kepala"),
            "level"     => "kepala"
        ]);
        DB::table("users")->insert([
            "name"      => "test",
            "username"  => "kasi",
            "password"  => Hash::make("kasi"),
            "level"     => "kasi"
        ]);
    }
}
