<?php

require_once __DIR__ . '/../vendor/autoload.php';

$tokenizer = new \EPWT\CodeFactory\Tokenizer();

$file = '/Users/gcds/Projects/PHP/Tokenizer.new/src/EPWT/CodeFactory/Tests/Fixtures/CodeSamples/0-sample_tokens.sample';
$file = '/Users/gcds/Projects/PHP/Tokenizer.new/src/EPWT/CodeFactory/Tests/Fixtures/CodeSamples/1-sample_tokens_tabs.sample';


//$tokens = $tokenizer->tokenGetAll(file_get_contents($file));
$tokens = $tokenizer->tokenGetAll('<?php
$a = "A";
 ?>');

$tokens = $tokenizer->mapTokens($tokens);

var_dump($tokens);
