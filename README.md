Данный репозиторий содержит сайт-блог, построенный на основе фреймворка Symfony. Сайт включает функционал для авторизации пользователя. Зарегистрированные пользователи имеют возможность создавать новые посты, редактировать и удалять, которые будут отображаться на главной странице. Пользователи могут воспользоваться поиском по словам, который ищет совпадения в заголовках или тексе статей, а также написать комментарии к статьям.

Чтобы развернуть приложение нужно:

1.Установить PHP и внести в переменные среды Path (Указать путь)

2.Установить PhpStorm или любую другу среду разработки поддерживающие PHP

3.Скачать Symfony и внести в переменные среды Path (Указать путь)

4.Развернуть Symfony в нужной папке с помощью команды symfony new --webapp (Название проекта).

5.Далее выбирите БД где будет хранится информация о пользователях, комментариях и постах (Например Open Server)

6.Создать и указать путь к БД в документе .env

7.Сделать миграции при помощи комманд: php bin/console make:migration, php bin/console doctrine:migrations:migrate
