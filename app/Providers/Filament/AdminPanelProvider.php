<?php

namespace App\Providers\Filament;

use BezhanSalleh\FilamentShield\FilamentShieldPlugin;
use Coolsam\Modules\ModulesPlugin;
use Exception;
use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\AuthenticateSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Pages;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Support\Enums\MaxWidth;
use Filament\Widgets;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Maksde\FilamentEmailTemplates\FilamentEmailTemplatesPlugin;
use RickDBCN\FilamentEmail\FilamentEmail;
use Rmsramos\Activitylog\ActivitylogPlugin;
use Saade\FilamentLaravelLog\FilamentLaravelLogPlugin;
use TomatoPHP\FilamentUsers\FilamentUsersPlugin;

class AdminPanelProvider extends PanelProvider
{
    /**
     * @throws Exception
     */
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id(config('filament.admin_path'))
            ->path(config('filament.admin_path'))
            ->login()
            ->colors([
                'primary' => Color::Amber,
            ])
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\\Filament\\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\\Filament\\Pages')
            ->pages([
                Pages\Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\\Filament\\Widgets')
            ->widgets([
                Widgets\AccountWidget::class,
                Widgets\FilamentInfoWidget::class,
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ])
            ->plugins([
                FilamentUsersPlugin::make(),
                FilamentShieldPlugin::make(),
                FilamentLaravelLogPlugin::make()
                    ->navigationGroup('Журналы')
                    ->navigationLabel('Ошибок')
                    ->authorize(fn () => auth()->user()->can('page_ViewLog'))
                    ->navigationSort(997),
                ActivitylogPlugin::make(),
                FilamentEmail::make(),
                ModulesPlugin::make(),
                FilamentEmailTemplatesPlugin::make(),
            ])
            ->maxContentWidth(MaxWidth::Full)
            ->topNavigation();
    }
}
