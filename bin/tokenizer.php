<?php

require_once __DIR__ . '/../vendor/autoload.php';

$tokenizer = new \EPWT\CodeFactory\Tokenizer();

$file = '/Users/gcds/Projects/PHP/Tokenizer.new/src/EPWT/CodeFactory/Tests/Fixtures/CodeSamples/0-sample_tokens.sample';
$file = '/Users/gcds/Projects/PHP/Tokenizer.new/src/EPWT/CodeFactory/Tests/Fixtures/CodeSamples/1-sample_tokens_tabs.sample';


//$tokens = $tokenizer->tokenGetAll(file_get_contents($file));
$tokens = $tokenizer->tokenGetAll('<?php use A\B\C as D; ?>');

$tokens = $tokenizer->mapTokens($tokens);
//
//var_dump($tokens);

$namespace = new EPWT\CodeFactory\Block\Namespaces\NamespaceBlock('Acme\\Demo');

$use1 = new \EPWT\CodeFactory\Block\Namespaces\UseBlock('Acme\\Demo\\Entity\\First');
$use2 = new \EPWT\CodeFactory\Block\Namespaces\UseBlock('Acme\\Demo\\Entity\\Second', 'Third');

$file = new \EPWT\CodeFactory\Block\FileBlock();
$file->setNamespace($namespace);

$file->addUse($use1);
$file->addUse($use2);

$class = new \EPWT\CodeFactory\Block\ClassBlock('Demo');
$class->setExtends(new \EPWT\CodeFactory\Block\Namespaces\ClassBlock('Agurkuai'));
$class->addImplements(new \EPWT\CodeFactory\Block\Namespaces\ClassBlock('Ab'));
$class->addImplements(new \EPWT\CodeFactory\Block\Namespaces\ClassBlock('Ab'));

$class->addConstants('FOO', '"BAR"');
$class->addConstants('BAR', '\'FOO\'');

$class->addProperty(new \EPWT\CodeFactory\Block\Classes\PublicPropertyBlock('a'));
$class->addProperty(new \EPWT\CodeFactory\Block\Classes\PrivatePropertyBlock('b'));
$class->addProperty(new \EPWT\CodeFactory\Block\Classes\ProtectedPropertyBlock('c'));

$file->add($class);

$tokens = $file->generate();

foreach ($tokens as $token) {
    echo $token->getContent();
}


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

