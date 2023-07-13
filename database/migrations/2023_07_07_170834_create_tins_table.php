<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tins', function (Blueprint $table) {
            $table->increments('id',);
            $table->unsignedInteger('id_TL')->unsigned()->default(0);
            // $table->foreign('id_TL')->references('id')->on('categories');
            $table->char('lang',2)->default('vi');
            $table->string('title',255);
            $table->string('content',1000)->nullable();
            $table->string('images',255)->nullable();
            $table->text('long_description')->nullable();
            $table->integer('views')->nullable()->default(0);
            $table->tinyInteger('first_rate')->nullable()->default(0);
            $table->tinyInteger('hide_show')->nullable()->default(1);
            $table->string('tags')->nullable();
            $table->date('date_time')->nullable()->useCurrent();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tins');
    }
};
