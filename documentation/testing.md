# 💾 Тестирование проекта

1. Копируем `.env.example` в `.env.testing`
2. Указываем настройки для тестирования в файле `.env.testing`
3. Устанавливаем пакеты Composer `composer install`

Документация [Pest PHP](https://pestphp.com/docs/installation) 

Документация [Laravel тестирование](https://laravel.com/docs/12.x/testing) 

## 🛠️ Команды для тестирования

#### Запускает тестирование

```bash
composer test
```

#### Запускает тестирование до первого не пройденного теста

```bash
composer test:bail
```

#### Запускает проверку архитектуры проекта (выполняется в pre-commit)

```bash
composer test:arch
```

#### Запускает тестирование api/v1

```bash
composer test:api
```

#### Запускает команды test:arch, rector, pint, phpstan

```bash
composer fix
```

