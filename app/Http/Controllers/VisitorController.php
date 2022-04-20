<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Prestation;
use App\Models\Realisation;
use App\Models\Satisfaction;
use App\Models\Visitor;
use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;
use Illuminate\Support\Facades\Hash;

class VisitorController extends Controller
{
    //
    public function welcome(Request $request){
        // $hash = Hash::make("Wootan@MLL#2021");
        // dd($hash);
        $this->save_visit($request);
        $prestations = Prestation::all();
        $realisations = Realisation::all();
        $categories=Category::all();
        $all_avis = Satisfaction::where('publie',"Oui")->get();
        $nb_avis = sizeof($all_avis);

        return view('index',compact('prestations','realisations','all_avis','nb_avis','categories'));
    }

    public function show(Prestation $prestation){
        $categories=Category::all();
        return view('prestation', compact('prestation','categories'));
    }

    function save_visit(Request $request){
        $visitor=new Visitor;
        $ip=$request->ip();
        if($ip=="127.0.0.1"){
            $ip="127.0.0.1:8000";
        }

        $position = Location::get($ip);
        if($position!=false){
            $location = $position->countryName.", ".$position->regionName.", ".$position->cityName;
        }
        else{
            $location = "Inconnue";
        }

        $visitor->ip = $ip;
        $visitor->visit_date = date("Y-m-d");
        $visitor->time = date("h:i:sa");
        $visitor->location = $location;
        $visitor->view = "Page d'Accueil";
        $visitor->save();
        return response()->json(['return' => 'Done !']);
    }
}
