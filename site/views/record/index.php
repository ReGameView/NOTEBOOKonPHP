<html>
<head>
<title>Записная книжка</title>
<!--<link href="/template/css/style.css" rel="stylesheet" type="text/css" media="screen" />-->
    <style>
        tbody tr:hover /* Строка */
        {
            background: #bfbfbf; /* Цвет фона при наведении */
            color: black; /* Цвет текста при наведении */
        }
        tbody td:hover /* Столбец */
        {
            background: white; /* Цвет фона при наведении */
            color: black; /* Цвет текста при наведении */
        }
    </style>
</head>
<body>
<div class="col-md-3">
</div>
<div class="col-md-4">
<h1>Записная книжка</h1>
<fieldset>
<table>
    <tr><th>Имя</th><th>Телефон</th><th>Адрес</th><th>email</th></tr> <tbody>
        <?php
$a = false;
foreach ($recordList as $recordItem):?>
    <tr onmouseenter="anim(event, 'black')" onmouseleave="anim(event, 'white')" id="1">
        <td>
            <?=$recordItem['name']; ?></td><td>
            <?=$recordItem['mobile'];?></td><td>
            <?=$recordItem['address']?></td><td>
            <?=$recordItem['email']?>
        </td>
    </tr>
<?php endforeach; ?>
</tbody>
</table>
<?php
$row = Db::pageRecord();
for($i=0;$i != $row;$i++) {
    $j = $i + 1;
//    echo "<a href='$j'>$j</a> ";
}
?>
</fieldset>
</body>
</html>
</div>
<div class="col-md-4">
</div>
<textarea id="text"></textarea>

