<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExpensesCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expenses_category', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('category_name');
            $table->string('description');
            $table->timestamps();
        });

        DB::table('expenses_category')->insert([
            'category_name' => 'travel',
            'description'   => 'daily commute'
        ]);

        DB::table('expenses_category')->insert([
            'category_name' => 'entertainment',
            'description'   => 'movies etc'
        ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('expenses_category');
    }
}
