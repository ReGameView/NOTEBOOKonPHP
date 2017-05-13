<?php

include_once ROOT. '/models/File.php';

class FileController
{
    public function actionIndex($page)
    {
        $fileList = array();
        $fileList = File::getFileList($page);
        require_once (ROOT. '/views/file/index.php');
        return true;
    }

    public function actionView()
    {
        $fileList = array();
        $fileList = File::getAllFile();
        require_once (ROOT . '/views/file/view.php');
        return true;
    }

    public function actionArchive()
    {
        $fileList = array();

        require_once (ROOT . '/views/file/archive.php');
        return true;
    }

    public function actionSearch()
    {
        $fileList = array();
        $fileList = File::search();
        require_once (ROOT. '/views/file/search.php');
        return true;
    }

}