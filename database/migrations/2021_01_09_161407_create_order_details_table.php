<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;


    class CreateOrderDetailsTable extends Migration
    {

        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {

            Schema::create('order_details', function(Blueprint $table)
            {

                $table->bigIncrements('id');
                $table->bigInteger('order_id');
                $table->bigInteger('address_id');
                $table->bigInteger('product_id');
                $table->date('date');
                $table->integer('orderNumber');
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

            Schema::dropIfExists('order_details');
        }

    }
