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

        $result = $db->query('SELECT id, name, mobile, address, email FROM test ORDER BY name ASC');

        $i = 0;
        while ($row = $result->fetch()) {
            $recordList[$i]['id'] = $row['id'];
            $recordList[$i]['name'] = $row['name'];
            $recordList[$i]['mobile'] = $row['mobile'];
            $recordList[$i]['address'] = $row['address'];
            $recordList[$i]['email'] = $row['email'];
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
}