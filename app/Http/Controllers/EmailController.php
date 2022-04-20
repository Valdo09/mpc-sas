<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\Contact;
use App\Models\Visitor;
use App\Models\Commande;
use App\Models\Services;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;

use function PHPUnit\Framework\isNull;
use Stevebauman\Location\Facades\Location;

class EmailController extends Controller
{
    //
    public function sendcontactmail(Request $request)
    {
        $validated = $request->validate([
            'nom' => 'min:3|max:15',
            'prenom' => 'min:3|max:25',
            'email' => 'max:100',
            'message' => 'max:255',
        ]);
        $contact=new Contact;
        $contact->nom=$request->nom;
        $contact->prenom=$request->prenom;
        $contact->email=$request->email;
        $contact->sujet=$request->service;
        $contact->message=$request->message;
        $contact->save();

       $title = "Contact";

        $content = "<p>Bonjour, <br> Vous avez reçu un nouveau message . Ci-dessous les informations </p> <p> <b>Nom : </b>".$contact->nom."<br>"."<b>Prénom : </b>".$contact->prenom."<br><b>E-mail: </b>".$contact->email."<br><b>Service : </b>".$contact->service."<br><b>Message : </b><br>".$contact->message."</p>";

      $content = '<strong>'.$contact->nom.' '.$contact->prenom.'</strong> vous a envoyé le message suivant par rapport à sa demande du service de '.$contact->service.' :  '.$contact->message;
        $data = ['content' => $content, 'email' => $contact->email, 'name' => $contact->nom." ".$contact->prenom];

        Mail::to('ocamillegrimaud@gmail.com','MLL RENOVATION')->send(new ContactMail($data));
           
        // $title = "Contact";

    //     $content = "<p>Bonjour, <br> Vous avez reçu un nouveau message . Ci-dessous les informations </p> <p> Nom : ".$contact->nom."<br>"."Prénom : ".$contact->prenom."<br>E-mail: ".$contact->email."<br>Service : ".$contact->service."<br>Message :".$contact->message." <br></p>";

    //     $content = '<strong>'.$contact->nom.' '.$contact->prenom.'</strong> vous a envoyé le message suivant par rapport à sa demande du service de '.$contact->service.' :  '.$contact->message;


    //    Mail::send('mail',['name'=>'$arthak','title'=>'Contact','content'=>$content],function($message){
    //         $message->to('steimetzallagbe951@gmail.com','To MLL RENOVATION')->subject('Nouveau Mail de Contact');
    //         $message->from('steimetzallagbe951@gmail.com','MLL RENOVATION');
    //     });
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
         $visitor->view = "Envoie un message depuis le formulaire de Contact";
         $visitor->save();
         
         return response()->json(['return' => 'Message envoyé avec succès !']);

        // return redirect()->back()->with('success','Message envoyé avec succès !');

    }
}
