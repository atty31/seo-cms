<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTagsAndCommentsForPages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pages', function($table) {
            $table->string('tags_ids', 200)->comment('Tags ids for pages');
            $table->tinyInteger('enable_comments')->length(1)->comment('0 - disabled| 1 - enabled');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pages', function($table) {
            $table->dropColumn('tags_ids');
            $table->dropColumn('enable_comments');
        });
    }
}
