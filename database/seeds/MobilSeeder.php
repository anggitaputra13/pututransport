<?php

use Illuminate\Database\Seeder;

class MobilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mobils')->insert([
            'nama' => 'Honda Brio RS',
            'harga' => 300000,
            // 'harga_tambahan' => '',
            // 'is_ready' => '',
            'jenis_mobil' => 'Matic',
            'warna' => 'Merah',
            'tahun' => '2020',
            'kapasitas' => 6,
            'gambar' => 'hondabriors.jpg',
            'jenismobil_id' => 1,
        ]);

        DB::table('mobils')->insert([
            'nama' => 'Avanza Veloz',
            'harga' => 250000,
            // 'harga_tambahan' => '',
            // 'is_ready' => '',
            'jenis_mobil' => 'Manual',
            'warna' => 'Putih',
            'tahun' => '2020',
            'kapasitas' => 6,
            'gambar' => 'avanzaveloz.jpg',
            'jenismobil_id' => 2,
        ]);

        DB::table('mobils')->insert([
            'nama' => 'Suzuki R3',
            'harga' => 250000,
            // 'harga_tambahan' => '',
            // 'is_ready' => '',
            'jenis_mobil' => 'Matic',
            'warna' => 'Merah',
            'tahun' => '2020',
            'kapasitas' => 6,
            'gambar' => 'suzukir3.jpg',
            'jenismobil_id' => 3,
        ]);

        DB::table('mobils')->insert([
            'nama' => 'Ayla',
            'harga' => 200000,
            // 'harga_tambahan' => '',
            // 'is_ready' => '',
            'jenis_mobil' => 'Matic',
            'warna' => 'Putih',
            'tahun' => '2020',
            'kapasitas' => 4,
            'gambar' => 'ayla.jpg',
            'jenismobil_id' => 4,
        ]);

        DB::table('mobils')->insert([
            'nama' => 'Pajero Sport',
            'harga' => 300000,
            // 'harga_tambahan' => '',
            // 'is_ready' => '',
            'jenis_mobil' => 'Manual',
            'warna' => 'Hitam',
            'tahun' => '2020',
            'kapasitas' => 8,
            'gambar' => 'pajero.jpg',
            'jenismobil_id' => 5,
        ]);

        DB::table('mobils')->insert([
            'nama' => 'Nissan Juke',
            'harga' => 300000,
            // 'harga_tambahan' => ,
            // 'is_ready' => '',
            'jenis_mobil' => 'Manual',
            'warna' => 'Merah',
            'tahun' => '2020',
            'kapasitas' => 6,
            'gambar' => 'nissanjuke.jpg',
            'jenismobil_id' => 6,
        ]);
    }
}
