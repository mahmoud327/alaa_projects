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
        Schema::create('customer_review_translations', function (Blueprint $table) {
            $table->id();
            $table->string('locale')->index();
            $table->text('desc');
            $table->unsignedBigInteger('customer_review_id');
            $table->foreign('customer_review_id')->references('id')->on('customer_reviews')->onDelete('cascade');

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
        Schema::dropIfExists('customer_review_translations');

    }
};
