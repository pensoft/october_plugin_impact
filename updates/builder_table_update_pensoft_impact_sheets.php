<?php namespace Pensoft\Impact\Updates;

use Schema;
use Illuminate\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePensoftImpactSheets extends Migration
{
    public function up(): void
    {
        Schema::table('pensoft_impact_sheets', function(Blueprint $table)
        {
            $table->integer('sort_order')->nullable()->default(1);
        });
    }

    public function down(): void
    {
        Schema::table('pensoft_impact_sheets', function(Blueprint $table)
        {
            $table->dropColumn('sort_order');
        });
    }
}
