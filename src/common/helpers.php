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

function html_tag($tag, $attr = [], $content = '') {
    static $selfColsedTags = [
        'area',
        'base',
        'br',
        'col',
        'embed',
        'hr',
        'img',
        'input',
        'keygen',
        'link',
        'meta',
        'param',
        'source',
        'track',
        'wbr',
    ];
    $closeTag = in_array($selfColsedTags, $tag) ? '' : "</{$tag}>";
    $attrStr = '';
    foreach ($attr as $key => $val) {
        $attrStr .= is_null($val) ? '' : " {$key}=\"{$val}\"";
    }

    return '<'.$tag.$attrStr.($closeTag ? '>' : '/>').$content.$closeTag;
}

function html_ctag($tag, $class, $attr = [], $content = '') {
    $attr['class'] = $class . (isset($attr['class']) ? ' '.$attr['class']: '');
    return html_tag($tag, $attr, $content);
}

function html_input($type, $name = null, $value = '', $extra = []) {
    return html_tag('input', array_merge(compact('type', 'name', 'value'), $extra));
}

function html_select($name, $value, $options, $extra = []) {
    $content = '';
    foreach ($options as $optVal) {
        $content .= html_tag('option', [
            'value' => $optVal,
            'selected' => $optVal === $value ? 'selected' : null,
        ], $optVal);
    }
    return html_tag('select', array_merge(compact('name'), $extra), $content);
}

function html_btn($action, $content, $extra = []) {
    return html_ctag('a', 'btn', $extra, $content);
}