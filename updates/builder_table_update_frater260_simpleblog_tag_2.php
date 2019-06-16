<?php namespace Frater260\SimpleBlog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateFrater260SimpleblogTag2 extends Migration
{
    public function up()
    {
        Schema::table('frater260_simpleblog_tag', function($table)
        {
            $table->renameColumn('tid', 'id');
            $table->renameColumn('tag_name', 'name');
        });
    }
    
    public function down()
    {
        Schema::table('frater260_simpleblog_tag', function($table)
        {
            $table->renameColumn('id', 'tid');
            $table->renameColumn('name', 'tag_name');
        });
    }
}
