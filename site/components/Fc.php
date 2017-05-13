<?php
class Fc
{

    public static function fileConnection()
        {
            $file = ROOT . '/fileStorage.txt';
            $fp = file($file);
            sort($fp);
            return $fp;
        }

    public static function fileConnectForAdd()
    {
        $file = ROOT . '/fileStorage.txt';
        $fp = fopen($file, 'a');
        return $fp;
    }

    public static function fileAddRecord($add)
    {
        echo "<br>Массив передан: <pre>";
        var_dump($add);
        echo "</pre><br>";
        return true;
    }

    public static function getRows()
    {
        $total_rows = count(file(ROOT . '/fileStorage.txt'));
        return $total_rows;
    }

    public static function getPageLimit()
    {
        $total_rows = count(file(ROOT . '/fileStorage.txt'));
        $total_rows /= 6;
        $total_rows = ceil($total_rows);
        return $total_rows;
    }
}