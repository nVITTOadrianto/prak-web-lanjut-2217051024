<?php

namespace Database\Seeders;

use App\Models\Fakultas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FakultasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'Ekonomi & Bisnis',
            'Hukum',
            'Keguruan & Ilmu Pengetahuan',
            'Pertanian',
            'Teknik',
            'Ilmu Sosial & Ilmu Politik',
            'Matematika & Ilmu Pengetahuan Alam',
            'Kedokteran'
        ];

        foreach($data as $fakultas) {
            Fakultas::create([
                'nama_fakultas' => $fakultas
            ]);
        }
    }
}
