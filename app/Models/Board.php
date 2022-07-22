<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    use HasFactory;
    // protected table = '바꾸고 싶은 테이블명';
    // $primarykey = 'i_board'; // 바꾸고 싶은 pk
    protected $fillable = [ 'title', 'ctnt', 'hits'];
    protected $guarded = ['created_at'];
    // 한번 입력한 후 수정이 안되었으면 좋겠는 애가 있다면 작성. $guarded = ['테이블명'], 그러나 Db에서 직접 수정하면 수정됨.
}
