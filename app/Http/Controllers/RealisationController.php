<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Realisation;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;

class RealisationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $realisations=Realisation::all();
        $categories=Category::all();
        return view('admin.views.realisation.index', compact('realisations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $realisations = Realisation::all();
        return view('admin.views.realisation.create', compact('realisations'));
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
        $realisation = new Realisation;
        $realisation->service = $request->service;
        $realisation->description = $request->description;
        $realisation->adresse = $request->adresse;
        $filename=" ";
        if($request->hasFile('picture')){
            $image = $request->file('picture');
            $filename = time().'.'.$image->getClientOriginalExtension();
            /* $image->move('public/assets/realisations/',$filename); */
            $image->move('assets/realisations/',$filename);
        }
        $realisation->image = $filename;
        $realisation->save();

        return redirect()->back()->with('success','Nouvelle réalisation enregistrée avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Realisation  $realisation
     * @return \Illuminate\Http\Response
     */
    public function show(Realisation $realisation)
    {
        //
        $selected_realisation = $realisation;
        $realisations =  Realisation::all();
        return view('admin.views.realisation.edit', compact('realisation','realisations'));
    }
    public function detail(Category $category)
    {
        $title=$category->intitule;
        $categories=Category::all();
      if($category->intitule=="Robinetterie")
      {
          $realisations=Realisation::where("service","=","Lavabo & évier")->get();
      }
      elseif ($category->intitule=="Tuyauterie")
      {
        $realisations=Realisation::where("service","=","Tuyauterie et Canalisation")->get();

      }
      elseif ($category->intitule=="Salle de bain")
      {
        $realisations=Realisation::where("service","=","Douche & baignoire")->get();

      }
      elseif($category->intitule=="Toilette")
      {
        $realisations=Realisation::where("service","=","WC")->get();
      }
      elseif ($category->intitule=="Chauffage")
      {
        $realisations=Realisation::where("service","=","Chauffage")->get();

      }
        return view('detail-realisation', compact('categories','realisations','title'));
    }
   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Realisation  $realisation
     * @return \Illuminate\Http\Response
     */
    public function edit(Realisation $realisation)
    {
        //
        $realisations = Realisation::all();
        return view('admin.views.realisation.edit', compact('realisations', 'realisation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Realisation  $realisation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Realisation $realisation)
    {
        //
        $realisation->update(request()->all());
        return redirect()->back()->with('success','Modificiation effectuée avec succès !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Realisation  $realisation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Realisation $realisation)
    {
        //
        $image_path = 'assets/realisations/'.$realisation->image;
        Realisation::destroy($realisation->id);
        unlink($image_path);
        return redirect()->back()->with('success','Réalisation supprimée avec succès !');
    }
}
