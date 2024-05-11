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
        Schema::create('formulirs', function (Blueprint $table) {
            $table->id();
            //sesi 1
            $table->string('nama_perusahaan',50);
            $table->string('kategori',30);
            $table->string('bentuk_perusahaan',30);
            $table->string('alamat_perusahaan',50);
            $table->string('notelp',15);
            $table->string('nohp',15);
            $table->string('email',25);
            $table->string('tahun',10);
            $table->string('nama_direktur',30);
            $table->string('kriteria',50);

            //sesi 2
            $table->integer('jawaban_1');
            $table->integer('jawaban_2');
            $table->integer('jawaban_3');
            $table->integer('jawaban_4');
            $table->integer('jawaban_5');
            $table->integer('jawaban_6');
            $table->integer('jawaban_7');
            $table->integer('jawaban_8');
            $table->integer('jawaban_9');
            $table->integer('jawaban_10');

            //sesi 3
            $table->integer('jawaban2_1');
            $table->integer('jawaban2_2');
            $table->integer('jawaban2_3');
            $table->integer('jawaban2_4');
            $table->integer('jawaban2_5');
            $table->decimal('jawaban2_6', 5, 2);
            $table->decimal('jawaban2_7', 5, 2);
            $table->decimal('jawaban2_8', 5, 2);
            $table->integer('jawaban2_9');
            $table->integer('jawaban2_10');
            $table->integer('jawaban2_11');
            $table->integer('jawaban2_12');
            $table->integer('jawaban2_13');

            //sesi 4
            $table->integer('jawaban3_1');
            $table->integer('jawaban3_2');
            $table->integer('jawaban3_3');
            $table->integer('jawaban3_4');
            $table->string('jawaban3_5',50);
            $table->string('jawaban3_6',50);
            $table->integer('jawaban3_7');
            $table->integer('jawaban3_8');
            $table->integer('jawaban3_9');
            $table->integer('jawaban3_10');
            $table->integer('jawaban3_11');
            $table->integer('jawaban3_12');
            $table->integer('jawaban3_13');
            $table->integer('jawaban3_14');

            //sesi 5
            $table->integer('jawaban4_1');
            $table->integer('jawaban4_2');
            $table->integer('jawaban4_3');
            $table->integer('jawaban4_4');
            $table->integer('jawaban4_5');
            $table->integer('jawaban4_6');
            $table->integer('jawaban4_7');
            $table->integer('jawaban4_8');
            $table->integer('jawaban4_9');
            $table->integer('jawaban4_10');
            $table->integer('jawaban4_11');
            $table->integer('jawaban4_12');
            
            //sesi 6
            $table->integer('jawaban5_1');
            $table->integer('jawaban5_2');
            $table->integer('jawaban5_3');
            $table->integer('jawaban5_4');
            $table->integer('jawaban5_5');
            $table->integer('jawaban5_6');
            $table->integer('jawaban5_7');

            //file sesi 2
            $table->string('file_1')->nullable();
            $table->string('file_2')->nullable();
            $table->string('file_3')->nullable();
            $table->string('file_4')->nullable();
            $table->string('file_5')->nullable();
            $table->string('file_6')->nullable();
            $table->string('file_7')->nullable();
            $table->string('file_8')->nullable();
            $table->string('file_9')->nullable();
            $table->string('file_10')->nullable();

            //file sesi 3
            $table->string('file2_1')->nullable();
            $table->string('file2_2')->nullable();
            $table->string('file2_3')->nullable();
            $table->string('file2_4')->nullable();
            $table->string('file2_5')->nullable();
            $table->string('file2_9')->nullable();
            $table->string('file2_10')->nullable();
            $table->string('file2_11')->nullable();
            $table->string('file2_12')->nullable();
            $table->string('file2_13')->nullable();

             //file sesi 4
             $table->string('file3_1')->nullable();
             $table->string('file3_2')->nullable();
             $table->string('file3_3')->nullable();
             $table->string('file3_4')->nullable();
             $table->string('file3_7')->nullable();
             $table->string('file3_11')->nullable();
             $table->string('file3_12')->nullable();
             $table->string('file3_13')->nullable();

             //file sesi 5
             $table->string('file4_1')->nullable();
             $table->string('file4_2')->nullable();
             $table->string('file4_3')->nullable();
             $table->string('file4_4')->nullable();
             $table->string('file4_5')->nullable();
             $table->string('file4_6')->nullable();
             $table->string('file4_7')->nullable();
             $table->string('file4_8')->nullable();
             $table->string('file4_9')->nullable();
             $table->string('file4_10')->nullable();
             $table->string('file4_11')->nullable();
             $table->string('file4_12')->nullable();

             //file sesi 6
             $table->string('file5_1')->nullable();
             $table->string('file5_2')->nullable();
             $table->string('file5_3')->nullable();
             $table->string('file5_4')->nullable();
             $table->string('file5_5')->nullable();
             $table->string('file5_6')->nullable();
             $table->string('file5_7')->nullable();
             
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formulirs');
    }
};
