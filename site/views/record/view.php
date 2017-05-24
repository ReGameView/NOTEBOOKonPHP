<?php
/**
 * @var $record RecordController
 * Представления для пользователя. Выводит основную информацию о пользователе
 */
?>
<html>
<head>
    <title>Записная книжка</title>
    <link href="/template/css/style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<h1>Записная книжка</h1>
<fieldset>
    <table>
        <tr><th>Имя</th><th>Телефон</th><th>Адрес</th><th>email</th></tr>
            <tr><th><?= $record['first_name'] . $record['family_name']; ?></th><th>
                    <?= $record['birthday'];?></th><th>
                    <?= $record['address']?></th><th>
                    <?= $record['email']?></th></tr>
    </table>
</fieldset>
</body>
</html>