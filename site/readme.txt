components - Почти вся логика на сайте
    db.php - Работа с Базой Данных mysql (library: PDO)
        getConnection - Подключение к базе (получает результат из config/db_params.php)
        addRecord - Добавить в базу данных запись
        pageRecord - Кол-во записей в базе данных
        retryAdd - Проверяет есть ли повторы в отправленных данных и базе (имя и телефон)
        acceptSearch - Производит поиск по базе
    fileComp.php - Работа с файлом fileStorage.txt (Файловые хранилище)
        fileConnection - Читает файл
        fileAddRecord - Добавление записи в файловое хранилище
        getPage - Кол-во записей в файле
        ..
    router.php - Чтение URL, и направление в action.. и ..Controller
config - конфигураци (Оттуда берём данные)
    db_params.php - Параметры для Базы данных. При смене базы данных меняем данные
    routes.php - Находятся array(URL) который читает из URL правильную action.. и ..Components
controllers - передача данных для views
     ..Controller.php - переходит в нужный action и даёт в views данные, которые нужно вывести
models - раскидывает данные в array который переходит из URL->router.php->..Controller->Models
template - второстепенные файлы(типа: css, img и т.п.)
views - то что видит Юзер