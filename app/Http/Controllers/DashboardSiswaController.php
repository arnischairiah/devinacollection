<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\History;
use App\Models\inputberita;
use Illuminate\Support\Facades\DB;

class DashboardSiswaController extends Controller
{
    public function show()
    {
        $totalSavings = DB::table("histories")->where("user_id", "=", auth()->user()->id)->where("status", '=', 'confirmed')->sum('amount', 'as', 'total');
        $berita = inputberita::select('sampul', 'judul', 'slug', 'created_at')->latest()->get();
        $data = array(
            'shortName' => explode(" ", auth()->user()->username),
            'title' => 'Dashboard',
            'name' => auth()->user()->username,
            'totalSavings' => $totalSavings,
            'berita' => $berita,
        );

        return view ("pages/siswapage-dashboard")->with($data);
    }
}
