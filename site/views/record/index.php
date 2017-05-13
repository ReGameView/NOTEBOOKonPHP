<html>
<head>
<title>Записная книжка</title>
<link href="/template/css/style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<a href="record">Главное меню</a>
<a href="archive">Добавление записи</a>
<a href="view">Показать все записи</a><br>
<a href="file">Переход на файловое хранилище</a>
<div align="right">
    <?php
    $check = false;
    echo  "<form action=\"/record\" method=\"post\">";
    echo  "</select><br />\n";
    echo  "<input type=\"text\" name=\"search\" value=\"\" placeholder='Поиск' >";
    echo  "<input type=\"submit\" value=\"Поиск\" /><br />";
    echo  "</form>";
    if(!$_POST){
        ;
    }else{
        $check = true;
        $search =  htmlspecialchars($_POST['search']);
        Db::acceptSearch($search);
    }
    ?>
</div>
<h1>Записная книжка</h1>
<fieldset>
<table>
    <tr><th>Имя</th><th>Телефон</th><th>Адрес</th><th>email</th></tr>
<?php
$a = false;
if($check == true):
    echo "<h3>Запрос: $search</h3>";
    $a = Db::acceptSearch($search);
        foreach ($a as $recordItem): ?>
            <tr><th><?php echo $recordItem['name']; ?></th><th><?php echo $recordItem['mobile'];?></th><th><?php echo $recordItem['address']?></th><th><?php echo $recordItem['email']?></th></tr>
    <?php endforeach; endif;
if($check == false)
foreach ($recordList as $recordItem):?>
    <tr><th><?php echo $recordItem['name']; ?></th><th><?php echo $recordItem['mobile'];?></th><th><?php echo $recordItem['address']?></th><th><?php echo $recordItem['email']?></th></tr>
<?php endforeach; ?>
</table>
<?php
if($check == false){
$row = Db::pageRecord();
for($i=0;$i != $row;$i++) {
    $j = $i + 1;
    echo "<a href='$j'>$j</a> ";
}
}
?>
</fieldset>
</body>
</html>