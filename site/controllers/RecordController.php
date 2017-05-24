<?php
/**
 * Основной контроллер
 */
include_once ROOT. '/models/Record.php';

class RecordController {
    /**
     * Вывод всех записей в Базе Данных
     * @return bool
     */
	public function actionIndex()
	{
		$recordList = array();
		$recordList = Record::getAllRecord();
        require_once(ROOT . '/views/record/index.php');
		return true;
	}

    /**
     * Просмотр конкретного пользователя
     * @return bool
     */
	public function actionView($id)
    {
        $record = array();
        $record = Record::getRecord($id);
        require_once(ROOT . '/views/record/view.php');
        return true;
    }

    /**
     * Добавление в базу данных
     * @return bool
     */
    public function actionArchive()//$add)
    {
        $recordList = array();
        require_once (ROOT. '/views/record/archive.php');
        return true;
    }
}

