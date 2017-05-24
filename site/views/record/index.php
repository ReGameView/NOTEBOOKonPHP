<?php
/**
 * Представление для пользователя для вывода главного меню
 */
?>
<html>
<head>
<title>Записная книжка</title>
<link href="/template/css/style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<SCRIPT>
alert("Сегодня у пользователя Linux День рождения.");
</script>
<div class="col-md-2">
</div>
<div class="col-md-10">
<h1>Записная книжка</h1>
<fieldset>
<table>
    <tr><th>Имя</th><th>Телефон</th><th>Адрес</th><th>email</th><th>Действия</th></th></tr> <tbody>
        <?php
$a = false;
foreach ($recordList as $recordItem):?>
    <tr>
        <td>
            <a href="<?=$recordItem['id']?>"><?=$recordItem['first_name'] . ' ' . $recordItem['family_name']; ?></a></td><td>
            <?=$recordItem['mobile'];?></td><td>
            <?=$recordItem['address']?></td><td>
            <a href="mailto:<?=$recordItem['web-site']?>"><?=$recordItem['web-site']?></a></td><td>
            <button id="message" class='glyphicon glyphicon-envelope'>
            </button> <!--  Первая кнопка. Просмотр личной информации  -->
            <button id="button2" class='glyphicon glyphicon-level-up'>
            </button> <!--  Вторая кнопка. Просмотр друзей  -->
            <button id="button2" class='glyphicon glyphicon-remove'>
            </button> <!--  Третья кнопка. Удалить запись  -->
        </td>
    </tr>
<?php endforeach; ?>
    <script>
        document.getElementById('message').onclick = function() {
            alert('Спасибо')
        }
    </script>
</tbody>
</table>
</fieldset>
    <br>
</body>
</html>
