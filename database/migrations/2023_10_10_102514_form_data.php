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
        Schema::create('user_table', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('name_eng');
        $table->string('fathers_name');
        $table->string('fathers_name_eng');
        $table->string('mothers_name');
        $table->string('mothers_name_eng');
        $table->string('spouse_name');
        $table->string('spouse_name_eng');
        $table->date('dob');
        $table->string('religion');
        $table->string('gender');
        $table->string('nid');
        $table->string('occupation');
        $table->string('nationality');
        $table->string('tin');
        $table->string('brn');
        $table->string('present_address');
        $table->string('division');
        $table->string('district');
        $table->string('upazila');
        $table->string('permanent_address');
        $table->timestamps();
    });
        //
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('your_table_name');
    }
};
