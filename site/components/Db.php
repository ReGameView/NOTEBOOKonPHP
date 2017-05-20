<?php
define('limit',6);
class Db
{
    /**
     * Выполняет подключение к Базе Данных
     * @return PDO
     */
    public static function getConnection()
		{
			$paramsPath = ROOT . '/config/db_params.php';
			$params = include($paramsPath);


			$dsn = "mysql:host={$params['host']};dbname={$params['dbname']}";
			$db = new PDO($dsn, $params['user'], $params['password']);

			return $db;
		}

    /**
     * Добавление записи в Базу Данных, средствами PDO.
     * @param $add
     */
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

    /**
     * Проверка на обязательное заполнение данных
     * @param $add - Добавленные данные
     * @return bool|int - Номер ошибки или false
     */
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
}