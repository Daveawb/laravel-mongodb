<?php

return [

    'connections' => [

        'mongodb' => [
            'name'       => 'mongodb',
            'driver'     => 'mongodb',
            'host'       => 'lmongo',
            'database'   => 'unittest',
        ],

        'mysql' => [
            'driver'    => 'mysql',
            'host'      => 'lmysql',
            'port'      => 3306,
            'database'  => 'unittest',
            'username'  => 'docker',
            'password'  => 'secret',
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
        ],
    ],

];
