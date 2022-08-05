<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingOfficerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('setting_officer', function (Blueprint $table) {
            $table->id();

            // Profile Desa
            $table->text('img_desa')->nullable();
            $table->text('sejarah_kampung')->nullable();
            $table->string('video_desa')->nullable();

            // Tantangan dan Potensi
            $table->string('kategori_tdp')->nullable();
            $table->text('gambar_tdp')->nullable();
            $table->string('judul_tdp')->nullable();
            $table->string('desc_tdp')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('setting_sejarah_kampung');
    }
}
