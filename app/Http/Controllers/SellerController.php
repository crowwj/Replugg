<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SellerController extends Controller
{
   
    public function checkRole()
    {
        $user = Auth::user();

   
        if ($user->role === 'admin' || $user->role === 'seller') {
        return redirect()->route('seller.form');
    }


        return redirect()->route('seller.terms');
    }

    
    public function showTerms()
    {
        return view('vendedor.terms'); 
    }

   
    public function becomeSeller()
    {
        $user = Auth::user();
        $user->role = 'seller'; 
        $user->save();

        return redirect()->route('seller.form')->with('status', '¡Felicidades! Ya puedes vender.');
    }

    public function showForm()
    {
        return view('vendedor.vender-producto'); 
    }
}