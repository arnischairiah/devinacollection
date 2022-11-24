<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\History;
use App\Models\User;
use App\Notifications\SavingsNotification;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\DB;

class SavingFromTransfer extends Controller
{
    public function save(Request $request)
    {
        $savingsData = $request->validate([
            'user_id' => 'required',
            'amount' => 'required',
            'via' => 'required',
            'status' => 'required',
        ]);

        $convertAmount = explode(".", $savingsData['amount']);

        $savingsData['amount'] = implode("", $convertAmount);

        $admin = User::where('level', 1)->first();

        Notification::send($admin, new SavingsNotification(auth()->user()->username,  $savingsData['amount'], $request->via));

        History::create($savingsData);

        return redirect('/siswapage-tambahtabungan')->with('success', 'Your saving record has been created successfully!', ['title' => "Tambah", 'name' => auth()->user()->username]);
    }
}
