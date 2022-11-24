<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\inputberita;

class BeritaController extends Controller
{
    public function index()
    {
        $notifications = auth()->user()->unreadNotifications;
        $no=0;
        $berita = inputberita::select('sampul', 'judul', 'slug', 'created_at')->latest()->get();
        return view('pages/adminpage-dashboard', compact('berita', 'notifications', 'no'));

    }

}

