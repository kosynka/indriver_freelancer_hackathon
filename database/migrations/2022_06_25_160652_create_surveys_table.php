<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('surveys');
        Schema::create('surveys', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->enum('type', [  'ussr_hero',
                                            'wwt_veteran',
                                            'orphan',
                                            'invalid_kid_parent',
                                            'mother_hero',
                                            'with_tax_objects',
                                            'ind_who_rent_room'
                                        ]);
            $table->integer('actual_mileage');
            $table->integer('work_days');
            $table->integer('petrol_per_day');
            $table->integer('primary_cost');
            $table->integer('average_monthly_income');
            $table->integer('fin_goal');
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
        Schema::dropIfExists('surveys');
    }
};
