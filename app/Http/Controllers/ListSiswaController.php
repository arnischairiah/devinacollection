<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\inputberita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ListSiswaController extends Controller
{

    public function tampil(){
        $notifications = auth()->user()->unreadNotifications;
        $list_siswa = DB::table('users')->where('level', '=', 2)->get();
        return view('pages/adminpage-listsiswa',[
            'list_siswa' => $list_siswa,
            'no' => 1,
            'notifications'=>$notifications
        ]);
        
    }

    public function profile($id)
    {
        $notifications = auth()->user()->unreadNotifications;
        $data = User::find($id);
        return view('pages/adminpage-profile',[
            'no' => 1,
            'notifications'=>$notifications,
        ] ,compact('data'));
    }

    public function edit($id)
    {
        $notifications = auth()->user()->unreadNotifications;
        $data = User::find($id);
        // dd($data);
        return view('pages/adminpage-editsiswa',[
            'notifications'=>$notifications,
            'no' => 1,
        ], compact('data'));
    }

    public function update(Request $request,$id)
    {   
        
        $data = User::find($id);
        $data->update($request->all());
        
        return redirect()->route('siswa')->with('Succes', 'Data Berhasil Di Update');
    }

    public function delete($id)
    {
        $data = User::find($id);
        $data->delete();
        return redirect()->route('siswa')->with('Succes', 'Data Berhasil Di Update');
    }
    


}
