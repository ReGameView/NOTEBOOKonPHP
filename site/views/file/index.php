<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="/template/css/style.css" rel="stylesheet" type="text/css" media="screen" />
    <title>Записная книжка</title>
</head>
<body>
    <a href="/file">Главное меню</a><br>
    <a href="/fArchive">Добавить новую запись</a><br>
    <a href="/fView">Все записи в книжке</a><br>
    <a href="/record">Переход на mysql</a>
<div align="right">
        <?php
        if(!$_POST){
            $a = 1;
            echo  "<form action=\"/search\" method=\"post\">";
            echo  "</select><br />\n";
            echo  "<input type=\"text\" name=\"search\" value=\"\" placeholder='Поиск' >";
            echo  "<input type=\"submit\" value=\"Поиск\" /><br />";
            echo  "</form>"; }else{
            $search =  htmlspecialchars($_POST['search']);
            Db::acceptSearch($search);
        }
        ?>
</div>
</fieldset>
<br>
<h1>Файловое хранилище<br>
    Ваши записи</h1>
<fieldset>
<table> <?php if($_POST){
    echo "Запрос: ",$search,"<br>";
    }?>
    <tr><th>Имя</th><th>Телефон</th><th>Адрес</th><th>email</th></tr>
    <?php
$file = File::getFileList($page);
foreach($file as $fileItem):?>
<tr><th><?php echo $fileItem['name']; ?></th><th><?php echo $fileItem['mobile'];?></th><th><?php echo $fileItem['address']?></th><th><?php echo $fileItem['email']?></th></tr>
<?php endforeach;
$row = Fc::getPageLimit();
for($i=0;$i != $row;$i++) {
    $j = $i + 1;
    echo "<a href='/file?page=$j'> $j </a> "; }
?>
</table>
</fieldset>
</body>
</html>