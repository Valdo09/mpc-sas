<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Artisan;

class ApplyController extends Controller
{
    public function migrate(){
        dd(Artisan::call('migrate'));
    }

    public function showMigration(){
        dd(DB::select('select * from migrations'));
    }

    public function rollback($step){
        dump(Artisan::call('migrate:rollback', [
            '--step' => $step
        ]));
    }

    public function optimize(){
        dump(Artisan::call('cache:clear'));
        dump(Artisan::call('optimize'));

        return "Cache is cleared";
    }

    public function storageLink(){
        dump(Artisan::call('storage:link'));
    }
}
