<?php

use Illuminate\Database\Seeder;

class JenisMobilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jenis_mobils')->insert([
            'nama' => 'Honda',
            'negara' => 'Jepang',
            'gambar' => 'Honda.jpg',
        ]);

        DB::table('jenis_mobils')->insert([
            'nama' => 'Toyota',
            'negara' => 'Jepang',
            'gambar' => 'Toyota.jpg',
        ]);

        DB::table('jenis_mobils')->insert([
            'nama' => 'Suzuki',
            'negara' => 'Jepang',
            'gambar' => 'Suzuki.jpg',
        ]);

        DB::table('jenis_mobils')->insert([
            'nama' => 'Dihatsu',
            'negara' => 'Jepang',
            'gambar' => 'Dihatsu.jpg',
        ]);

        DB::table('jenis_mobils')->insert([
            'nama' => 'Mitsubishi',
            'negara' => 'Jepang',
            'gambar' => 'Mitsubishi.jpg',
        ]);

        DB::table('jenis_mobils')->insert([
            'nama' => 'Nissan',
            'negara' => 'Jepang',
            'gambar' => 'Nissan.jpg',
        ]);
    }
}
