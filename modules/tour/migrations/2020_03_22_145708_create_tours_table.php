<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateToursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // dia diem 
        Schema::create('lcoations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->unsignedTinyInteger('status')->default(1);
            $table->timestamps();
        });
        // tour du lic
        Schema::create('tours', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('tour_code'); // ma tour
            $table->timestamp('date_go')->nullable(); // ngay di
            $table->string('price'); // gia
            $table->string('leave_from'); // noi di 
            $table->integer('total_number'); // tong so cho 
            $table->string('timeout'); // gio di 
            $table->string('total_date'); // tong so ngay
            $table->string('contact_us'); // tong so ngay
            $table->unsignedInteger('locaion_id');
            $table->unsignedTinyInteger('status')->default(1);
            $table->timestamps();
        });
        // tour program
        Schema::create('tour_programs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->unsignedInteger('tour_id'); // tour nao? 
            $table->unsignedTinyInteger('status')->default(1);
            $table->timestamps();
        });

        // tour content program
        Schema::create('tour_content_programs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('content');
            $table->timestamp('day')->nullable(); // ngay cu the/ 
            $table->unsignedInteger('tour_program_id'); // tour nao? 
            $table->unsignedTinyInteger('status')->default(1);
            $table->timestamps();
        });
        // note tour
        Schema::create('tour_notes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('content');
            $table->unsignedInteger('tour_id'); // tour nao? 
            $table->timestamps();
        });
        // ý kien
        Schema::create('tour_opinions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fullname'); // ho ten
            $table->string('email'); //  email
            $table->string('opinion'); // y kien
            $table->unsignedInteger('tour_id'); // tour nao? 
            $table->timestamps();
        });
        // booking tour
        Schema::create('tour_booking', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fullname_primary'); // ho ten
            $table->string('email'); //  email
            $table->string('phone'); // dien thoai
            $table->string('note'); // y kien
            $table->string('address'); // dia chi
            $table->integer('customer_number'); // so luong khach hang
            $table->unsignedInteger('tour_id'); // tour nao? 
            $table->timestamps();
        });
        Schema::create('tour_customer_booking', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fullname'); // ho ten
            $table->string('gender'); // gioi tinh
            $table->timestamp('birthday')->nullable(); // ngay sinh
            $table->string('email'); //  email
            $table->string('phone'); // dien thoai
            $table->string('note'); // y kien
            $table->string('address'); // dia chi
            $table->integer('customer_number'); // so luong khach hang
            $table->unsignedInteger('tour_id'); // tour nao? 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lcoations');
        Schema::dropIfExists('tours');
        Schema::dropIfExists('tour_programs');
        Schema::dropIfExists('tour_content_programs');
        Schema::dropIfExists('tour_notes');
        Schema::dropIfExists('tour_opinions');
        Schema::dropIfExists('tour_booking');
        Schema::dropIfExists('tour_customer_booking');
    }
}