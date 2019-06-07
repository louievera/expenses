<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->integer('role_id')->default(2);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('api_token',80)
                    ->unique()
                    ->nullable()
                    ->default(null);
            $table->rememberToken();
            $table->timestamps();
        });

        DB::table('users')->insert([
            'name'      => 'admin',
            'email'     => 'admin@email.com',
            'password'  => bcrypt('admin123'),
            'role_id'   => 1,
            'api_token' => Str::random(60)
        ]);

         DB::table('users')->insert([
            'name'      => 'user',
            'email'     => 'user@email.com',
            'password'  => bcrypt('user123'),
            'role_id'   => 2,
            'api_token' => Str::random(60)

        ]);
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
}
