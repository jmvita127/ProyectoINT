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

        Schema::create('User', function (Blueprint $table) {
            $table->BigIncrements('id');
            $table->string('name', 50);
            $table->string('last_name', 50);
            $table->string('email', 100)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password', 60);
            // $table->string('sec_question_id', 100);
            $table->string('sec_answer', 100);
            $table->string('avatar', 255);
            //$table->string('sales_id');
            $table->tinyInteger('isAdmin')->default(0);
            $table->rememberToken();
            $table->timestamps();

        });


        Schema::create('Address', function (Blueprint $table) {
            $table->BigIncrements('id');
            $table->string('street_address', 100);
            $table->string('city', 50);
            $table->string('state', 50);
            $table->string('country', 50);
            $table->unsignedInteger('zip_code');
            $table->timestamps();

        });

        Schema::create('Question', function (Blueprint $table) {
            $table->BigIncrements('id');
            $table->string('question', 100);
            //$table->string('user_id');
            $table->timestamps();

        });


        Schema::create('Product', function (Blueprint $table) {
            $table->BigIncrements('id');
            $table->string('name');
            $table->decimal('price', 20, 2)->default(0); //valor por defecto
            $table->string('description')->nullable();
            $table->unsignedInteger('stock')->default(0);
            $table->timestamps();
        });

        Schema::create('Cart', function (Blueprint $table) {
            $table->BigIncrements('id');
            // $table->unsignedInteger('user_id');
            // $table->unsignedInteger('product_id');
            $table->unsignedInteger('quantity');
            $table->timestamps();
        });


        Schema::create('Purchases', function (Blueprint $table) {
            $table->BigIncrements('id');
            // $table->string('user_id');
            $table->timestamps();
        });



        Schema::create('Ticket', function (Blueprint $table) {
            $table->BigIncrements('id');
            $table->unsignedInteger('ticket_number', 20);
            // $table->string('user_id');
            $table->timestamps();
        });


        Schema::create('Discount', function (Blueprint $table) {
            $table->BigIncrements('id');
            $table->string('percentage');
            $table->string('credit_cards');
            // $table->string('user_id');
            $table->timestamps();
        });


        Schema::create('Product_Purchases', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('price');
            $table->unsignedInteger('quantity');
            // $table->string('purchase_id');
            // $table->string('product_id');
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
        Schema::dropIfExists('User');
        Schema::dropIfExists('Address');
        Schema::dropIfExists('Question');
        Schema::dropIfExists('Product');
        Schema::dropIfExists('Cart');
        Schema::dropIfExists('Ticket');
        Schema::dropIfExists('Discount');
        Schema::dropIfExists('Purchases');
        Schema::dropIfExists('Product_Purchases');

    }
}
