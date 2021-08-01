<?php

use Illuminate\Database\Seeder;
use App\Perusahaan;

class PerusahaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ///
        Perusahaan::create([
          'nama' => 'Cha Cha Gas',
          'alamat' => 'jakarta',
          'no_telp' => '081212',
          'website' => 'chacha.com'
        ]);
    }
}
