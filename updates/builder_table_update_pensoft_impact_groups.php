<?php namespace Pensoft\Impact\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePensoftImpactGroups extends Migration
{
    public function up()
    {
        Schema::table('pensoft_impact_groups', function($table)
        {
            $table->integer('sort_order')->nullable()->default(1);
        });
    }
    
    public function down()
    {
        Schema::table('pensoft_impact_groups', function($table)
        {
            $table->dropColumn('sort_order');
        });
    }
}
