<?php namespace Pensoft\Impact\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreatePensoftImpactSheets extends Migration
{
    public function up()
    {
        Schema::create('pensoft_impact_sheets', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->integer('group_id');
            $table->text('title');
            $table->text('description');
            $table->string('label')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('pensoft_impact_sheets');
    }
}
