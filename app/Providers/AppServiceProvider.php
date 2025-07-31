<?php

namespace App\Providers;

use App\Policies\ActivityPolicy;
use App\Policies\EmailPolicy;
use App\Policies\EmailTemplatePolicy;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;
use Maksde\FilamentEmailTemplates\Models\EmailTemplate;
use RickDBCN\FilamentEmail\Models\Email;
use Spatie\Activitylog\Models\Activity;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if ($this->app->environment(['production'])) {
            URL::forceScheme('https');
            request()->server->set('HTTPS', request()->header('X-Forwarded-Proto', 'https') === 'https' ? 'on' : 'off');
        }

        Gate::policy(Activity::class, ActivityPolicy::class); // Регистрация политики доступа для журнала активности
        Gate::policy(Email::class, EmailPolicy::class); // Регистрация политики доступа для журнала отправленных E-mail
        Gate::policy(EmailTemplate::class, EmailTemplatePolicy::class); // Регистрация политики доступа для шаблонов электронных писем

        // Дает пользователю с ролью super_admin доступ ко всей админ панели
        Gate::before(static function ($user, $ability) {
            if ($user->hasRole('super_admin')) {
                return true;
            }
        });
    }
}
