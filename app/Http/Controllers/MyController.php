<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;

use Illuminate\Http\Request;

class MyController extends Controller
{
    //
    public function method(Request $request) {
        // Do your stuff with the request..
         //
        $existing_email = Newsletter::where('email', $request->email)->get();
        $nb = $existing_email->count();

        if($nb==0){
            $newsletter = new Newsletter;
            $newsletter->email = $request->email;
            $newsletter->save();
            return response()->json(['return' => 'Abonnement à la Newsletter effectuée avec succès !']);
        }
        else{
            return response()->json(['return' => 'Vous êtes déjà abonné à la Newsletter !']);            
        }
 }
}
