<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePawnshopSystemVariablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pawnshop_system_variables', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('type')->nullable();
            $table->integer('loan_grants_on')->nullable();
            $table->integer('maturity')->nullable();
            $table->integer('expiration')->nullable();
            $table->integer('auction')->nullable();
            $table->integer('send_note_on')->nullable();
            $table->float('interest')->nullable();
            $table->float('penalty')->nullable();
            $table->string('category')->nullable();
            $table->float('short_term_interest')->nullable();
            $table->integer('ante_date')->nullable();
            $table->string('status')->nullable();
            $table->unsignedInteger('added_by')->nullable();
            $table->unsignedInteger('last_update_by')->nullable();
            $table->string('branch_code')->nullable();
            $table->string('description')->nullable();
            $table->integer('extension_terms')->nullable();
            $table->string('item_type')->nullable();
            $table->float('advance_interest')->nullable();
            $table->float('service_charge')->nullable();
            $table->string('serial_series')->nullable();
            $table->float('minimum_loan_amount')->nullable();
            $table->float('maximum_loan_amount')->nullable();
            $table->float('s_chars')->nullable();
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
        Schema::dropIfExists('pawnshop_system_variables');
    }
}
