<?php

namespace App\Http\Controllers;

use App\Models\Prestation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PrestationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $prestations=Prestation::all();
        return view('admin.views.prestation.index', compact('prestations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
        $prestations = Prestation::all();
        return view('admin.views.prestation.create', compact('prestations'/*, 'list_icons'*/));
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
        $prestation = new Prestation;
        $datas = $request->validate([
            "nom" => ['required', 'string'],
            'description' => ['required', 'string'],
            'icone' => ['required', 'image'],
        ],
        [
            'required' => 'Le champs :attribute est requis.',
            'image' => 'Seules les images sont acceptées',
            'string' => 'Le champs :attribute doit être une chaîne de caractère'
        ]);
        $prestation->nom = $request->nom;
        $prestation->description = $request->description;
        $prestation->icone = explode('public/', $request->icone->store('public/icones'))[1];
        $prestation->image ="image";
        $prestation->save();

        return redirect()->back()->with('success','Nouvelle prestation enregistrée avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Prestation  $prestation
     * @return \Illuminate\Http\Response
     */
    public function show(Prestation $prestation)
    {
        //
        $selected_prestation = $prestation;
        $prestations =  Prestation::all();
        return view('admin.views.prestation.edit', compact('prestation','prestations'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Prestation  $prestation
     * @return \Illuminate\Http\Response
     */
    public function edit(Prestation $prestation)
    {
        //
        $selected_prestation = $prestation;
        return view('admin.views.prestation.edit', compact('prestation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Prestation  $prestation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prestation $prestation)
    {
        $datas = $request->validate([
            "nom" => ['required', 'string'],
            'description' => ['required', 'string'],
            'icone' => ['sometimes', 'image'],
        ],
        [
            'required' => 'Le champs :attribute est requis.',
            'image' => 'Seules les images sont acceptées',
            'string' => 'Le champs :attribute doit être une chaîne de caractère'
        ]);
        if(isset($datas['icone'])){
            Storage::delete('public/'.$prestation->icone);
            $datas['icone'] = explode('public/', $datas['icone']->store('public/icones'))[1];
        }
        $prestation->update($datas);
        return redirect()->back()->with('success','Modificiation effectuée avec succès !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Prestation  $prestation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prestation $prestation)
    {
        //
        Storage::delete('public/'.$prestation->icone);
        Prestation::destroy($prestation->id);
        return redirect()->back()->with('success','Prestation supprimée avec succès !');
    }
}
