Домашняя работа №2

1. Сразу создадим новый бандл Admin, набрав в консоли:
```bash
php bin/console generate:bundle --namespace=AdminBundle --no-interaction
```
Консоль нам сообщит, что необходимо прописать простраство имен для нового бандла в composer.json, так и делаем.

И отредактируеем файл app/config/routing.yml, чтобы получить вместо аннотации задать жесткий роутинг:


