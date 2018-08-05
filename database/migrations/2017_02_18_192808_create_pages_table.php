<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table){
            $table->increments('id')->comment("Increment ID");
            $table->string('title', 100)->comment("Page title");
            $table->string('url_name', 100)->unique()->comment("Page url name for routing");
            $table->tinyInteger('is_static')->length(1)->comment("0 - is static page| 1 - is a dynamic page");
            $table->tinyInteger('is_active')->length(1)->comment("0 - is inactive| 1 - is active");
            $table->tinyInteger('google_ads_active')->length(1)->comment("0 - is inactive| 1 - is active");
            $table->tinyInteger('facebook_ads_active')->length(1)->comment("0 - is inactive| 1 - is active");
            $table->tinyInteger('google_analytics')->length(1)->comment("0 - is inactive| 1 - is active");
            $table->integer('category_id')->comment("Category ID");
            $table->integer('user_id')->comment("Admin user ID");
            $table->tinyInteger('page_cols')->length(2)->comment("0 - 1 page column | 1 - 2 page column | 2 - 3 page column");
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
        Schema::dropIfExists('pages');
    }
}
