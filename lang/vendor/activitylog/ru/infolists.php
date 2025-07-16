<?php

return [
    'components' => [
        'created_by_at'             => '<strong>:subject</strong> был <strong>:event</strong> пользователем <strong>:causer</strong>. <br><small>Обновлено: <strong>:update_at</strong></small>',
        'updater_updated'           => 'Пользователь :causer :event следующие данные: <br>:changes',
        'from_oldvalue_to_newvalue' => '- :key из <strong>:old_value</strong> в <strong>:new_value</strong>',
        'to_newvalue'               => '- :key <strong>:new_value</strong>',
        'unknown'                   => 'Неизвестно',
    ],
];