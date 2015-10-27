<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DbFailedJobs extends Migration
{
    public function up()
    {
        // Check, in case you already created the failed_jobs table from laravel migration
        if (!Schema::hasTable('failed_jobs')) {

            Schema::create('failed_jobs', function (Blueprint $table) {
                $table->engine = 'InnoDB';
                $table->increments('id');
                $table->text('connection');
                $table->text('queue');
                $table->text('payload');
                $table->timestamp('failed_at');
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('failed_jobs');
    }
}
