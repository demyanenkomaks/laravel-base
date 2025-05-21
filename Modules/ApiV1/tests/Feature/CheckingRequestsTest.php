<?php

test('запрос /api/v1 выполнился успешно', function (): void {
    $response = $this->get('/api/v1'); // @phpstan-ignore method.notFound

    $response->assertStatus(200);
});
