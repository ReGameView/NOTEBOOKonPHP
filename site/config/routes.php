<?php
return array(

    //Work in Record mysql
    'index' => 'views/index',
	'record/([0-9]+)' => 'record/index/$1',
	'record' => 'record/index/1',
    'view' => 'record/view',
    'archive' => 'record/archive',
    '([0-9]+)' => 'record/index/$1',
    //404 NOT FOUND
    '(.+)' => 'error/404',
    '' => 'record/index/1',
	);