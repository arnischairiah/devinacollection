<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class ProfileSiswaController extends Controller
{
    public function profile()
    {
        $user = User::all();
        return view('pages.siswapage-profile',[
            "title" => "Profile",
        ], compact('user'));
    }

    public function editprofile()
    {
        return view('pages.siswapage-editprofile',[
                "title" => "Profile"
        ]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'username' => ['string'],
            'hobby' => ['string'],
            'alamat' => ['string'],
            'tempat_lahir' =>['string'],
            'tanggal_lahir' => ['date'],
            'kelas' => ['string'],
            'nohp' => ['string'],
        ]);
        
        DB::table('users')->where('id',auth()->user()->id)->update([
            'username' => $request->username,
            'hobby' => $request->hobby,
            'alamat' => $request->alamat,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'kelas' => $request->kelas,
            'nohp' => $request->nohp,
        ]);

        return redirect()->route('profile',[
            "title" => "Profile",
        ]);
        
    }
    
}
