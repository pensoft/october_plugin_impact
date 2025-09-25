<?php namespace Pensoft\Impact\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePensoftImpactSheets extends Migration
{
    public function up()
    {
        Schema::table('pensoft_impact_sheets', function($table)
        {
            $table->integer('sort_order')->nullable()->default(1);
        });
    }
    
    public function down()
    {
        Schema::table('pensoft_impact_sheets', function($table)
        {
            $table->dropColumn('sort_order');
        });
    }
}
