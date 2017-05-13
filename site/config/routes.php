<?php
return array(

    //Work in Record mysql
	'record/([0-9]+)' => 'record/index/$1',
	'record' => 'record/index/1',
    'view' => 'record/view',
    'archive' => 'record/archive',
    '([0-9]+)' => 'record/index/$1',

    //Work in fileStorage
    'file/([0-9]+)' => 'file/index/$1',
    'file' => 'file/index/1',
    'fView' => 'file/view',
    'fArchive' => 'file/archive',
    'file/record' => 'record/index/1',
    '(f[0-9]+)' => 'file/index/$1',
    'search' => 'file/search',
    //404 NOT FOUND
    '(.+)' => 'error/404',
    '' => 'record/index/1',
	);