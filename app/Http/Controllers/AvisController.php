<?php

namespace App\Http\Controllers;

use App\Models\Avis;
use App\Models\Satisfaction;
use Illuminate\Http\Request;

class AvisController extends Controller
{
    //
    function index(){
        $all_avis = Avis::all();
        return view('admin.views.avis.index', compact('all_avis'));
    }
    function create(){
        $all_avis = Avis::all();
        return view('admin.views.avis.create', compact('all_avis'));
    }
    function store(Request $request){
        $avis = new Avis;
        $avis->nom = $request->nom;
        $avis->fonction = $request->fonction;
        $avis->avis = $request->avis;

        $filename=" ";
        if($request->hasFile('picture')){
            $image = $request->file('picture');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $image->move('public/assets/avis/',$filename);
        }
        $avis->image = $filename;

        $avis->save();

        return redirect()->back()->with('success','Avis publié avec succès');

    }
    function edit($id){
        $avis = Avis::where('id',$id)->first();
        $all_avis = Avis::all();
        return view('admin.views.avis.edit', compact('avis', 'all_avis'));
    }
    function update(Request $request, $id){
        $filename=" ";
        if($request->hasFile('picture')){
            $image = $request->file('picture');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $image->move('public/assets/avis/',$filename);
            $avis = Avis::where('id', $id)->update(['nom'=>$request->nom, 'fonction' => $request->fonction, 'avis' => $request->avis, 'image' => $filename]);
        }
        else{
            $avis = Avis::where('id', $id)->update(['nom'=>$request->nom, 'fonction' => $request->fonction, 'avis' => $request->avis]);
        }
        return redirect()->back()->with('success','Avis mis à jour avec succès !');
    }
    function destroy($id){
        $avis = Avis::where('id', $id)->first();
        Avis::destroy($avis->id);
        $all_avis = Avis::all();
        return view('admin.views.avis.index', compact('all_avis'));
    }

    function publier($id){
        $satisfactiion = Satisfaction::where('id',$id)->update(['publie'=>"Oui"]);
        return redirect()->back()->with('success','Avis publié avec succès !');
    }

    function retirer($id){
        $satisfactiion = Satisfaction::where('id',$id)->update(['publie'=>"Non"]);
        return redirect()->back()->with('success','Avis retiré du site avec succès !');
    }

    function avis_list(){
        $all_avis = Satisfaction::where('statut',"done")->get();
        $avis_publies = Satisfaction::where('statut',"done")
                                      ->where('publie',"Oui")
                                      ->get();
        return view('admin.views.avis.index', compact('all_avis', 'avis_publies'));
    }
}
