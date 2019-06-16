<?php namespace Frater260\SimpleBlog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateFrater260SimpleblogEntryTag extends Migration
{
    public function up()
    {
        Schema::table('frater260_simpleblog_entry_tag', function($table)
        {
            $table->integer('eid')->nullable()->change();
            $table->integer('tid')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('frater260_simpleblog_entry_tag', function($table)
        {
            $table->integer('eid')->nullable(false)->change();
            $table->integer('tid')->nullable(false)->change();
        });
    }
}
