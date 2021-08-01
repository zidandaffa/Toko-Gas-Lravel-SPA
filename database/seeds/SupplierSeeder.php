<?php

use Illuminate\Database\Seeder;
use App\Supplier;
class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ///
        Supplier::create(['kode' => '1','nama' => 'budi','kontak' => '123213']);
        Supplier::create(['kode' => '2','nama' => 'arif','kontak' => '123212313']);
    }
}
