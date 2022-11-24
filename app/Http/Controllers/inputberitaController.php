<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\inputberita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class inputberitaController extends Controller
{
    public function index()
    {
        $notifications = auth()->user()->unreadNotifications;
        $no=0;
        $inputberita = DB::table("inputberita")->get();
        return view('pages/inputberita/adminpage-inputberita', compact('inputberita', 'notifications', 'no'));
    }

    public function create()
    {
        return view('pages/inputberita/adminpage-listberita');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'sampul' => 'required|mimes:jpeg,jpg,png',
            'konten' => 'required',
            'slug' => 'required'
        ]);

        $sampul = $request->sampul->getClientOriginalName();
        $request->sampul->move('upload/inputberita', $sampul);

        inputberita::create([
            'sampul' => $request->sampul,
            'judul' => $request->judul,
            'konten' => $request->konten,
            'slug' => $request->slug
        ]);

        $notifications = auth()->user()->unreadNotifications;
        $no=0;

        $request->session()->flash('sukses', ' 
            <div class="alert alert-success" role="alert">
                Data Berhasil Ditambahkan
            </div>
        ');
        return view('pages/inputberita/adminpage-inputberita', compact('notifications', 'no'));
    }

    public function show()
    {
        $inputberita = inputberita::all();

        $data = array(
            'notifications' => auth()->user()->unreadNotifications,
            'berita' => $inputberita,
            'no'=>0,
        );

        // dd("Data Found", $data);

        return view('pages/inputberita/adminpage-inputberita')->with($data);
    }

    public function new()
    {
        $inputberita = inputberita::all();

        $data = array(
            'notifications' => auth()->user()->unreadNotifications,
            'berita' => $inputberita,
            'no'=>0,
        );

        // dd("Data Found", $data);

        return view('pages/inputberita/adminpage-listberita')->with($data);
    }

    public function delete($id)
    {

        DB::table('inputberita')
        ->where('id' ,'=', $id)
        ->delete();

        return redirect()->route('inputberita');
    }

    public function edit($id)
    {
        $notifications = auth()->user()->unreadNotifications;
        $no = 1;
        $beritaId = $id;
        $inputberita = inputberita::select('id', 'judul', 'sampul', 'konten')->whereId($id)->firstorfail();
        // dd("Data Found", $data);
        return view('pages/inputberita/edit', compact('inputberita', 'notifications', 'no', 'beritaId'));
    }

    public function update(Request $request, $id)
    {
        $validatedata = $request->validate([
            'judul' => 'required',
            'sampul' => 'required|mimes:jpeg,jpg,png',
            'konten' => 'required',
            'slug' => 'required'
        ]);

        DB::table('inputberita')->where('id',$id)->update([
            'judul' => $request->judul,
            'sampul' => $request->sampul,
            'konten' => $request->konten,
            'slug' => $request->slug,
        ]);
        
        $notifications = auth()->user()->unreadNotifications;
        $no=0;
        $inputberita = DB::table("inputberita")->get();
        return view('pages/inputberita/adminpage-inputberita', compact('inputberita', 'notifications', 'no'));

        $data = array(
            'notifications' => auth()->user()->unreadNotifications,
            'berita' => inputberita,
            'no'=>0,
        );
        

        return redirect()->route('inputberita')->with($data);
    }


    public function destroy($id)
    {
        //
    }
}
