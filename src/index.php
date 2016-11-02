<?php

if (!defined('_HELPERS_LOADED')) {
    require_once __DIR__.'/common/helpers.php';
}

$config = (object)[
    'pdo' => [
        'username'   => 'root',
        'password'   => '123098',
        'dsn'        => 'mysql:dbname=medpred;port=3306;charset=UTF8;',
        'options' => [],
    ],
];


// $df = new DbFrep\Application($username, $password, $engine, $dbConfig);

// if ($find = request('find')) {
//     $result = $df->find($find);
//     dd($result);
// }


?><!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>DBFRep</title>
    <link href="data:image/x-icon;base64,AAABAAEAEBAAAAAAAABoBQAAFgAAACgAAAAQAAAAIAAAAAEACAAAAAAAAAEAAAAAAAAAAAAAAAEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAP//AAD8fwAA/H8AAPxjAAD/4wAA/+MAAMY/AADGPwAAxjEAAP/xAAD/8QAA4x8AAOMfAADjHwAA//8AAP//AAA=" rel="icon" type="image/x-icon">
    <link rel="stylesheet" href="./styles/app.css" media="screen" title="no title">
</head>
<body>

<div class="container">

    <section class="settings">
        <div class="panel">
            <div class="panel-heading">
                Connect to DB
                <div class="pull-right">
                    <a href="#" class="btn active">Advanced</a>
                    <a href="#" class="btn">Reset</a>
                    <a href="#" class="btn">Test</a>
                </div>
            </div>
            <div class="panel-form gs">
                <div class='col-4'>
                    <label>Username:</label>
                    <?=html_input('text', 'username') ?>
                </div>
                <div class='col-4'>
                    <label>Password:</label>
                    <?=html_input('password', 'password') ?>
                </div>
                <div class='col-4'>
                    <label>Database:</label>
                    <?=html_input('text', 'database') ?>
                </div>
            </div>
            <div class="panel-form gs panel-alt">
                <div class='col-4'>
                    <label>Charset:</label>
                    <?=html_input('text', 'charset', 'UTF8', ['size'=>16]) ?>
                </div>
                <div class='col-4'>
                    <label>Host:</label>
                    <?=html_input('text', 'host', 'localhost') ?>
                </div>
                <div class='col-4'>
                    <label>Port:</label>
                    <?=html_input('text', 'port', '3306') ?>
                </div>
                <div class='col-4'>
                    <label>Driver:</label>
                    <span class="select"><?=html_select('driver', 'mysql', pdo_drivers()) ?></span>
                </div>
                <div class='col-8'>
                    <label>Unix socket:</label>
                    <?=html_input('text', 'unix_socket') ?>
                </div>
            </div>
        </div>
        <div class="panel">
            <div class="panel-heading">Filter Tables</div>
        </div>
        <div class="panel">
            <div class="panel-heading">Filter Columns</div>
        </div>
        <div class="panel">
            <div class="panel-heading">Filter data</div>
        </div>
        <div class="panel">
            <div class="panel-heading">Find &amp; Replace</div>
        </div>

        <div class="panel">
            <div class="panel-heading">Panle heading</div>

            <div class="panel-form">
                <input type="text" placeholder="Panel input">
                <span class="btn">Button</span>
                <div class="btn-group">
                    <span class="btn active">A</span>
                    <span class="btn">B</span>
                    <span class="btn">C</span>
                </div>
            </div>
        </div>
    </section>

    <section class="result">

    </section>

</div>

<script src="../bower_components/zepto/zepto.min.js"></script>
<script src="../bower_components/underscore/underscore-min.js"></script>
<script src="../bower_components/backbone/backbone-min.js"></script>
<script src="./js/app.js"></script>
</body>
</html>