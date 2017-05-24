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

			$dsn = "mysql:host={$params['host']};dbname={$params['dbname']};'utf8'";
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
        $a=$connection->prepare("INSERT INTO {$params['dbname']} (id, first_name, family_name, birthday, mobile, address, work, web-site) VALUES (:id, :first_name, :family_name, :birthday, :mobile, :address, :work, :web-site)");
        $a->execute(array(
            'id' => $add['id'],
            'first_name' => $add['first_name'],
            'family_name' => $add['family_name'],
            'birthday' => $add['birthday'],
            'mobile' => $add['mobile'],
            'addresss' => $add['addresss'],
            'work' => $add['work'],
            'web-site' => $add['web-site'],
                ));
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