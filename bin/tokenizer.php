<?php

require_once __DIR__ . '/../vendor/autoload.php';

$file = '/Users/gcds/Projects/PHP/Tokenizer.new/src/EPWT/CodeFactory/Tests/Fixtures/CodeSamples/0-sample_tokens.sample';
//$file = '/Users/gcds/Projects/PHP/Tokenizer.new/src/EPWT/CodeFactory/Tests/Fixtures/CodeSamples/1-sample_tokens_tabs.sample';

$codeFactory = new \EPWT\CodeFactory\CodeFactory();
$sourceCode = $codeFactory->parseFile($file);

$tokenWalker = new \EPWT\CodeFactory\TokenWalker();
$tokenWalker->walk($sourceCode);
