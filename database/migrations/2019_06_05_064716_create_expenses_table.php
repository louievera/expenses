<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExpensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expenses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->integer('category_id');
            $table->decimal('amount',8,2);
            $table->date('date');
            $table->timestamps();
           
        });

         DB::table('expenses')->insert([
                'user_id' => 1,
                'category_id' => 1,
                'amount' => '100.00',
                'date' => '2019-6-6'
            ]);

         DB::table('expenses')->insert([
            [
                'user_id' => 1,
                'category_id' => 2,
                'amount' => '150.00',
                'date' => '2019-6-5']
         ]);

          DB::table('expenses')->insert([
            [
                'user_id' => 2,
                'category_id' => 1,
                'amount' => '120.00',
                'date' => '2019-6-5']
         ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('expenses');
    }
}
