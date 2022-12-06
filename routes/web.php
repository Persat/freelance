 <?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\UserAdmin;
use App\Http\Controllers\MainController;
use App\Http\Controllers\SignupController;

use App\Http\Controllers\HomeController;

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

// Main Page
Route::get('/', [MainController::class, 'index'])->name('main');
Route::get('/signup', [SignupController::class, 'index'])->name('signup');

// Auth Pages
Auth::routes();
Route::middleware([UserAdmin::class])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});
