<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('filament_email_log', function (Blueprint $table): void {
            $table->after('id', function (Blueprint $table): void {
                $table->foreignId('team_id')->nullable();
            });
        });
    }

    public function down()
    {
        Schema::table('filament_email_log', function (Blueprint $table): void {
            $table->dropColumn('team_id');
        });
    }
};
