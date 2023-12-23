<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\superadmin\laporan_jumlah_transaksi;

class LaporanTransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        laporan_jumlah_transaksi::factory()->count(100)->create();
    }
}
