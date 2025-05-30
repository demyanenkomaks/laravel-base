<?php

use App\Http\Controllers\Controller;
use Illuminate\Console\Command;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Mail\Mailable;

uses()->group('arch');

arch('php')->preset()->php();

arch('security')->preset()->security();

arch('отладочные функции')
    ->expect([
        'dd',
        'ddd',
        'sleep',
        'debugbar',
        'env',
        'exit',
    ])
    ->not->toBeUsed();

arch('Models должны лежать в папках app/Models и Modules/*/app/Models', function (): void {
    $expects = ['App\Models', ...getModuleNamespaces('Models')];

    expect($expects) // Разрешение
        ->toExtend(Model::class)
        ->classes->not->toHaveSuffix('Model')
        ->and(['App', ...getModuleNamespaces()]) // Запрет
        ->not->toExtend(Model::class)
        ->ignoring($expects);
});

arch('Controllers должны лежать в папках app/Http/Controllers и Modules/*/app/Http/Controllers', function (): void {
    $expects = ['App\Http\Controllers', ...getModuleNamespaces('Http\Controllers')];

    expect($expects) // Разрешение
        ->toExtend(Controller::class)
        ->classes->toHaveSuffix('Controller')
        ->and(['App', ...getModuleNamespaces()]) // Запрет
        ->not->toExtend(Controller::class)
        ->ignoring($expects);
});

arch('Resources должны лежать в папках app/Http/Resources и Modules/*/app/Transformers', function (): void {
    $expects = ['App\Http\Resources', ...getModuleNamespaces('Transformers')];

    expect($expects) // Разрешение
        ->toExtend(JsonResource::class)
        ->classes->toHaveSuffix('Resource')
        ->and(['App', ...getModuleNamespaces()]) // Запрет
        ->not->toExtend(JsonResource::class)
        ->ignoring($expects);
});

arch('Requests должны лежать в папках app/Http/Requests и Modules/*/app/Http/Requests', function (): void {
    $expects = ['App\Http\Requests', ...getModuleNamespaces('Http\Requests')];

    expect($expects) // Разрешение
        ->toExtend(FormRequest::class)
        ->classes->toHaveSuffix('Request')
        ->and(['App', ...getModuleNamespaces()]) // Запрет
        ->not->toExtend(FormRequest::class)
        ->ignoring($expects);
});

arch('Commands должны лежать в папках app/Console и Modules/*/app/Console', function (): void {
    $expects = ['App\Console', ...getModuleNamespaces('Console')];

    expect($expects) // Разрешение
        ->toExtend(Command::class)
        ->and(['App', ...getModuleNamespaces()]) // Запрет
        ->not->toExtend(Command::class)
        ->ignoring($expects);
});

arch('Mailable должны лежать в папках app/Mail и Modules/*/app/Emails', function (): void {
    $expects = ['App\Mail', ...getModuleNamespaces('Emails')];

    expect($expects) // Разрешение
        ->toExtend(Mailable::class)
        ->and(['App', ...getModuleNamespaces()]) // Запрет
        ->not->toExtend(Mailable::class)
        ->ignoring($expects);
});

arch('Jobs должны лежать в папках app/Jobs и Modules/*/app/Jobs', function (): void {
    $expects = ['App\Jobs', ...getModuleNamespaces('Jobs')];

    expect($expects) // Разрешение
        ->toExtend(ShouldQueue::class)
        ->toHaveMethod('handle')
        ->classes->toHavePrefix('Job')
        ->and(['App', ...getModuleNamespaces()]) // Запрет
        ->not->toExtend(ShouldQueue::class)
        ->ignoring($expects);
});

arch('Observers должны лежать в папках app/Observers и Modules/*/Observers', function (): void {
    $expects = ['App\Observers', ...getModuleNamespaces('Observers')];

    expect($expects) // Разрешение
        ->classes->toHaveSuffix('Observer')
        ->and(['App', ...getModuleNamespaces()]) // Запрет
        ->not->toHaveSuffix('Observer')
        ->ignoring($expects);
});

arch('Policies должны лежать в папках app/Policies и Modules/*/Policies', function (): void {
    $expects = ['App\Policies', ...getModuleNamespaces('Policies')];

    expect($expects) // Разрешение
        ->classes->toHaveSuffix('Policy')
        ->and(['App', ...getModuleNamespaces()]) // Запрет
        ->not->toHaveSuffix('Policy')
        ->ignoring($expects);
});

arch('factories должны лежать в папках database/factories и Modules/*/database/factories', function (): void {
    $expects = ['Database\Factories', ...getModuleNamespaces('Database\Factories')];

    expect($expects) // Разрешение
        ->toExtend(Factory::class)
        ->toHaveMethod('definition')
        ->classes->toHaveSuffix('Factory')
        ->and(['App', ...getModuleNamespaces()]) // Запрет
        ->not->toExtend(Factory::class)
        ->ignoring($expects);
});

arch('seeders должны лежать в папках database/seeders и Modules/*/database/seeders', function (): void {
    $expects = ['Database\Seeders', ...getModuleNamespaces('Database\Seeders')];

    expect($expects) // Разрешение
        ->toExtend(Seeder::class)
        ->toHaveMethod('run')
        ->classes->toHaveSuffix('Seeder')
        ->and(['App', ...getModuleNamespaces()]) // Запрет
        ->not->toExtend(Seeder::class)
        ->ignoring($expects);
});
