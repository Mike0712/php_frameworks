Домашняя работа №2

- Создадим middlevare с именем CheckAdmin. 

```bash
php artisan make:middleware CheckAdmin
```

- В директории app/Html/Middleware находим вновь созданный класс middleware CheckAdmin.
- Зарегистрируем наш middleware в классе kernel. Регистрация путем добавления элемента массива в свойство $routeMiddleware, с ключем
check.admin;
- В файле routes/web.php создадим маршрут (группу маршрутов) под префиксом admin и "навесим" на них наш middleware 
- Создадим контроллер AdminController, с заполненнными методами: 

```bash
    php artisan make:controller AdminController --resource
```

- Отредактируем наш класс middleware.
- Теперь попытаемся передать в request, пока что методом get нужные параметры: /admin?X-UserName=admin&X-Password=123456. Хотя это очень плохая практика, лучше прикрутить форму и передавать данные методом get, но пока мы не изучали представление, поэтому пока так. Как видим всё отработало и мы увидили что возвращает контроллер.
- Данные, с которыми мы будем сравнивать данные запроса кладем в конфиг (поскольку пока никакая БД к системе не подключена). Файл конфига 'config/admin.php'
