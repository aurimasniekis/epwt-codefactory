<?php

namespace EPWT\CodeFactory\Tests;

use EPWT\CodeFactory\Generator;
use EPWT\CodeFactory\Tokenizer;

class GeneratorTest extends \PHPUnit_Framework_TestCase
{
    protected function getCodeSample($filename)
    {
        return file_get_contents(__DIR__ . '/Fixtures/CodeSamples/' . $filename . '.sample');
    }

    public function dataGenerateFromTokens()
    {
        $out = [];

        $out[] = ['0-sample_tokens'];
        $out[] = ['1-sample_tokens_tabs'];

        return $out;
    }

    /**
     * @param string $name
     *
     * @dataProvider dataGenerateFromTokens
     */
    public function testGenerateFromTokens($name)
    {
        $code = $this->getCodeSample($name);

        $tokenizer = new Tokenizer();
        $tokens = $tokenizer->tokenGetAll($code);
        $tokens = $tokenizer->mapTokens($tokens);

        $generator = new Generator();
        $result = $generator->generateFromTokens($tokens);

        $this->assertEquals($code, $result);
    }
}
