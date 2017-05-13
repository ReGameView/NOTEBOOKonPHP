<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
    <link rel="stylesheet" href="template/css/style.css"  type="text/css">
    <title>Записная книжка</title>
</head>
<header>
    <a href="file">Главное меню</a><br>
    <a href="fArchive">Добавить новую запись</a><br>
    <a href="fView">Все записи в книжке</a>
</header>
<body>
<div align="right">
</div>
</fieldset>
<br>
<h1>Файловое хранилище<br>
    Ваши записи</h1>
<fieldset>
    <table>
        <tr><th>Имя</th><th>Телефон</th><th>Адрес</th><th>email</th></tr>
        <?php
        $file = File::getAllFile();
        foreach($file as $fileItem):?>
        <tr><th><?php echo $fileItem['name']; ?></th><th><?php echo $fileItem['mobile'];?></th><th><?php echo $fileItem['address']?></th><th><?php echo $fileItem['email']?></th></tr>
<?php endforeach;?>
</fieldset>
</body>
</html>