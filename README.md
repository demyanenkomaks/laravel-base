## Разработка ведется

| Service  | Version |
|----------|---------|
| mysql    | 8       |
| or pgsql | 16      |
| php      | 8.3     |
| laravel  | 12      |
| filament | 3       |

## Разворачивание проекта

1. Клонируем проект `git clone ...`
2. Копируем `.env.example` в `.env`
3. Указываем настройки в файле `.env` описание смотреть `.env.example`
4. Устанавливаем пакеты Composer `composer install --no-dev`
5. Генерируем ключ приложения `php artisan key:generate`
6. Запускаем миграции `php artisan migrate`
7. Создание символических ссылок `php artisan storage:link`
8. Создание пользователя `php artisan make:filament-user`
9. Указание пользователю роли super-admin `php artisan shield:super-admin --user=1`, где 1 - это id пользователя
10. Готово!

## Команды использующиеся при разработке:

#### Добавляет проверки кода перед commit

```bash
git config core.hooksPath .git-hooks
```

#### Очищает кеш для laravel и filament

```bash
composer cache:clear
```

#### Обновляет кеш для laravel и filament

```bash
composer cache
```

#### Обновляет и рефакторит PHP-код

```bash
composer rector
```

#### Рефакторит стиль кода

```bash
composer pint
```

#### Показывает ошибки в коде

```bash
composer phpstan
```

#### Запускает команды rector, pint и phpstan (эти же проверки выполняются перед commit)

```bash
composer fix
```
