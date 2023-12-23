<?php

namespace Database\Factories;

use App\Models\superadmin\laporan_jumlah_transaksi;
use Illuminate\Database\Eloquent\Factories\Factory;

class LaporanTransaksiFactory extends Factory
{
    protected $model = laporan_jumlah_transaksi::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama_transaksi' => $this->faker->nama_transaksi,
            'umkm' => $this->faker->umkm,
            'total_beli' => $this->faker->total_beli,
            'total_pendapatan' => $this->faker->total_pendapatan,
        ];
    }
}
