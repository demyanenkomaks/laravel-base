<?php

test('запрос /api/v1 выполнился успешно', function () {
    $response = $this->get('/api/v1');

    $response->assertStatus(200);
});
