<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use App\Models\News;
use Exception;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $newsletters = Newsletter::all();
        return view('admin.views.newsletter.index', compact('newsletters'));
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
        $newsletter = new Newsletter;
        $newsletter->email = $request->email;
        $newsletter->save();
        return redirect()->back()->with('success','Abonnement à la Newsletter effectué avec succès !');
    }
    public function show(Request $request)
    {
         //
        $newsletters = Newsletter::all();
        return view('admin.views.newsletter.index', compact('newsletters'));
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Newsletter  $newsletter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Newsletter $newsletter)
    {
        //
        Newsletter::destroy($newsletter->id);
        return redirect()->back()->with('success', 'Mail supprimé avec succès !');
    }

    public function news(){
        $selected_news = News::all();
        return view('admin.views.news.index', compact('selected_news'));
    }
    public function sendmails(Request $request){
        $newsletters = Newsletter::all();
        $news = new News;
        $news->sujet = $request->sujet;
        $news->contenu = $request->contenu;
        $news->date = date("d-m-Y");

        $filename=" ";
        if($request->hasFile('picture')){
            $image = $request->file('picture');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $image->move('public/assets/news/',$filename);
        }
        $news->image = $filename;
        $news->save();



        $title = "Newsletter";

        $contenu = $news->contenu;

        $error = "";
        foreach($newsletters as $newsletter){
            $email = $newsletter->email;
            try {
                Mail::send('newsletter',['name'=>'$arthak','title'=>$news->sujet,'image'=> $news->image,'contenu'=>$contenu, 'email'=>$email],function($message) use ($email){
                    $message->to(''.$email.'')->subject('News MLL RENOVATION');
                    $message->from('contact@mllrenovation.fr','From MLL RENOVATION');
                });
              } catch (Exception $e) {
                      $error = $e;
              }

        }


        $selected_news = News::all();
        return redirect()->back()->with('success', 'Email envoyé avec succès !');
    }
    public function deletenews($id){
        $news = News::where('id',$id)->first();
        // $image_path = 'public/assets/news/'.$news->image;
        News::destroy($news->id);
        // unlink($image_path);
        // $selected_news = News::all();
        return redirect()->back()->with('success', 'New supprimé avec succès !');
        // return view('admin.views.news.index', compact('selected_news'));
    }
}
