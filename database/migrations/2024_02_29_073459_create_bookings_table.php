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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('package_id');
            $table->foreign('package_id')->references('id')->on('packages')->onDelete('cascade');
            $table->string('name');
            $table->string('email');
            $table->string('contact');
            $table->text('note')->nullable();
            $table->string('date');
            $table->string('no_of_people');
            $table->enum('need_guide',['yes','no'])->default('yes');
            $table->enum('status',['booked','active','completed', 'cancelled'])->default('booked');
            $table->enum('payment_method',['online','cash'])->default('cash');
            $table->enum('payment_status',['paid','unpaid'])->default('unpaid');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
