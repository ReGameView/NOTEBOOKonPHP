<html>
<head>
    <title>Записная книжка</title>
    <link href="/template/css/style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<a href="record">Главное меню</a>
<a href="archive">Добавление записи</a>
<a href="view">Показать все записи</a>
<h1>Записная книжка</h1>
<fieldset>
    <table>
        <tr><th>Имя</th><th>Телефон</th><th>Адрес</th><th>email</th></tr>
        <?php foreach ($recordList as $recordItem):?>
            <tr><th><?php echo $recordItem['name']; ?></th><th><?php echo $recordItem['mobile'];?></th><th><?php echo $recordItem['address']?></th><th><?php echo $recordItem['email']?></th></tr>
        <?php endforeach;?>
    </table>
</fieldset>
</body>
</html>