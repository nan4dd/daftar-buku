<?php

namespace Tests\Feature;

use App\Models\Buku;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class BukuAksesTest extends TestCase
{
    use RefreshDatabase;

    private function buku(): Buku
    {
        return Buku::create(['judul' => 'Pulang', 'penulis' => 'Leila S. Chudori', 'tahun_terbit' => 2012]);
    }

    public function test_tamu_boleh_melihat_daftar_dan_detail(): void
    {
        $buku = $this->buku();

        $this->get('/buku')->assertOk()->assertSee('Pulang')->assertDontSee('Hapus');
        $this->get("/buku/{$buku->id}")->assertOk();
    }

    public function test_tamu_diarahkan_ke_login_saat_menambah_mengubah_menghapus(): void
    {
        $buku = $this->buku();

        $this->get('/buku/create')->assertRedirect('/login');
        $this->get("/buku/{$buku->id}/edit")->assertRedirect('/login');
        $this->post('/buku', ['judul' => 'X', 'penulis' => 'Y', 'tahun_terbit' => 2020])->assertRedirect('/login');
        $this->delete("/buku/{$buku->id}")->assertRedirect('/login');

        $this->assertDatabaseCount('buku', 1);
    }

    public function test_pengguna_login_boleh_menambah_dan_menghapus(): void
    {
        $user = User::factory()->create();
        $buku = $this->buku();

        $this->actingAs($user)->get('/buku/create')->assertOk();
        $this->actingAs($user)
            ->post('/buku', ['judul' => 'Hujan', 'penulis' => 'Tere Liye', 'penerbit' => 'Gramedia', 'tahun_terbit' => 2016])
            ->assertRedirect('/buku');
        $this->assertDatabaseHas('buku', ['judul' => 'Hujan', 'penerbit' => 'Gramedia']);

        $this->actingAs($user)->delete("/buku/{$buku->id}")->assertRedirect('/buku');
        $this->assertDatabaseMissing('buku', ['id' => $buku->id]);
    }

    public function test_pesan_validasi_berbahasa_indonesia(): void
    {
        $this->actingAs(User::factory()->create())
            ->post('/buku', ['judul' => '', 'penulis' => 'Tere Liye', 'tahun_terbit' => 3005])
            ->assertSessionHasErrors([
                'judul' => 'Isian judul wajib diisi.',
                'tahun_terbit' => 'Tahun terbit tidak boleh melebihi tahun sekarang (' . date('Y') . ').',
            ]);
    }
}
