<?php namespace Frater260\SimpleBlog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateFrater260SimpleblogEntry extends Migration
{
    public function up()
    {
        Schema::create('frater260_simpleblog_entry', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('eid');
            $table->string('entry_title')->default('Untitled');
            $table->string('entry_summary')->nullable();
            $table->text('entry_text')->nullable();
            $table->integer('cid')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('frater260_simpleblog_entry');
    }
}
