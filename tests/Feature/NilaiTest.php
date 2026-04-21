<?php

namespace Tests\Feature;

use Tests\TestCase;

class NilaiTest extends TestCase
{
    // Uji halaman input nilai bisa diakses
    public function test_halaman_input_nilai_dapat_diakses(): void
    {
        $response = $this->get('/dosen/input-nilai');

        $response->assertStatus(200);
    }

    // Uji input nilai berhasil disimpan
    public function test_input_nilai_berhasil_disimpan(): void
    {
        $response = $this->post('/dosen/input-nilai', [
            'id_mahasiswa' => 1,
            'id_matkul'    => 1,
            'nilai_akhir'  => 85,
            'nilai_huruf'  => 'A',
            'bobot_nilai'  => 4.0,
            'status_lulus' => 'Lulus',
        ]);

        $response->assertStatus(200);
    }
}
