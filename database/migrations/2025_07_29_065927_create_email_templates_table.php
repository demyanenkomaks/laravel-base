<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(config('filament-email-templates.table_name'), function (Blueprint $table): void {
            $table->increments('id');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
            $table->softDeletes();

            $table->string('key', 191)->comment('Ключ идентификатор');
            $table->string('language', 8)->default(config('filament-email-templates.default_locale'));
            $table->string('name')->nullable()->comment('Название');
            $table->json('from')->nullable()->comment('Почта отправителя');
            $table->json('cc')->nullable();
            $table->json('bcc')->nullable();
            $table->string('subject')->nullable()->comment('Тема');
            $table->text('content')->nullable()->comment('Контент письма');

            $table->unique(['key', 'language']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(config('filament-email-templates.table_name'));
    }
};
