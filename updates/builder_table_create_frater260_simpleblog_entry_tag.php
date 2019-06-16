<?php namespace Frater260\SimpleBlog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateFrater260SimpleblogEntryTag extends Migration
{
    public function up()
    {
        Schema::create('frater260_simpleblog_entry_tag', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('eid');
            $table->integer('tid');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('frater260_simpleblog_entry_tag');
    }
}
