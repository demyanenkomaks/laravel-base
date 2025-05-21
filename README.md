# 📖 Описание

## 📑 Структура

* [⚙️ Разработка ведется](#-разработка-ведется)
* [🚀 Разворачивание проекта](#-разворачивание-проекта)
* [🛠️ Команды использующиеся при разработке](#-команды-использующиеся-при-разработке)
* [📋 Список предустановленных пакетов](#-список-предустановленных-пакетов)

## ⚙️ Разработка ведется

- **PHP**: 8.3+
- **MySql**: 8+ or **PgSql**: 16+
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
9. Указание пользователю роли super-admin `php artisan shield:super-admin --user=1`, где 1 - это id пользователя
10. Готово!

## 🛠️ Команды использующиеся при разработке

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

#### Запускает тестирование 

```bash
composer test
```


## 📋 Список предустановленных пакетов

* [x] [Laravel](https://laravel.com/docs)
* [x] [Filament](https://filamentphp.com/docs/3.x/panels/installation)

### Пользователи

* [x] [tomatophp/filament-users](https://github.com/tomatophp/filament-users) - Управление пользователями
* [x] [bezhansalleh/filament-shield](https://github.com/bezhansalleh/filament-shield) - Управление доступами по ролям

### Журналы

* [x] [rmsramos/activitylog](https://github.com/rmsramos/activitylog) - Журнал активности
* [x] [saade/filament-laravel-log](https://github.com/saade/filament-laravel-log) - Журнал ошибок
* [x] [rickdbcn/filament-email](https://github.com/rickdbcn/filament-email) - Журнал исходящих E-mail

### Разное

* [ ] Шаблоны E-mail
* [ ] Настройки
* [x] [coolsam/modules](https://github.com/savannabits/filament-modules) - Модули
  * [x] Api модуль с приветствием (настройка CORS и добавление теста)

### Проверка кода

* [x] [driftingly/rector-laravel](https://github.com/driftingly/rector-laravel) - Автоматизированный рефакторинг кода
* [x] [laravel/pint](https://laravel.com/docs/pint) - Фиксатор стиля кода
* [x] [larastan/larastan](https://github.com/larastan/larastan) - Статический анализ кода
* [x] [roave/security-advisories](https://github.com/Roave/SecurityAdvisories) - Проверка пакетов по известным уязвимостям безопасности
* [x] [pestphp/pest](https://pestphp.com/docs/installation) - Тестирование кода

### Помощники

* [x] [maksde/helpers](https://github.com/demyanenkomaks/helpers) - Шаблоны для Resource Filament
* [x] [maksde/support](https://github.com/demyanenkomaks/support) - Помощник для Laravel

