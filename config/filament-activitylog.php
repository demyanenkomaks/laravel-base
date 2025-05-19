<?php

return [
    'resources' => [
        'label' => 'Журнал активности',
        'plural_label' => 'Журнал активности',
        'navigation_item' => true,
        'navigation_group' => 'Управление',
        'navigation_icon' => 'heroicon-o-shield-check',
        'navigation_sort' => 9,
        'default_sort_column' => 'id',
        'default_sort_direction' => 'desc',
        'navigation_count_badge' => false,
        'resource' => \Rmsramos\Activitylog\Resources\ActivitylogResource::class,
    ],
    'datetime_format' => 'd.m.Y H:i:s',
];
