
 <?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;


Route::get('/', [MovieController::class, 'allmovies'])->name('movies.all');

Route::get('/movie/{id}', [MovieController::class, 'specificmovie'])->name('movies.specific');
Route::get('/movieadd', [MovieController::class, 'movieaddform'])->name('movies.addform');
Route::get('/movieupdate/{id}', [MovieController::class, 'movieupdateform'])->name('movies.updateform');

Route::post('/movie/add', [MovieController::class, 'movieadd'])->name('movies.add');
Route::post('/movie/update/{id}', [MovieController::class, 'movieupdate'])->name('movies.update');
