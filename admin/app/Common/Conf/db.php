<?php  //
return [
	'DB_TYPE'               => 'mysqli',
    'DB_HOST'               => '127.0.0.1',
    'DB_NAME'               => 'php85com',//数据库名字
    'DB_USER'               => 'root',//数据用户名
    'DB_PWD'                => 'root',//数据库密码
    'DB_PREFIX'             => 'caipiao_',
    'DB_PORT'               => '3306',
	'DB_DEBUG'              => false,
	'DB_PARAMS'             => [\PDO::ATTR_CASE => \PDO::CASE_NATURAL],
];