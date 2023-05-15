<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersStatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_status', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->enum('status', ['0', '1'])->default('0')->comment('0=>inactive, 1=>active');
            $table->string('scan_code')->default('');
            $table->string('vault_response')->default('');
            $table->longText('json_response')->nullable();
            $table->string('logic')->default('');
            $table->timestamp('process_start_at')->nullable();
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
        Schema::dropIfExists('users_status');
    }
}
