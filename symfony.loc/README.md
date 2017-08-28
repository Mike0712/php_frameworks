Домашняя работа №2

1. Сразу создадим новый бандл Admin, набрав в консоли:
```bash
php bin/console generate:bundle --namespace=AdminBundle --no-interaction
```
Консоль нам сообщит, что необходимо прописать простраство имен для нового бандла в composer.json, так и делаем.
И отредактируеем файл app/config/routing.yml, чтобы вместо аннотации задать "классический" роутинг, создадим маршрут для /admin
Обновляем страницу, получаем фатальную ошибку, система ничего не знает о новом пространстве имен. Так бывает, нужно "перетряхнуть" наш композер:
```bash
composer dump-autoload
```
Все маршрут создан, теперь после запроса нашего адреса server.local/admin получаем страницу "Hello, world" - собственно то что было создано по умолчанию в шаблоничике /src/AdminBundle/Resources/views/Default/index.html.twig и рендерится в новом контроллере.

2. Для реализации "аналога middleware в symfony" воспользуемся документацией фреймворка symfony: https://symfony.com/doc/current/event_dispatcher/before_after_filters.html, через before filter:
2.1. Создадим пустой интерфейс TokenAuthenticatedController AdminBundle\Controller и реализуем этот интерфейс в нашем Controller.
2.2. Затем необходимо создать слушатель событий TokenSubscriber, создадим его в пространстве имен: EventSubscriber.
2.3. Так как пока у нас нет подключения к БД, логин и хеш пароля будем хранить прямо в конфигах. 
