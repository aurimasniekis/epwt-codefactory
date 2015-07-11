<?php

require_once __DIR__ . '/../vendor/autoload.php';

$tokenizer = new \EPWT\CodeFactory\Tokenizer();

$file = '/Users/gcds/Projects/PHP/Tokenizer.new/src/EPWT/CodeFactory/Tests/Fixtures/CodeSamples/0-sample_tokens.sample';
$file = '/Users/gcds/Projects/PHP/Tokenizer.new/src/EPWT/CodeFactory/Tests/Fixtures/CodeSamples/1-sample_tokens_tabs.sample';

$tokens = $tokenizer->tokenGetAll(file_get_contents($file));

foreach ($tokens as &$token) {
    if (is_array($token)) {
        if (token_name($token[0]) !== 'UNKNOWN') {
            $token[0] = token_name($token[0]);
        }
    }
}

echo json_encode($tokens, JSON_PRETTY_PRINT);
