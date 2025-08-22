<?php 

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMPelayananTable extends Migration
{
    public function up()
    {
        Schema::create('m_pelayanan', function (Blueprint $table) {
            $table->id();
            $table->string('kategori');
            $table->string('poin');
            $table->text('isi');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('m_pelayanan');
    }
}
