<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExpertiseApprovesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('expertise_approves')) {
            Schema::create('expertise_approves', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('expertise_info_id');
                $table->integer('user_id');
                $table->tinyInteger('order');
                $table->text('info')->nullable()->default(null);
                $table->tinyInteger('status')->default(0);
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('expertise_approves');
    }
}
