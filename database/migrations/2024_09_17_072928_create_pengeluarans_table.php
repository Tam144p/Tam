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
        Schema::create(table: 'pengeluarans', callback: function (Blueprint $table): void {
            $table->id();
            $table->foreignid(column: 'id_user');
            $table->string(column: 'judul_pengeluaran', length: 75);
            $table->text(column: 'deskripsi');
            $table->unsignedBiginteger(column: 'nominal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengeluarans');
    }
};
