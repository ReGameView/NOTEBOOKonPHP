<?php
/**
 * Представление для пользователя добавление записи
 */
?>
<html>
<head>
    <title>Записная книжка</title>
    <link href="/template/css/archive.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<a href="record">Главное меню</a>
<a href="view">Показать все записи</a>
<form action="archive" method="post" name="forma">
    <fieldset>
        <label for="name">Имя:</label><br/>
        <input type="text" name="name" size="20"><br/>
        <label for="mobile">Телефон:</label><br/>
        <input type="text" name="mobile" size="20"><br/>
        <label for="address">Адрес:</label><br/>
        <input type="text" name="address" size="20"><br/>
        <label for="email">email:</label><br/>
        <input name="email" type="text" value="" size="20">
    </fieldset>
    <br/>
    <fieldset>
        <input id="submit" type="submit" value="Отправить данные"><br/>
    </fieldset>
    <?php
    if ( count($_POST) > 0 ) {
        $add = array();
        $add = array(
            'name' => htmlspecialchars($_POST['name']),
            'mobile' => htmlspecialchars($_POST['mobile']),
            'address' => htmlspecialchars($_POST['address']),
            'email' => htmlspecialchars($_POST['email']),
        );
        $error = Db::retryAdd($add);
        if($error > 0) {
            $errorText = Record::errorRecord($error);
            echo "<script>alert('Ошибка,{$errorText}')</script>";
        }else{
            Db::addRecord($add);
        }

    }
    ?>
</form>
</body>
</html>