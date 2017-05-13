<?php
define('limit',6);
class Db
{

    public static function getConnection()
		{
			$paramsPath = ROOT . '/config/db_params.php';
			$params = include($paramsPath);


			$dsn = "mysql:host={$params['host']};dbname={$params['dbname']}";
			$db = new PDO($dsn, $params['user'], $params['password']);

			return $db;
		}

    public static function addRecord($add)
    {
        $paramsPath = ROOT . '/config/db_params.php';
        $params = include($paramsPath);
        $connection = Db::getConnection();
        $a=$connection->prepare("INSERT INTO {$params['dbname']} (name, mobile, address, email) VALUES (:name, :mobile, :address, :email)");
        $a->execute(array(
            'name' => $add['name'],
            'mobile' => $add['mobile'],
            'address' => $add['address'],
            'email' => $add['email'],)
        );
        }

    public static function pageRecord()
    {
        $connection = Db::getConnection();
        $count = $connection->query('SELECT COUNT(*) FROM test');
        $row = $count->fetch();
        $row[0] = $row[0] / limit;
        $page=ceil($row[0]);
        return $page;
        }

    public static function retryAdd($add)
    {
        $connection = Db::getConnection();
        $check = false;
        $retry = $connection->query('SELECT * FROM test');
        while($result = $retry->fetch()){
            if($result['mobile'] == $add['mobile']){
                $check = 2;
            }elseif($result['name'] == $add['name']){
                $check = 1;
            }elseif (($result['name'] == $add['name']) or ($result['mobile'] == $add['mobile'])){
                $check = 3;
            }elseif(empty($add['name'])){
                $check = 4;
            }elseif (empty($add['mobile'])){
                $check = 5;
            }elseif ((empty($add['name']))){
                $check = 6;
            }
        }
        return $check;
    }

    public static function acceptSearch($search)
    {
        $all = array();
        $connect = Db::getConnection();
        $a = $connect->query("SELECT * FROM `test` WHERE `name` LIKE \"%$search%\" OR (`mobile` LIKE \"%$search%\" OR (`address` LIKE \"%$search%\" OR (`email` LIKE \"%$search%\" )))");
        while ($b = $a->fetch()){
        $all[] = $b;}
        return $all;
    }
}