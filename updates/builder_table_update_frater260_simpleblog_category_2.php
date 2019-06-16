<?php namespace Frater260\SimpleBlog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateFrater260SimpleblogCategory2 extends Migration
{
    public function up()
    {
        Schema::table('frater260_simpleblog_category', function($table)
        {
            $table->renameColumn('cid', 'id');
        });
    }
    
    public function down()
    {
        Schema::table('frater260_simpleblog_category', function($table)
        {
            $table->renameColumn('id', 'cid');
        });
    }
}
