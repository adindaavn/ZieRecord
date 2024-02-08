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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('id_operator');
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->enum('hak_akses', ['walas', 'umum', 'bk', 'prod', 'siswa kelas', 'siswa km']);
            $table->enum('role',['siswa', 'guru']);
            $table->enum('status',['Aktif', 'Suspend', 'Tidak Aktif']);
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
        Schema::dropIfExists('users');
    }
};
