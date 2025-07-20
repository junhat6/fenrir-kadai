<?php
function isValid($s) {
    $stack = [];
    $pairs = [
        ')' => '(',
        ']' => '[',
        '}' => '{',
    ];
    
    $len = strlen($s);
    for ($i = 0; $i < $len; $i++) {
        $ch = $s[$i];
        
        // 開き括弧ならスタックに積む
        if ($ch === '(' || $ch === '[' || $ch === '{') {
            array_push($stack, $ch);
        }
        // 閉じ括弧なら直前の開き括弧と対応しているかチェック
        elseif (isset($pairs[$ch])) {
            if (empty($stack) || array_pop($stack) !== $pairs[$ch]) {
                return false;
            }
        }
    }
    
    return empty($stack);
}

// テスト
$s = '()';
var_dump(isValid($s)); // true

$s = '([]){}';
var_dump(isValid($s)); // true

$s = '({)}';
var_dump(isValid($s)); // false

// 追加のテストケース
// 例外文字列のときはtrueになってしまう
$s = '';
var_dump(isValid($s)); // true

$s = '({[';
var_dump(isValid($s)); // false

$s = '}])';
var_dump(isValid($s)); // false
?>
