<?php

define('_HELPERS_LOADED', true);


function dd() {
    foreach (func_get_args() as $val) {
        echo '<pre style="font:11px/12px Monaco,monospace;background:#333;color:#FFF;padding:10px;margin:5px 0">'
            . print_r($val instanceof Generator ? iterator_to_array($val) : $val, true)
            . '</pre>';
    }
    exit;
}
