<?php namespace Frater260\SimpleBlog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateFrater260SimpleblogTags extends Migration
{
    public function up()
    {
        Schema::create('frater260_simpleblog_tags', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('tid');
            $table->string('tag_name', 30)->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('frater260_simpleblog_tags');
    }
}
