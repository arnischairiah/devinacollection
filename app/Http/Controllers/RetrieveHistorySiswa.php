<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\History;
use Illuminate\Support\Facades\DB;

class RetrieveHistorySiswa extends Controller
{
    public function show()
    {
        // SELECTING FROM histories TABLE WHERE user_id = CURRENT AUTHENTICATED USER'S ID
        $historyData = DB::table("histories")->where("user_id", "=", auth()->user()->id)->get();

        if($historyData->isEmpty())
        {
            return view ('pages/siswapage-historitabungan', ['title' => "History", 'name' => auth()->user()->username]);
        }
        else
        {
            $data = array(
                    'histories'=>$historyData,
                    'title'=>'History',
                    'no'=>1,
                    'name'=>auth()->user()->username,
                );
            return view ('pages/siswapage-historitabungan')->with($data);
        }

    }
}
