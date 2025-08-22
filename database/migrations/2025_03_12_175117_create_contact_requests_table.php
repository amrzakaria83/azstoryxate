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
        Schema::create('contact_requests', function (Blueprint $table) {
           $table->id();
            $table->string('name_ar')->nullable();
            $table->string('name_en')->nullable();
            $table->string('email')->nullable();
            $table->text('phone')->nullable();
            $table->text('message')->nullable();
            $table->tinyInteger('course')->nullable()->comment('');
            $table->dateTime('from_time', precision: 0)->nullable();
            $table->tinyInteger('time')->nullable()->comment('no of hours');
            $table->text('age')->nullable();
            $table->text('marital_status')->nullable();

            // $table->date('daterequest');
            $table->tinyInteger('action')->default(0)->comment('0 = active - 1 = prepayed - 2 = done - 3 = cancelled- 4 = requested - 5 = Unavillable');
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
        Schema::dropIfExists('contact_requests');
    }
};
