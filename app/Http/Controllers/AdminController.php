<?php

namespace App\Http\Controllers;

use App\Models\Prestation;
use App\Models\Services;
use App\Models\Visitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    //Functions for Category Administration

    public function index(){
        $all_visitors=Visitor::all();
        $total_visitors = DB::table('visitors')
                            ->select('ip','location', DB::raw('count(*) as total'))
                            ->groupBy('ip','location')
                            ->get();
        $visitors_by_ip = DB::table('visitors')
                                    ->select('ip','location','visit_date', DB::raw('count(*) as total'))
                                    ->groupBy('ip','location','visit_date')
                                    ->get();
        return view('admin.views.visitors.index', compact('all_visitors','visitors_by_ip','total_visitors'));
    }

    public function visitors(){
        $all_visitors=Visitor::all();
        $total_visitors = DB::table('visitors')
                            ->select('ip','location', DB::raw('count(*) as total'))
                            ->groupBy('ip','location')
                            ->get();
        $visitors_by_ip = DB::table('visitors')
                                    ->select('ip','location','visit_date', DB::raw('count(*) as total'))
                                    ->groupBy('ip','location','visit_date')
                                    ->get();
        return view('admin.views.visitors.index', compact('all_visitors','visitors_by_ip','total_visitors'));
    }
    function deconnexion(){
        auth()->logout();
        return redirect('/dashboard');
    }

}
