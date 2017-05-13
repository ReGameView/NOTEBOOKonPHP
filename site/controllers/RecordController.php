<?php

include_once ROOT. '/models/Record.php';

class RecordController {

	public function actionIndex($id)
	{
		$recordList = array();
		$recordList = Record::getRecordList($id);
        require_once(ROOT . '/views/record/index.php');
		return true;
	}

	public function actionView()
    {
        $recordList = array();
        $recordList = Record::getAllRecord();
        require_once(ROOT . '/views/record/view.php');
        return true;
    }

    public function actionArchive()//$add)
    {
        $recordList = array();
        require_once (ROOT. '/views/record/archive.php');
        return true;
    }
}

