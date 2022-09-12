<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('budaya', function (Blueprint $table) {
            $table->id();
            $table->string('judul_budaya');
            $table->string('foto_budaya');
            $table->char('highlight_budaya', 200);
            $table->text('detail_budaya');
            $table->string('kategori_budaya');
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
        Schema::dropIfExists('budaya');
    }
};
