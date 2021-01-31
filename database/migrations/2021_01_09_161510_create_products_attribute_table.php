<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;


    class CreateProductsAttributeTable extends Migration
    {

        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {

            Schema::create('products_attribute', function(Blueprint $table)
            {

                $table->bigIncrements('id');
                $table->bigInteger('product_id');
                $table->string('color');
                $table->float('size');
                $table->float('weight');
                $table->float('price');
                $table->bigInteger('number');
                $table->timestamps();
                $table->softDeletes();
            });
        }


        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down()
        {

            Schema::dropIfExists('products_attribute');
        }

    }
