<?php namespace Frater260\SimpleBlog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateFrater260SimpleblogEntry2 extends Migration
{
    public function up()
    {
        Schema::table('frater260_simpleblog_entry', function($table)
        {
            $table->string('title', 191)->default('Untitled');
            $table->integer('category_id')->default(null)->change();
            $table->renameColumn('entry_summary', 'summary');
            $table->renameColumn('entry_text', 'text');
            $table->dropColumn('entry_title');
        });
    }
    
    public function down()
    {
        Schema::table('frater260_simpleblog_entry', function($table)
        {
            $table->dropColumn('title');
            $table->integer('category_id')->default(NULL)->change();
            $table->renameColumn('summary', 'entry_summary');
            $table->renameColumn('text', 'entry_text');
            $table->string('entry_title', 191)->default('\'Untitled\'');
        });
    }
}
