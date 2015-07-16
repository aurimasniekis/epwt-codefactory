<?php

require_once __DIR__ . '/../vendor/autoload.php';

$tokenizer = new \EPWT\CodeFactory\Tokenizer();

$file = '/Users/gcds/Projects/PHP/Tokenizer.new/src/EPWT/CodeFactory/Tests/Fixtures/CodeSamples/0-sample_tokens.sample';
$file = '/Users/gcds/Projects/PHP/Tokenizer.new/src/EPWT/CodeFactory/Tests/Fixtures/CodeSamples/1-sample_tokens_tabs.sample';


//$tokens = $tokenizer->tokenGetAll(file_get_contents($file));
$tokens = $tokenizer->tokenGetAll('Foobar <?php use A\B\C as D; >');

$tokens = $tokenizer->mapTokens($tokens);

var_dump($tokens);


//echo file_get_contents($file);
//
//foreach ($tokens as &$token) {
//    if ($token instanceof \EPWT\CodeFactory\Token\VariableToken) {
//        $token = new \EPWT\CodeFactory\Token\ConstantEncapsedStringToken('\'Hello world\'', $token->getLineNumber());
//    }
//
//    if ($token instanceof \EPWT\CodeFactory\Token\StringToken) {
//        $token->setContent('Haha');
//    }
//}
//
//
//echo '==========================' . PHP_EOL;
//
//$generator = new \EPWT\CodeFactory\Generator();
//echo $generator->generateFromTokens($tokens);

//foreach ($tokens as $token) {
//    echo \EPWT\CodeFactory\CustomTokens::tokenName($token->getId()) . PHP_EOL;
//    var_dump($token->getContent());
//}


//foreach ($tokens as &$token) {
//    if (is_array($token)) {
//        if (token_name($token[0]) !== 'UNKNOWN') {
//            $token[0] = token_name($token[0]);
//        }
//    }
//}

//echo json_encode($tokens, JSON_PRETTY_PRINT);

