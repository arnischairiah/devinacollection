<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\History;

class SavingbyAdmin extends Controller
{
    public function save(Request $request)
    {
        $notifications = auth()->user()->unreadNotifications;

        $savingsData = $request->validate([
            'user_id' => 'required',
            'amount' => 'required',
            'via' => 'required',
            'status' => 'required',
        ]);

        $convertAmount = explode(".", $savingsData['amount']);

        $savingsData['amount'] = implode("", $convertAmount);

        History::create($savingsData);

        dd('Savings has been made successfully!');
        return redirect() -> route('admin-dashboard', compact('notifications'));
    }
}