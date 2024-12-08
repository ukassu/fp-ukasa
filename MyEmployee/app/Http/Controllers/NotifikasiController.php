<?php

namespace App\Http\Controllers;

use App\Models\notifikasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotifikasiController extends Controller
{
    public function show()
    {
        $user = Auth::user();
        $notifikasi = $user->notifikasi;
        return view('MyEmployeeApp.notifikasi', compact('notifikasi'));
    }

    public function clear()
    {
        Notifikasi::where('user_id', Auth::id())->delete();
        return redirect()->route('notifikasi');
    }

    public function delete($id)
    {
        $notification = Notifikasi::where('id', $id)->where('user_id', Auth::id())->first();
        $notification->delete();
        return redirect()->route('notifikasi');
    }
}
