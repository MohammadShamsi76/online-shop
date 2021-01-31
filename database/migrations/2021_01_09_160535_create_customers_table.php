<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;


    class CreateCustomersTable extends Migration
    {

        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {

            Schema::create('customers', function(Blueprint $table)
            {

                $table->bigIncrements('id');
                $table->string("fullName");
                $table->string("phone");
                $table->string("password");
                $table->string("email");
                $table->integer("age");
                $table->boolean("gender");
                $table->enum('customerType', ['NORMAL', 'SILVER', 'GOLD'])->default('NORMAL');
                $table->string('registerIp')->nullable();
                $table->string('lastLoginIp')->nullable();
                $table->boolean('mailToCustomer')->default(false);
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

            Schema::dropIfExists('customers');
        }

    }
