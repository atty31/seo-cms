<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMetaTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meta_tags', function (Blueprint $table){
            $table->increments('id')->comment("Increment ID");
            $table->integer('page_id')->comment("Page ID");
            $table->string('type', 100)->comment("Meta tag type");
            $table->string('type_value', 100)->comment("Meta tag type value");
            $table->text('content')->comment("Meta type content");
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
        Schema::dropIfExists('meta_tags');
    }
}
