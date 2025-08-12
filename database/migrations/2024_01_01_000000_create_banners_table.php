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
            $table->string('judul')->default('Satuan Polisi Pamong Praja');
            $table->string('sub_judul')->default('Menjaga Ketertiban dan Keamanan Masyarakat');
            $table->string('deskripsi', 1000)->default('Satuan Polisi Pamong Praja bertugas membantu Kepala Daerah dalam menegakkan Peraturan Daerah dan penyelenggaraan ketertiban umum serta ketenteraman masyarakat.');
            $table->string('logo')->default('img/logo-Pol-PP-png.webp');
            $table->string('logo_alt')->default('Logo Satpol PP');
            $table->tinyInteger('show_logo')->default(1)->comment('1=true, 0=false');
            $table->tinyInteger('show_navigation')->default(1)->comment('1=true, 0=false');
            $table->tinyInteger('show_stats')->default(1)->comment('1=true, 0=false');
            $table->string('tahun_melayani')->default('20+');
            $table->string('personil_aktif')->default('150+');
            $table->string('kecamatan')->default('10');
            $table->string('kelurahan')->default('70');
            $table->json('navigation_items')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('banners');
    }
};
