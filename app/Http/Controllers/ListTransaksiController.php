<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\User;
use App\Models\History;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class ListTransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $limit=5;
    public function index()
    {
    
        $no=1;
        $notifications = auth()->user()->unreadNotifications;
        $users=User::paginate($this->limit);
        $histories=history::paginate($this->limit);
        return view('pages/adminpage-listtransaksi', [
            'no'=>$no, 
            'users'=>$users, 
            'histories'=>$histories, 
            'notifications'=>$notifications,
        ]);
        // ->filter(request(['search']))
    }

    public function confirm($id){
        $histories = history::findOrFail($id);
        DB::table('histories')
        -> where ('id',$id)
        -> update(['status'=>'confirmed']);
        return redirect()->route('list-transaksi')->with(['id' => $id, 'histories' => $histories] );
    }

    public function reject($id){
        $histories = history::findOrFail($id);
        DB::table('histories')
        -> where ('id',$id)
        -> update(['status'=>'rejected']);
        return redirect()->route('list-transaksi')->with(['id' => $id, 'histories' => $histories] );
    }

    public function history_pdf()
    {
        $no=1;
        $users=User::all();
        $histories=history::all();
    	$pdf = PDF::loadview('pages.history_pdf',['no'=>$no, 'users'=>$users, 'histories'=>$histories]);
    	return $pdf->stream();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}