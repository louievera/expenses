<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('role', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('role_name');
            $table->string('description');
            $table->timestamps();
        });
        
        DB::table('role')->insert([
            'role_name'     => 'administrator',
            'description'   => 'super user'
        ]);

        DB::table('role')->insert([
            'role_name'     => 'user',
            'description'   => 'user'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('role');
    }
}
