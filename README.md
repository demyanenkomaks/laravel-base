# 📖 Описание

## 📑 Структура

* [⚙️ Разработка ведется](#-разработка-ведется)
* [🚀 Разворачивание проекта](#-разворачивание-проекта)
* [⌨️ Консольные команды](#-консольные-команды)
* [🛠️ Команды использующиеся при разработке](documentation/console-commands-development.md)
* [💾 Тестирование проекта](documentation/testing.md)
* [📋 Список предустановленных пакетов](documentation/pre-installed-packages.md)

## ⚙️ Разработка ведется

- **PHP**: 8.3+
- **MySql**: 8+ или **PgSql**: 16+
- **Laravel**: 12
- **FilamentPhp**: 3.x

## 🚀 Разворачивание проекта

1. Клонируем проект `git clone ...`
2. Копируем `.env.example` в `.env`
3. Указываем настройки в файле `.env` описание смотреть `.env.example`
4. Устанавливаем пакеты Composer `composer install --no-dev`
5. Генерируем ключ приложения `php artisan key:generate`
6. Запускаем миграции `php artisan migrate`
7. Создание символических ссылок `php artisan storage:link`
8. Создание пользователя `php artisan make:filament-user`
9. Указание пользователю роли super-admin `php artisan shield:super-admin --user=1`, где параметр `--user` - это id пользователя
10. Готово!

## ⌨️ Консольные команды:

### Запустить планирования задач

Все консольные команды необходимо настраивать с помощью [Планирования задач Laravel](https://laravel.com/docs/12.x/scheduling) для упрощенного запуска на сервере одной командой.

[⌨️ Список консольных команд и правила их запуска](documentation/console-commands.md)

Запускать планировщик на сервере каждую минуту:

```bash
php artisan schedule:run
```