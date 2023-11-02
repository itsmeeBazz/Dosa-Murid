<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Kelas;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Siswa>
 */
class SiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $kode_kelas = Kelas::pluck('kode_kelas')->toArray();
        return [
            'nama' => fake()->name(),
            'nis' => fake()->unique()->numerify('####'),
            'nisn' => fake()->unique()->numerify('##########'),
            'tempat_lahir' => fake()->city(),
            'tanggal_lahir' => fake()->date('Y-m-d'),
            'jenis_kelamin' => fake()->randomElement(['L', 'P']),
            'alamat' => fake()->address(),
            'no_telpon' => fake()->phoneNumber(),
            'kode_kelas' => fake()->randomElement($kode_kelas),
        ];
    }
}
