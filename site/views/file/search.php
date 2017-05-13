<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="/template/css/style.css" rel="stylesheet" type="text/css" media="screen" />
    <title>Записная книжка</title>
</head>
<body>
<fieldset>
    <h4>Запрос: <?php echo $_POST['search']; ?></h4>
    <h3>Результат поиска:</h3>
    <table>
    <tr><th>Имя</th><th>Телефон</th><th>Адрес</th><th>email</th></tr>
    <?php
    foreach ($fileList as $fileItem): ?>
<tr><th><?php echo $fileItem['name']; ?></th><th><?php echo $fileItem['mobile'];?></th><th><?php echo $fileItem['address']?></th><th><?php echo $fileItem['email']?></th></tr>
        <?php endforeach;
    ?>
    </table>
    <a href=file>Вернутся в главное меню</a>
</fieldset>
</body>
</html>
