<?php
return [
    'columns' => [
        'log_name' => [
            'label' => 'Тип',
        ],
        'event' => [
            'label' => 'Событие',
        ],
        'subject_type' => [
            'label' => 'Объект',
        ],
        'causer' => [
            'label' => 'Пользователь',
        ],
        'properties' => [
            'label' => 'Свойства',
        ],
        'created_at' => [
            'label' => 'Дата записи',
        ],
    ],
    'filters' => [
        'created_at' => [
            'label'         => 'Дата записи',
            'created_from'  => 'Создано с ',
            'created_until' => 'Создано по ',
        ],
        'event' => [
            'label' => 'Событие',
        ],
    ],
];