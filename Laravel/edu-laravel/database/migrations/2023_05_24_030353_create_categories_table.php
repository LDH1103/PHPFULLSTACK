<?php
// 1. 모델명 : Category
// 2. 팩토리, 마이그레이션, 시더까지 다 만들기
// 3. categorys 테이블의 컬럼은 아래와 같음
//      id          : pk, auto_increment
//      no          : unique, char(1)
//      name        : unique, varchar(30)
//      active_flg  : default('1'), char(1)
//CREATE TABLE categories(
// 	id BIGINT(20) PRIMARY KEY AUTO_INCREMENT
// 	,NO UNIQUE CHAR(1) NOT NULL
// 	,NAME UNIQUE VARCHAR(30) NOT NULL
// 	,active_flg DEFAULT('1') CHAR(1) NOT NULL
// );


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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->char('no', 1)->unique();
            $table->string('name', 30)->unique();
            $table->char('active_flg', 1)->default('1'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
};
