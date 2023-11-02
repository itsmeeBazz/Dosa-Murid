<?php

namespace Database\Factories;

use App\Models\GuruBK;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Siswa;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Aksi>
 */
class AksiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $nis_siswa = Siswa::pluck('nis')->toArray();
        $kode_bk = GuruBK::pluck('kode_bk')->toArray();
        return [
            'kode_aksi' => 'AKS' . fake()->unique()->numerify('####'),
            'nis_siswa' => fake()->randomElement($nis_siswa),
            'tanggal' => fake()->date('Y-m-d'),
            'waktu' => fake()->time('H:i:s'),
            'kode_bk' => fake()->randomElement($kode_bk),
        ];
    }
}
