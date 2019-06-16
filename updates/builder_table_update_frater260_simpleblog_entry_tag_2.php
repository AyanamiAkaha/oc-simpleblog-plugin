<?php namespace Frater260\SimpleBlog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateFrater260SimpleblogEntryTag2 extends Migration
{
    public function up()
    {
        Schema::table('frater260_simpleblog_entry_tag', function($table)
        {
            $table->integer('eid')->nullable(false)->default(null)->change();
            $table->integer('tid')->nullable(false)->default(null)->change();
            $table->primary(['eid','tid']);
        });
    }
    
    public function down()
    {
        Schema::table('frater260_simpleblog_entry_tag', function($table)
        {
            $table->dropPrimary(['eid','tid']);
            $table->integer('eid')->nullable()->default(NULL)->change();
            $table->integer('tid')->nullable()->default(NULL)->change();
        });
    }
}
