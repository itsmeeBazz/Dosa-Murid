<?php

namespace Database\Factories;

use App\Models\Aksi;
use App\Models\Pelanggaran;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ListPelanggaran>
 */
class ListPelanggaranFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $kode_pelanggaran = Pelanggaran::pluck('kode_pelanggaran')->toArray();
        $kode_aksi = Aksi::pluck('kode_aksi')->toArray();
        return [
            'kode_aksi' => fake()->randomElement($kode_aksi),
            'kode_pelanggaran' => fake()->randomElement($kode_pelanggaran),
            'keterangan' => fake()->sentence(),
        ];
    }
}
