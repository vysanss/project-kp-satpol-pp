<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('banners', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('sub_judul');
            $table->text('deskripsi');
            $table->string('logo')->nullable();
            $table->string('logo_alt')->nullable();
            $table->boolean('show_logo')->default(true);
            $table->boolean('show_navigation')->default(true);
            $table->boolean('show_stats')->default(true);
            $table->json('navigation_items')->nullable();
            $table->json('stats')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('banners');
    }
};
