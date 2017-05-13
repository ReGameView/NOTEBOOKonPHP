<html>
<head>
    <title>Записная книжка</title>
    <link href="/template/css/archive.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<a href="file">Главное меню</a>
<a href="fView">Показать все записи</a>
<form action="fArchive" method="post" name="forma">
    <h2>Добавление записи в файловое хранилище</h2>
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
        $error = File::addCheck($add);
        if ($error > 0){
            $errorText = File::errorFile($error);
            echo "<script>alert('Ошибка,{$errorText}')</script>";
        }else{
            File::addRecord($add);
        }
    }
    ?>
</form>
</body>
</html>