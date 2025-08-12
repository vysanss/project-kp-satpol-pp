<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('profilpimpinan', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('gelar_depan')->nullable();
            $table->string('gelar_belakang')->nullable();
            $table->string('jabatan');
            $table->text('pesan');
            $table->string('foto')->nullable();
            $table->boolean('is_active')->default(true);
            $table->integer('urutan')->default(1);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('profilpimpinan');
    }
};
