<?php

use App\Http\Controllers\ComicController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/comics/{comic}', [HomeController::class, 'show'])->name('comics.show');

// Route::get('/comics', function () {
//     $products = config('comics.comics');
//     return view('comics.index', compact('products'));
// })->name("comics.index");

// Route::get('/comics/{id}', function ($id) {
//     $products = config('comics.comics');
//     if ($id >= 0 && $id < count($products)) {
//         $product = $products[$id];
//         $artby = [
//             'jose luis garcia lopez',
//             'clay mann',
//             'rafael albuquerque',
//             'patrick gleason',
//             'dan jurgens',
//             'joe shuster',
//             'nral adams',
//             'curts swan',
//             'john cassady',
//             'oliver coipel',
//             'jim lee'
//         ];
//         $writtenby = [
//             'brad metzler',
//             'tom king',
//             'scott snyder',
//             'geoff johns',
//             'bryan michael bendis',
//             'paul dini',
//             'louise simson',
//             'richard donner',
//             'marv wolfman',
//             'peter j. tomasi',
//             'dan jurgens',
//             'jerry siegel',
//             'paul levitz'
//         ];
//         $jumbo_links = [
//             'dc comics' => [
//                 'characters',
//                 'comics',
//                 'movies',
//                 'TV',
//                 'games',
//                 'videos',
//                 'news',
//             ],
//             'dc' => [
//                 'terms of use',
//                 'privacy policy (new)',
//                 'ad choises',
//                 'advertising',
//                 'jobs',
//                 'subscriptions',
//                 'talent workshops',
//                 'CPSC certificates',
//                 'ratings',
//                 'shop help',
//                 'contact us',
//             ],
//             'sites' => [
//                 'DC',
//                 'MAD magazine',
//                 'DC kids',
//                 'DC universe',
//                 'DC power visa'

//             ],
//             'shop' => [
//                 'shop DC',
//                 'shop DC collectibles',
//             ],
//         ];
//         return view('comics.show', compact('product', 'artby', 'writtenby', 'jumbo_links'));
//     } else {
//         abort(404);
//     }
// })->name("comics.show");

Route::resource('comics', ComicController::class);


