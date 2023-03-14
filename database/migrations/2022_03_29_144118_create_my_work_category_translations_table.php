<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class  extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('my_work_category_translations', function (Blueprint $table) {
            $table->id();
            $table->string('locale')->index();
            $table->string('title');


              $table->unsignedBigInteger('my_work_category_id');

              $table->foreign('my_work_category_id')->references('id')->on('my_work_categories')->onDelete('cascade');

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
        Schema::dropIfExists('my_work_category_translations');

    }
};
