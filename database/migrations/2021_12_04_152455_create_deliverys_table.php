<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeliverysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deliverys', function (Blueprint $table) {
            $table->id();
            $table->string('code');
			$table->string('label');
			$table->integer('companies_id');
			$table->integer('companies_contacts_id');
			$table->integer('companies_addresses_id');
			$table->integer('statu')->default(1);
            #1 = In progress
            #2 = Sent
            $table->integer('invoice_status')->default(1);
            #1 = Chargeable
            #2 = Not chargeable
            #3 = Partly invoiced
            #4 = Invoiced
			$table->integer('user_id');
			$table->text('comment', 65535)->nullable();
            $table->integer('order_id')->nullable();
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
        Schema::dropIfExists('deliverys');
    }
}
