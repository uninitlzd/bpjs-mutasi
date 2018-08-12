<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFeedbackFileColumnsInSubmissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('submissions', function(Blueprint $blueprint) {
            $blueprint->text('feedback_file')->nullable(true)->after('feedback');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('submissions', function(Blueprint $blueprint) {
            $blueprint->dropColumn('feedback_file');
        });
    }
}
