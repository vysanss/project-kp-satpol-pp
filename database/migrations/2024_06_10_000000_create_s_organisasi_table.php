<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSOrganisasiTable extends Migration
{
    public function up()
    {
        Schema::create('s_organisasi', function (Blueprint $table) {
            $table->id();
            $table->string('foto')->nullable();
            $table->text('deskripsi')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('s_organisasi');
    }
}
