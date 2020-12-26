<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('invoice_id');
            $table->date('issue_date');
            $table->date('due_date');
            $table->string('from_name');
            $table->string('from_address')->nullable();
            $table->string('from_postal_code')->nullable();
            $table->string('from_city')->nullable();
            $table->string('from_province')->nullable();
            $table->string('from_country')->nullable();
            $table->string('from_email')->nullable();
            $table->string('for_name');
            $table->string('for_address')->nullable();
            $table->string('for_postal_code')->nullable();
            $table->string('for_city')->nullable();
            $table->string('for_province')->nullable();
            $table->string('for_country')->nullable();
            $table->string('for_email')->nullable();
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
        Schema::dropIfExists('invoices');
    }
}
