<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('data_id');
            $table->string('no_persil',30);
            $table->string('kelas_desa',50);
            $table->string('ha',30);
            $table->string('da',30);
            $table->string('R',30);
            $table->string('S',30);
            $table->string('metode',50)->nullable();
            $table->string('tahun',50)->nullable();
            $table->string('atas_nama',50)->nullable();
            $table->text('alasan')->nullable();
            $table->string('file')->nullable();
            $table->string('type');
            $table->timestamps();

            $table->foreign('data_id')->references('id')->on('data');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assets');
    }
}
