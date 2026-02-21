<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Illuminate\Database\Blueprint;
use Illuminate\Database\Illuminate\Database\Schema;

return new class extends Migration
{


    public function up(): void
    {
       Schema::table('users', function (Blueprint $table){
       

       $table->string('avatar')->nullable()->after('name');
       $table->string('telefono')->nullable()->after('avatar');
       $table->string('calle')->nullable()->after('telefono');
    });
    }




    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {

        $table->dropColumn('avatar');
        });
    }
};