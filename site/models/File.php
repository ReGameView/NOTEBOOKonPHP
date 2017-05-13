<?php

class File
{
    public static function getFileList()
    {
        $file = array ();
        $fp = Fc::fileConnection();
        $name = $address = $email = $mobile = array();
        $page = File::getPage();
        if($page == NULL){
            $i = 0;
        }else{
            $i = ($page-1) * limit;
        }
        $count = count($fp);
        $page = $i + 6;
        for(;$i != $page;$i++)
        {
            if($i == $count) break;
            $a = strpos($fp[$i], ';');
            $c = substr($fp[$i], 0, $a);
            $name = $c;
            if(empty($name)) break;
            $b = $a+1;
            $a = strpos($fp[$i], ';;');
            $c = substr($fp[$i], $b, ($a-$b));
            $mobile = $c;
            $b = $a+2;
            $a = strpos($fp[$i], ';;;');
            $c = substr($fp[$i], $b , ($a-$b));
            $address = $c;
            $b = $a+3;
            $a = strpos($fp[$i], ";;;;");
            $c = substr($fp[$i], $b , ($a-$b));
            $email = $c;
            $fileList= array(
                'name' => $name,
                'mobile' => $mobile,
                'address' => $address,
                'email' => $email,
            );
            $file[] = $fileList;
            if(($count-1) == $i) break;
        }
        return $file;
    }

    public static function getAllFile()
    {
        $fp = Fc::fileConnection();
        $fileList = $name = $address = $email = $mobile = $file =array();
        $i=0;
        $rows = Fc::getRows();
        for($i=0;$i!=$rows;$i++) {
            $a = strpos($fp[$i], ';');
            $c = substr($fp[$i], 0, $a);
            $name[$i] = $c;
            $b = $a+1;
            $a = strpos($fp[$i], ';;');
            $c = substr($fp[$i], $b, ($a-$b));
            $mobile[$i] = $c;
            $b = $a+2;
            $a = strpos($fp[$i], ';;;');
            $c = substr($fp[$i], $b , ($a-$b));
            $address[$i] = $c;
            $b = $a+3;
            $a = strpos($fp[$i], ";;;;");
            $c = substr($fp[$i], $b , ($a-$b));
            $email[$i] = $c;
            $fileList= array(
                'name' => $name[$i],
                'mobile' => $mobile[$i],
                'address' => $address[$i],
                'email' => $email[$i],
            );
            $file[] = $fileList;

        }
        return $file;
    }

    public static function search()
    {
        $search = $_POST['search'];
        $result = array();
        $connect = File::getAllFile();
        $rows = Fc::getRows();
        $regular = '/(name|mobile|address|email):(.[^;]+)/i';
        if (preg_match_all($regular,$search,$array)){ //Регулярка

            foreach($connect as $item){
                if(empty($array[2][0]) == 0) {
                    $check1 = strripos($item[$array[1][0]], $array[2][0]);
                        if($check1 == true) {
                        }
                } else {
                    $check1 = false;
                }
                if(empty($array[2][1]) == 0) {
                    $check2 = strripos($item[$array[1][1]], $array[2][1]);
                } else {
                    $check2 = false;
                }
                if(empty($array[2][2]) == 0) {
                    $check3 = strripos($item[$array[1][2]], $array[2][2]);
                } else {
                    $check3 = false;
                }
                if(empty($array[2][3]) == 0) {
                    $check4 = strripos($item[$array[1][3]], $array[2][3]);
                } else {
                    $check4 = false;
                }
            if(($check1 !== false) or ($check2 !== false) or ($check3 !== false) or ($check4 !== false)) {
                    $result[] = $item;
                }
            }
        } else { //Обычный поиск
            for($i=0;$i != $rows; $i++){
                $check1 = strripos($connect[$i]['name'],$search);
                $check2 = strripos($connect[$i]['mobile'],$search);
                $check3 = strripos($connect[$i]['address'],$search);
                $check4 = strripos($connect[$i]['email'],$search);
                if((!($check1 === false))or(!($check2 === false))or(!($check3 === false))or(!($check4 === false))) {
                    $result[] = ($connect[$i]);

                }
            }
        }
        return $result;
    }


    public static function getPage()
    {
        if(isset($_GET['page'])) {
            $page = $_GET['page'];;
        }else {
            $page = NULL;
        }
        return $page;
    }

    public static function addCheck($add)
    {
        $check = 0;
        $connection = File::getAllFile();
        foreach ($connection as $item) {
            if ((empty($item['name']) == true) and (empty($item['mobile']) == true)) {
                $check = 6;
                }elseif (($item['name'] == $add['name']) or ($item['mobile'] == $add['mobile'])) {
                    $check = 3;
                } elseif ($item['name'] == $add['name']) {
                    $check = 1;
                } elseif ($item['mobile'] == $add['mobile']) {
                    $check = 2;
                }elseif (empty($add['name'] == true)) {
                $check = 4;
                } elseif (empty($add['mobile'] == true)) {
                $check = 5;
            }
            return $check;
        }
    }

    public static function addRecord($add){
        $name = strip_tags(trim($add['name']));
        $mobile = strip_tags(trim($add['mobile']));
        $address = strip_tags(trim($add['address']));
        $email = strip_tags(trim($add['email']));
        $all = $name . "; " . $mobile . ";; " . $address . ";;; " . $email . ";;;;\n";
        $fp = Fc::fileConnectForAdd();
        fwrite($fp, $all);
        return true;
    }

    public static function errorFile($id)
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