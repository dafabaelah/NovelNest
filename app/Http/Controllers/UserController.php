<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Novel;
use App\Models\RiwayatBaca;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    // public function index()
    // {
    //     return view('dashboard.user.index');
    // }
    public function kategori()
    {
        $kategoris = Kategori::all(); // Mengambil semua data kategori
        return view('dashboard.user.kategori.index');
    }
    public function mybook()
    {
        return view('dashboard.user.mybook.index');
    }
    public function favorite()
    {
        return view('dashboard.user.favorite.index');
    }
    public function feedback()
    {
        return view('dashboard.user.feedback.index');
    }
    public function bestSeller()
    {
        return view('dashboard.user.bestSeller.index');
    }
    public function about()
    {
        return view('dashboard.user.about.index');
    }
    public function home()
    {
        $novels = Novel::all();

        $novels->each(function ($novel) {
            if ($novel->gambar_novel) {
                $novel->gambar_novel = asset('storage/uploads/' . $novel->gambar_novel);
            } else {
                $novel->gambar_novel = null;
            }
        });
        return view('dashboard.user.index', compact('novels'));
    }

    public function readNovel($id)
    {
        $novel = Novel::findOrFail($id);
        // dd($novel);

        if ($novel->gambar_novel) {
            $novel->gambar_novel = asset('storage/uploads/' . $novel->gambar_novel);
        } else {
            $novel->gambar_novel = null;
        }

        if (!$novel) {
            // Novel not found, handle accordingly (e.g., show an error page)
            return redirect()->route('errorPage');
        }

        // Mendapatkan ID pengguna yang sedang login
        $userId = Auth::id();
        // Mencari riwayat baca pengguna untuk novel tertentu
        // $riwayatBaca = RiwayatBaca::where('id_user', $userId)->where('id_novel', $novel->id_novel)->first();
        // Menghitung progres membaca
        // $progresMembaca = $riwayatBaca ? round(($riwayatBaca->halaman_terakhir / $novel->total_halaman) * 100, 2) : 10;
        // $totalPages = $novel->total_halaman;
        // $progresMembaca = $riwayatBaca ? round(($riwayatBaca->halaman_terakhir / $totalPages) * 100, 2) : 0;

        // dd($progresMembaca);

        // Assuming $novel->deskripsi_novel contains the paragraphs
        $paragraphs = explode("</p>", $novel->deskripsi_novel);

        // Filter out empty paragraphs
        $paragraphs = array_filter($paragraphs);

        // Count the number of paragraphs
        $totalParagraphs = count($paragraphs);

        // Check if the user has a reading history for this novel
        $riwayatBaca = RiwayatBaca::where('id_user', $userId)->where('id_novel', $novel->id_novel)->first();
        $totalPages = $novel->total_halaman;
        $progresMembaca = $riwayatBaca ? round(($riwayatBaca->halaman_terakhir / $totalPages) * 100, 2) : 0;

        if (!$riwayatBaca) {
            // If there is no reading history, create one with the total number of paragraphs
            RiwayatBaca::create([
                'id_user' => $userId,
                'id_novel' => $novel->id,
                'halaman_terakhir' => $totalParagraphs,
            ]);
        } else {
            // If there is a reading history, update the reading progress
            $riwayatBaca->update([
                'halaman_terakhir' => $totalParagraphs,
            ]);
        }

        return view('dashboard.user.reading', compact('novel', 'progresMembaca'));
    }
}
