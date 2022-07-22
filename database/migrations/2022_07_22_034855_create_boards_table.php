<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boards', function (Blueprint $table) {
            // 여기는 내가 필요한 정보를 작성하는 곳!
            // 타입 어떤거 사용가능한지 => 책 160p
            $table->id();
            $table->string('title', 30);// (varchar, 길이숫자)
            $table->string('ctnt');
            $table->integer('hits');

            $table->timestamps();
            // timestamps => created_at / updated_at을 만들어 주는 것으로, 필요없을땐, 삭제여기서 주석이든, 삭제든 하면 됨.
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()  // 테이블 지울때.
    {
        Schema::dropIfExists('boards');
    }
};
