<?php

namespace App\Traits\Models;

use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity as SpatieLogActivity;

trait LogsActivity
{
    use SpatieLogActivity;

    protected static function getLogFillable()
    {
        return app(self::class)->getFillable();
    }

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()->logOnly(static::getLogFillable());
    }
}
