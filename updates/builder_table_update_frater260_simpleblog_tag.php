<?php namespace Frater260\SimpleBlog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateFrater260SimpleblogTag extends Migration
{
    public function up()
    {
        Schema::rename('frater260_simpleblog_tags', 'frater260_simpleblog_tag');
    }
    
    public function down()
    {
        Schema::rename('frater260_simpleblog_tag', 'frater260_simpleblog_tags');
    }
}
