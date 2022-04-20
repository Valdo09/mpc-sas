<?php

namespace App\Http\Controllers;

use App\Models\Realisation;
use App\Models\Satisfaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SatisfactionController extends Controller
{
    //
    function create(){
        return view('admin.views.satisfaction.create');
    }
    function generateRandomString($length = 25) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
    //usage
    function send(Request $request){
        $satisfaction=new Satisfaction;
        $satisfaction->nom=$request->nom;
        $satisfaction->prenom=$request->prenom;
        $satisfaction->email=$request->email;
        $satisfaction->service=$request->service;
        $satisfaction->publie="Non";

        $satisfaction->save();

        $email = $satisfaction->email;

        $title = "Enquête de Satisfaction Client";

        $random_url_uid = $this->generateRandomString(16);

        $link = "https://mllrenovation.fr/f".$random_url_uid;

        Satisfaction::where('id',$satisfaction->id)->update(['link'=> $link,'statut'=> "sent"]);

        $content = "<p>Bonjour, <br> Suite au service réalisé chez MLL Rénovation, nous aimerions avoir votre avis sur la qualité du travail. Veuillez donc suivre le lien ci-dessous pour répondre au formulaire de notre enquête de satisfaction client.<br>".$link."<br>Nous vous remercions par avance pour les réponses que vous nous apporterez. <br>Cordialement, toute l'équipe de MLL Rénovation. </p>";

        Mail::send('mail',['name'=>'$arthak','title'=>'Enquête de Satisfaction Client','content'=>$content],function($message) use($email){
            $message->to($email)->subject('Formulaire de satisfaction');
            $message->from('contact@mllrenovation.fr','De MLL RENOVATION');
        });
        return redirect()->back()->with('success','Formulaire envoyé avec succès !');

    }
    function storesatisfaction(Request $request){
        Satisfaction::where('link',$request->link)->update(['disponibilite'=> $request->disponibilite,'delais'=> $request->delais, 'prix'=> $request->prix, 'qualite' => $request->qualite, 'proprete' => $request->proprete, 'protection' => $request->protection, 'conseils' => $request->conseils, 'recommandation' => $request->recommandation, 'note' => $request->note, 'avis' => $request->avis, 'statut'=> "done",'publie'=>"Non"]);

        $satisfaction= Satisfaction::where('link',$request->link)->first();

        $title = "Satisfaction";

        $content = "<p>Bonjour, <br> Vous avez reçu un nouveau message suite à une soumission de formulaire de satisfaction client. Ci-dessous les informations </p> <p> Nom : ".$satisfaction->nom."<br>"."Prénom : ".$satisfaction->prenom."<br>E-mail: ".$satisfaction->email."<br>Service : ".$satisfaction->service."<br>  Disponibilité : ".$satisfaction->disponibilite."<br>"."Respect des délais : ".$satisfaction->delais."<br>Respect du prix prévu: ".$satisfaction->prix."<br>Qualité : ".$satisfaction->qualite."<br>Propreté en fin de chantier : ".$satisfaction->proprete."<br>Protection des ouvrages, sécurité : ".$satisfaction->protection."<br>Conseils : ".$satisfaction->conseils."<br>Recommandation: <strong>".$satisfaction->recommandation."</strong><br>Note : <strong>".$satisfaction->note."</strong><br>Avis/Remarques :".$satisfaction->avis." <br></p>";

        Mail::send('mail',['name'=>'$arthak','title'=>'Retour du formulaire de Satisfaction','content'=>$content],function($message){
            $message->to('contact@mllrenovation.fr','To MLL RENOVATION')->subject('Nouveau Mail de Satisfaction Client');
            $message->from('contact@mllrenovation.fr','MLL RENOVATION');
        });

        $content_mail_client = "<p>Bonjour, <br> Vous avez reçu un nouveau message suite à la soumission du formulaire de satisfaction client de MLL Rénovation. Ci-dessous la synthèse de vos réponses</p> <p> Service : ".$satisfaction->service."<br>  Disponibilité : ".$satisfaction->disponibilite."<br>"."Respect des délais : ".$satisfaction->delais."<br>Respect du prix prévu: ".$satisfaction->prix."<br>Qualité : ".$satisfaction->qualite."<br>Propreté en fin de chantier : ".$satisfaction->proprete."<br>Protection des ouvrages, sécurité : ".$satisfaction->protection."<br>Conseils : ".$satisfaction->conseils."<br>Recommandation: <strong>".$satisfaction->recommandation."</strong><br>Note : <strong>".$satisfaction->note."</strong><br>Avis/Remarques :".$satisfaction->avis." <br></p>";

        $email = $satisfaction->email;

        Mail::send('mail',['name'=>'$arthak','title'=>'Synthèse de vos réponses','content'=>$content_mail_client],function($message) use($email) {
            $message->to($email)->subject('Formulaire de Satisfaction Client');
            $message->from('contact@mllrenovation.fr','MLL RENOVATION');
        });
        return redirect()->back()->with('success','Avis envoyé avec succès !');
    }

    function checkurl(Request $request){
        $currentURL = $request->url();
        $exists = Satisfaction::where('link', $currentURL)->count();
        if($exists==0){
            $realisations = Realisation::all();
            $all_avis = Satisfaction::where('publie',"Oui")->get();
            $nb_avis = sizeof($all_avis);

            return view('index',compact('realisations','all_avis','nb_avis'));
        }
        else{
            $satisfaction = Satisfaction::where('link',$currentURL)->first();
            if($satisfaction->statut=="done"){
                return view('satisfactionform', compact('satisfaction'));
            }
            else{
                return view('satisfactionform', compact('satisfaction'));
            }
        }
    }

    function index(){
        $satisfactions = Satisfaction::all();
        return view('admin.views.satisfaction.index', compact('satisfactions'));
    }

    function delete($id){
        $satisfaction = Satisfaction::where('id', $id)->first();
        Satisfaction::destroy($satisfaction->id);
        $satisfactions = Satisfaction::all();
        return view('admin.views.satisfaction.index', compact('satisfactions'));
    }

}
