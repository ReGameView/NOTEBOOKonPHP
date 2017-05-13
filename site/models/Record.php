<?php

class Record
{
    /**
     * Returns an array of news items
     */
    public static function getRecordList($id)
    {
        $paramsPath = ROOT . '/config/db_params.php';
        $params = include($paramsPath);
        $db = Db::getConnection();
        $recordList = array();
        $page = $id * limit;
        $pageStart = $page - 6;
        $query = "SELECT id, name, mobile, address, email FROM {$params['dbname']} ORDER BY name ASC LIMIT " . $pageStart . "," . limit;
        $result = $db->query($query);
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

    public static function search($search)
    {
        $result = array();
        $connect = Record::getAllRecord();
        echo "<h4>Запрос:</h4>";
        $regular = '/(name|mobile|address|email):(.[^ ]+)/i';
        $a=preg_match_all($regular, $search, $found);
        echo $found[2][0];
        $b = $found[2][0];
        IF ($a != NULL) {

        }else {

        }
    }

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