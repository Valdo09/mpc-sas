<?php

use App\Models\Realisation;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\AvisController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ApplyController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\VisitorController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\PrestationController;
use App\Http\Controllers\RealisationController;
use App\Http\Controllers\SatisfactionController;
use App\Http\Controllers\RealisationDetailController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/register', function () {
    return redirect(route('login'));
});
Route::get('/', [VisitorController::class,'welcome'])->name('welcome');
Route::get('/prestation/{prestation}', [VisitorController::class, 'show'])->name('prestation.show');
Route::get('/commande/{service}', [ServiceController::class, 'commande'])->name('commande.service');
Route::post('/commande', [ServiceController::class, 'storeCommande'])->name('commande.store');

Route::post('/envoyer-un-message', [EmailController::class, 'sendcontactmail'])->name('sendcontactmail');

Route::get('/deconnexion',[Controller::class, 'deconnexion'])->name('deconnexion');

Route::get('/politique', function(){
    return view('politique');
})->name('politique');

Route::get('/create-form-{id}', function(){
    return view('satisfactionformentete');
})->name('satisfactionformentete');
Route::get('/f{uid}', [SatisfactionController::class, 'checkurl'])->name('satisfactionform');
Route::post('/envoyer-formulaire-de-satisfaction', [SatisfactionController::class, 'storesatisfaction'])->name('storesatisfaction');


Route::post('/myAjaxCallURI', [MyController::class, 'method'] );
Route::post('/myNewAjaxCallURI', [VisitorController::class, 'save_visit'] );


Route::prefix('dashboard')->middleware(['auth:sanctum', 'verified'])->group(function () {

    Route::get('/', [AdminController::class, 'index'])->name('admin.index');

    //Routes for list of visitors
    Route::get('/visitors', [AdminController::class, 'visitors'])->name('admin.visitors');
    Route::get('/visitors/index', [AdminController::class, 'visitors'])->name('admin.visitors.index');

    //Route for prestations
    Route::resource('prestations', PrestationController::class);

    Route::get('/news', [NewsletterController::class, 'news'])->name('news.index');
    Route::post('/sendnewsmail', [NewsletterController::class, 'sendmails'])->name('admin.news.send');
    Route::get('/news/delete-{id}', [NewsletterController::class, 'deletenews'])->name('admin.news.destroy');

    Route::get('/enquete-satisfaction', [SatisfactionController::class, 'create'])->name('admin.satisform.create');
    Route::get('/enquete-satisfaction-liste', [SatisfactionController::class, 'index'])->name('admin.satisform.index');
    Route::post('/enquete-satisfaction-send', [SatisfactionController::class, 'send'])->name('admin.satisform.send');
    Route::get('/enquete-satisfaction-delete-{id}', [SatisfactionController::class, 'delete'])->name('admin.avisclient.delete');

    Route::get('/avis-liste', [AvisController::class, 'avis_list'])->name('avis.index');
    Route::get('/avis-{id}-publier', [AvisController::class, 'publier'])->name('avis.publish');
    Route::get('/avis-{id}-retirer', [AvisController::class, 'retirer'])->name('avis.unpublish');
    Route::get('/avis', [AvisController::class, 'create'])->name('avis.create');
    Route::get('/avis-edit-{id}', [AvisController::class, 'edit'])->name('avis.edit');
    Route::post('/avis-store', [AvisController::class, 'store'])->name('avis.store');
    Route::post('/avis-update-{id}', [AvisController::class, 'update'])->name('avis.update');
    Route::get('/avis-delete-{id}', [AvisController::class, 'destroy'])->name('avis.destroy');

    Route::resource('realisations', RealisationController::class);
    Route::resource('services', ServiceController::class);
    Route::get('/fill-services', [ServiceController::class, 'fill']);
    Route::resource('newsletters', NewsletterController::class)->except([
        'create','edit','update'
    ]);

    }
);

Route::get('/migrate/35O46', [ApplyController::class, 'migrate']);
Route::get('/rollback/142220/{step}', [ApplyController::class, 'rollback']);

//Clear cache online
Route::get('/optmize/35O46', [ApplyController::class, 'optimize']);
Route::get('/show/migrations', [ApplyController::class, 'showMigration']);
Route::get('/storage-link/35O46', [ApplyController::class, 'storageLink']);
Route::get('/realisations/{category:id}',[RealisationController::class,'detail'])->name('realisation');

