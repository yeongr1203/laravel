<?php
use App\Http\Controllers\BoardController;
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


Route::get('/', function () {
    return view('welcome');
});
/*  라우트그룹 사용 전.
    Route::get('/boards',[BoardController::class, 'index']);
    // BoardController 는  BoardController.php의 class명!
    // 경로 들어가면 index 글자가 출력됨.
    Route::get('/boards/create',[BoardController::class,'create'])
            ->name('boards.create');
    // 등록하면 실행되는 것.
    Route::get('/boards/show',[BoardController::class,'show'])
            -> name('boards.show');
*/

// 1차 주소값, 라우트그룹 사용한 것.
Route::prefix('boards')->group(function(){
    Route::get('/', [BoardController::class, 'index']);

    Route::get('create',[BoardController::class,'create']) -> name('boards.create');
    // boards.create 는 

    Route::post('store',[BoardController::class,'store'])
        -> name('boards.store');

    Route::get('show',[BoardController::class,'show'])
        -> name('boards.show');
        
    //수정        
    Route::get('edit',[BoardController::class,'edit'])
        -> name('boards.edit');
    
    // ??
    Route::post('update',[BoardController::class,'update'])
        -> name('boards.update');
    
    // destroy = 삭제
    Route::get('destroy', [BoardController::class, 'destroy']);
});

