<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    // migration 파일 생성 : php artisan make:migration create_boards_table
    // migration 실행 : php artisan migrate (실행되는건 up() 메소드)
    // migration 리셋(모든 migration 파일의 down()메소드를 실행) : php artisan migrate:reset
    // migration 롤백(가장 마지막에 실행한 migration의 내용을 롤백) : php artisan migrate:rollback

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('boards', function (Blueprint $table) {
        //     // 글 번호, 카테고리, 제목, 내용, 작성일, 수정일, 삭제일자, 삭제여부
        //     $table->id('bno'); // 글 번호 : big_int, pk, auto_increment
        //     $table->char('category', 1)->index(); // char(1), not null, index추가
        //     $table->string('btitle', 100); // 제목 : varchar(100), not null
        //     $table->string('bcontent', 4000); // 내용 : varchar(4000), not null
        //     $table->timestamps(); // 작성일, 수정일 : created_at, updated_at를 생성, null
        //     $table->timestamp('deleted_at')->nullable(); // 삭제일자 : timestamp,
        //     // flg를 char타입으로 하는 이유 : char타입이 속도가 가장 빠르고, int타입이 가장 느림
        //     $table->char('deleted_flg', 1)->default('0'); // 삭제여부 : char(1), default '0', not null
        // });

        Schema::table('boards', function (Blueprint $table) {
            $table->id('bno')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('boards');
    }
};
