{"filter":false,"title":"web.php","tooltip":"/cms/routes/web.php","ace":{"folds":[],"scrolltop":592.137939453125,"scrollleft":0,"selection":{"start":{"row":63,"column":28},"end":{"row":63,"column":28},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":61,"state":"php-start","mode":"ace/mode/php"}},"hash":"19aa06cf340de41175edd2d9f71feb5c88bedd21","mime":"application/octet-stream","undoManager":{"mark":13,"position":13,"stack":[[{"start":{"row":4,"column":0},"end":{"row":5,"column":25},"action":"insert","lines":["use App\\Http\\Controllers\\BookController; //追加","use App\\Models\\Book; //追加"],"id":2}],[{"start":{"row":4,"column":45},"end":{"row":4,"column":46},"action":"insert","lines":["k"],"id":3},{"start":{"row":4,"column":46},"end":{"row":4,"column":47},"action":"insert","lines":["o"]}],[{"start":{"row":4,"column":46},"end":{"row":4,"column":47},"action":"remove","lines":["o"],"id":4}],[{"start":{"row":17,"column":0},"end":{"row":24,"column":0},"action":"remove","lines":["Route::get('/', function () {","    return view('welcome');","});","","Route::get('/dashboard', function () {","    return view('dashboard');","})->middleware(['auth', 'verified'])->name('dashboard');",""],"id":5}],[{"start":{"row":17,"column":0},"end":{"row":18,"column":0},"action":"insert","lines":["",""],"id":6},{"start":{"row":18,"column":0},"end":{"row":19,"column":0},"action":"insert","lines":["",""]},{"start":{"row":19,"column":0},"end":{"row":20,"column":0},"action":"insert","lines":["",""]},{"start":{"row":20,"column":0},"end":{"row":21,"column":0},"action":"insert","lines":["",""]},{"start":{"row":21,"column":0},"end":{"row":22,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":16,"column":0},"end":{"row":31,"column":83},"action":"insert","lines":["//本：ダッシュボード表示(books.blade.php)","Route::get('/', [BookController::class,'index'])->middleware(['auth'])->name('book_index');","Route::get('/dashboard', [BookController::class,'index'])->middleware(['auth'])->name('dashboard');","","//本：追加 ","Route::post('/books',[BookController::class,\"store\"])->name('book_store');","","//本：削除 ","Route::delete('/book/{book}', [BookController::class,\"destroy\"])->name('book_destroy');","","//本：更新画面","Route::post('/booksedit/{book}',[BookController::class,\"edit\"])->name('book_edit'); //通常","Route::get('/booksedit/{book}', [BookController::class,\"edit\"])->name('edit');      //Validationエラーありの場合","","//本：更新画面","Route::post('/books/update',[BookController::class,\"update\"])->name('book_update');"],"id":7}],[{"start":{"row":34,"column":0},"end":{"row":35,"column":0},"action":"remove","lines":["",""],"id":8},{"start":{"row":33,"column":0},"end":{"row":34,"column":0},"action":"remove","lines":["",""]},{"start":{"row":32,"column":0},"end":{"row":33,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":33,"column":0},"end":{"row":34,"column":0},"action":"remove","lines":["",""],"id":9},{"start":{"row":32,"column":0},"end":{"row":33,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":5,"column":25},"end":{"row":6,"column":0},"action":"insert","lines":["",""],"id":10}],[{"start":{"row":6,"column":0},"end":{"row":6,"column":45},"action":"insert","lines":["use App\\Http\\Controllers\\TeamController; //追加"],"id":11}],[{"start":{"row":6,"column":45},"end":{"row":7,"column":0},"action":"insert","lines":["",""],"id":13},{"start":{"row":7,"column":0},"end":{"row":8,"column":0},"action":"insert","lines":["",""]},{"start":{"row":8,"column":0},"end":{"row":9,"column":0},"action":"insert","lines":["",""]},{"start":{"row":9,"column":0},"end":{"row":10,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":8,"column":0},"end":{"row":9,"column":0},"action":"insert","lines":["",""],"id":15},{"start":{"row":9,"column":0},"end":{"row":10,"column":0},"action":"insert","lines":["",""]},{"start":{"row":10,"column":0},"end":{"row":11,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":9,"column":0},"end":{"row":22,"column":82},"action":"insert","lines":["//チーム：ダッシュボード","Route::get('/teams', [TeamController::class, 'index'])->name('team_index');","","//チーム：追加","Route::post('teams', [TeamController::class, 'store'])->name('team_store');","","//チーム：更新画面","Route::get('/teamssedit/{team}',[TeamController::class,\"edit\"])->name('team_edit'); ","","//チーム更新処理","Route::post('teams/update',  [TeamController::class, 'update'])->name('team_update');","","//チーム：参加","Route::get('/team/{team_id}', [TeamController::class, 'join'])->name('team_join');"],"id":17}],[{"start":{"row":0,"column":0},"end":{"row":61,"column":0},"action":"remove","lines":["<?php","","use App\\Http\\Controllers\\ProfileController;","use Illuminate\\Support\\Facades\\Route;","use App\\Http\\Controllers\\BookController; //追加k","use App\\Models\\Book; //追加","use App\\Http\\Controllers\\TeamController; //追加","","","//チーム：ダッシュボード","Route::get('/teams', [TeamController::class, 'index'])->name('team_index');","","//チーム：追加","Route::post('teams', [TeamController::class, 'store'])->name('team_store');","","//チーム：更新画面","Route::get('/teamssedit/{team}',[TeamController::class,\"edit\"])->name('team_edit'); ","","//チーム更新処理","Route::post('teams/update',  [TeamController::class, 'update'])->name('team_update');","","//チーム：参加","Route::get('/team/{team_id}', [TeamController::class, 'join'])->name('team_join');","","","","","/*","|--------------------------------------------------------------------------","| Web Routes","|--------------------------------------------------------------------------","|","| Here is where you can register web routes for your application. These","| routes are loaded by the RouteServiceProvider within a group which","| contains the \"web\" middleware group. Now create something great!","|","*/","//本：ダッシュボード表示(books.blade.php)","Route::get('/', [BookController::class,'index'])->middleware(['auth'])->name('book_index');","Route::get('/dashboard', [BookController::class,'index'])->middleware(['auth'])->name('dashboard');","","//本：追加 ","Route::post('/books',[BookController::class,\"store\"])->name('book_store');","","//本：削除 ","Route::delete('/book/{book}', [BookController::class,\"destroy\"])->name('book_destroy');","","//本：更新画面","Route::post('/booksedit/{book}',[BookController::class,\"edit\"])->name('book_edit'); //通常","Route::get('/booksedit/{book}', [BookController::class,\"edit\"])->name('edit');      //Validationエラーありの場合","","//本：更新画面","Route::post('/books/update',[BookController::class,\"update\"])->name('book_update');","","Route::middleware('auth')->group(function () {","    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');","    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');","    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');","});","","require __DIR__.'/auth.php';",""],"id":18},{"start":{"row":0,"column":0},"end":{"row":63,"column":28},"action":"insert","lines":["<?php","","use App\\Http\\Controllers\\ProfileController;","use Illuminate\\Support\\Facades\\Route;","use App\\Http\\Controllers\\BookController; //追加","//上部でこれをuseしておく","use App\\Http\\Controllers\\TeamController; //追加","use App\\Models\\Book; //追加","","","/*","|--------------------------------------------------------------------------","| Web Routes","|--------------------------------------------------------------------------","|","| Here is where you can register web routes for your application. These","| routes are loaded by the RouteServiceProvider within a group which","| contains the \"web\" middleware group. Now create something great!","|","*/","","//本：ダッシュボード表示(books.blade.php)","Route::get('/', [BookController::class,'index'])->middleware(['auth'])->name('book_index');","Route::get('/dashboard', [BookController::class,'index'])->middleware(['auth'])->name('dashboard');","","//本：追加 ","Route::post('/books',[BookController::class,\"store\"])->name('book_store');","","//本：削除 ","Route::delete('/book/{book}', [BookController::class,\"destroy\"])->name('book_destroy');","","//本：更新画面","Route::post('/booksedit/{book}',[BookController::class,\"edit\"])->name('book_edit'); //通常","Route::get('/booksedit/{book}', [BookController::class,\"edit\"])->name('edit');      //Validationエラーありの場合","","//本：更新画面","Route::post('/books/update',[BookController::class,\"update\"])->name('book_update');","","","","","//チーム：ダッシュボード","Route::get('/teams', [TeamController::class, 'index'])->name('team_index');","","//チーム：追加","Route::post('teams', [TeamController::class, 'store'])->name('team_store');","","//チーム：更新画面","Route::get('/teamssedit/{team}',[TeamController::class,\"edit\"])->name('team_edit'); ","","//チーム更新処理","Route::post('teams/update',  [TeamController::class, 'update'])->name('team_update');","","//チーム：参加","Route::get('/team/{team_id}', [TeamController::class, 'join'])->name('team_join');","","","Route::middleware('auth')->group(function () {","    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');","    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');","    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');","});","","require __DIR__.'/auth.php';"]}]]},"timestamp":1676158594926}