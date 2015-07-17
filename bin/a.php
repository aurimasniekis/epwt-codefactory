<?php

require_once __DIR__ . '/../vendor/autoload.php';

//var_dump(\EPWT\CodeFactory\Element\UseElement::fromString('Agurku\\Laukas', 'Agurkinis'));

//var_dump(\EPWT\CodeFactory\Element\UseElement::fromTokens(
//    [
//        new \EPWT\CodeFactory\Token\UseToken(),
//        new \EPWT\CodeFactory\Token\WhitespaceToken(),
//        new \EPWT\CodeFactory\Token\StringToken('Agurku'),
//        new \EPWT\CodeFactory\Token\NsSeparatorToken(),
//        new \EPWT\CodeFactory\Token\StringToken('Laukas'),
//        new \EPWT\CodeFactory\Token\WhitespaceToken(),
//        new \EPWT\CodeFactory\Token\AsToken(),
//        new \EPWT\CodeFactory\Token\WhitespaceToken(),
//        new \EPWT\CodeFactory\Token\StringToken('Agurkinis'),
//        new \EPWT\CodeFactory\Token\SemicolonToken()
//    ]
//));

$tokens = [
    new \EPWT\CodeFactory\Token\UseToken(),
    new \EPWT\CodeFactory\Token\WhitespaceToken(),
    new \EPWT\CodeFactory\Token\StringToken('Agurku'),
    new \EPWT\CodeFactory\Token\NsSeparatorToken(),
    new \EPWT\CodeFactory\Token\StringToken('Laukas'),
    new \EPWT\CodeFactory\Token\WhitespaceToken(),
    new \EPWT\CodeFactory\Token\AsToken(),
    new \EPWT\CodeFactory\Token\WhitespaceToken(),
    new \EPWT\CodeFactory\Token\StringToken('Agurkinis'),
    new \EPWT\CodeFactory\Token\SemicolonToken()
];

$sourceCode = new \EPWT\CodeFactory\SourceCodeTokens($tokens);

var_dump(\EPWT\CodeFactory\Element\UseElement::fromWalker($sourceCode));
