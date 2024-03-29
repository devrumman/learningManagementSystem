<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMentorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mentors', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('designation');
            $table->string('slug');
            $table->text('overview')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('email')->nullable();
            $table->string('fiverr_batch_img')->nullable();
            $table->string('fiverr_url')->nullable();
            $table->string('upwork_batch_img')->nullable();
            $table->string('upwork_url')->nullable();
            $table->string('mentor_profile_img')->nullable();
            $table->integer('status')->default(1)->comment('1= Active, 2= Inactive');
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
        Schema::dropIfExists('mentors');
    }
}