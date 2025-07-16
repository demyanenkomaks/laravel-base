# 📖 Описание

## 📑 Структура

* [⚙️ Разработка ведется](#-разработка-ведется)
* [🚀 Разворачивание проекта](#-разворачивание-проекта)
* [⌨️ Консольные команды](#-консольные-команды)
* [🛠️ Команды использующиеся при разработке](#-команды-использующиеся-при-разработке)
* [📋 Список предустановленных пакетов](#-список-предустановленных-пакетов)

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

### Очистка логов активности

Очищает логи старше 180 дней

Количество дней настраивается в `.env` `ACTIVITY_LOGGER_DELETE_DAYS` дефолтно указано 180 или указать параметром в команде `--days=7`

Команду запускать: каждый день в ночное время (или в ненагруженное время)

```
php artisan activitylog:clean
```


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

#### Показывает изменения которые бы он сделал, без рефакторинга PHP-код (выполняется в pre-commit)

```bash
composer rector:dry
```

#### Рефакторит стиль кода (выполняется в pre-commit)

```bash
composer pint
```

#### Показывает ошибки в коде (выполняется в pre-commit)

```bash
composer phpstan
```

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

#### Запускает команды test:arch, rector, pint, phpstan

```bash
composer fix
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
* [x] [coolsam/modules](https://github.com/savannabits/filament-modules) - Модули ([документация](https://laravelmodules.com/docs/12/getting-started/introduction)) ([artisan команды](https://laravelmodules.com/docs/12/advanced/artisan-commands))
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

