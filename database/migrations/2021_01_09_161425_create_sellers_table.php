<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;


    class CreateSellersTable extends Migration
    {

        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {

            Schema::create('sellers', function(Blueprint $table)
            {

                $table->bigIncrements('id');
                $table->string('fullName');
                $table->string('companyName');
                $table->string('address');
                $table->bigInteger('city_id');
                $table->enum('sellerType', ['NORMAL', 'SILVER', 'GOLD'])->default('NORMAL');
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

            Schema::dropIfExists('sellers');
        }

    }
