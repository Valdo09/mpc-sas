<?php

namespace App\Http\Controllers;

use App\Models\Serv;
use App\Models\Service;
use App\Models\Category;
use App\Models\Commande;
use App\Models\Prestation;
use Illuminate\Http\Request;
use App\Mail\NewCommandeMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::all();
        return view('admin.views.service.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $prestations = Prestation::all();
        $services = Service::all();
        $service = new Service();

        return view('admin.views.service.create', compact('prestations', 'services', 'service'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreServiceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreServiceRequest $request)
    {
        $datas = $request->all();
        $datas['picture'] = explode("public/",$request->picture->store('public/services'))[1];

        Service::create($datas);
        return back()->with('success','Service créé avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        $prestations = Prestation::all();
        return view('admin.views.service.edit', compact('service', 'prestations'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateServiceRequest  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateServiceRequest $request, Service $service)
    {
        $datas = $request->all();

        if($request->picture){
            Storage::delete('public/'.$service->picture);
            $datas['picture'] = explode("public/",$request->picture->store('public/services'))[1];
        }
        $service->update($datas);
        return back()->with('success','Service modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        Storage::delete('public/'.$service->picture);
        $service->delete();
        return back()->with('success','Service supprimé avec succès');
    }

    public function commande(Service $service){
        return view('commande', compact('service'));
    }

    public function storeCommande(Request $request){
        
        $datas = $request->validate([
            'service_id' => 'required|exists:services,id',
            'name' => ['required', 'string'],
            'surname' => ['required', 'string'],
            'email' => ['required', 'email'],
            'telephone' => ['required', 'string'],
            'code_postal' => ['required', 'string'],
            'date' => ['required', 'after_or_equal:date'],
            'adresse' => ['required', 'string'],
            'pictures' => ['nullable', 'array'],
            'pictures.*' => ['image'],
            'agree' => ['required', 'accepted'],
            'mode' => ['required', 'string']
        ], [
            'required' => 'Le champs :attribute est requis.',
            'image' => 'Seules les images sont acceptées',
            'email' => 'Veuillez entrer une adresse mail valide'
        ]);
        if( !empty($request->pictures) ){
            $pictures = [];

            foreach($request->pictures as $picture){
                $pictures[] = explode('public/', $picture->store('public/commandes'))[1];
            }
            $datas['pictures'] = json_encode($pictures);
        }
        $commande = Commande::create($datas);
        Mail::to(env('MAIL_FROM_ADDRESS'))->send(new NewCommandeMail($commande, $pictures ?? []));
        return back()->with('success', 'commande créer avec success');
    }

    public function fill(){
       /*  dd(Serv::all()); */
        /* $categories = Category::all();
        $prestations = Prestation::all();
        foreach($prestations as $prestation){
            $category = $categories->firstWhere('name', $prestation->nom);
            $services = Serv::where('category_id', $category->id)->get();

            foreach($services as $service){
                $prestation->services()->create([
                    'price' => "Entre 150 € et 300 € TTC",
                    'description' => $service->description,
                    'name' => $service->name,
                    'picture' => "services/".$service->image
                ]);
            }
        } */
    }
}
