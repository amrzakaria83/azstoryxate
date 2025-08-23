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
        Schema::create('video_views', function (Blueprint $table) {
            $table->id();
            $table->string('header')->nullable();
            $table->tinyInteger('description_video')->nullable();
            $table->text('duration_video')->nullable();
            $table->text('link')->nullable();
            $table->tinyInteger('type')->default(0)->comment('0 = youtube - 1 = tiktok - 2 = instagram - 3 = facebook - 4 = twitter - 5 = other');
            $table->tinyInteger('status')->default(0)->comment('0 = active - 1 = notactive');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('video_views');
    }
};
