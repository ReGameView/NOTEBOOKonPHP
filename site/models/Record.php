<?php

class Record
{
    /**
     * Запрос о выводе всех данных в Базе Данных
     * @return array
     */
    public static function getAllRecord()
    {
        $db = Db::getConnection();
        $recordList = array();

        $result = $db->query('SELECT * FROM notepad1.tbl_main ORDER BY first_name ASC');

        $i = 0;
        while ($row = $result->fetch()) {
            $recordList[$i]['id'] = $row['id'];
            $recordList[$i]['first_name'] = $row['first_name'];
            $recordList[$i]['family_name'] = $row['family_name'];
            $recordList[$i]['birthday'] = $row['birthday'];
            $recordList[$i]['mobile'] = $row['mobile'];
            $recordList[$i]['address'] = $row['address'];
            $recordList[$i]['work'] = $row['work'];
            $recordList[$i]['web-site'] = $row['web-site'];
            $i++;
        }

        return $recordList;

    }

    /**
     * Ошибка при добавление в Базу Данных пользователя (Повтор введёных данных)
     * @param $id
     * @return bool|string
     */
    public static function errorRecord($id)
    {
        $result = false;
        switch($id){
            case 1: $result = "Это имя уже есть в базе"; break;
            case 2: $result = "Этот телефон уже есть в базе"; break;
            case 3: $result = "Этот телефон и имя уже есть в базе"; break;
            case 4: $result = "Имя обязательно к вводу"; break;
            case 5: $result = "Телефон обязателен к вводу"; break;
            case 6: $result = "Имя и телефон обязателен к вводу"; break;
        }
        return $result;
    }

    public static function getRecord($id)
    {
        $db = Db::getConnection();
        $recordList = array();
        $result = $db->query('SELECT * FROM tbl_main WHERE id = '.$id);
        var_dump($result->fetch()); exit; die();
        while ($row = $result->fetch()) {
            $recordList['id'] = $row['id'];
            $recordList['first_name'] = $row['first_name'];
            $recordList['family_name'] = $row['family_name'];
            $recordList['birthday'] = $row['birthday'];
            $recordList['mobile'] = $row['mobile'];
            $recordList['address'] = $row['address'];
            $recordList['work'] = $row['work'];
            $recordList['web-site'] = $row['web-site'];
        }
        return $recordList;
    }
}