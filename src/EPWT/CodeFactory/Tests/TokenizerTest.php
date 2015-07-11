<?php

namespace EPWT\CodeFactory\Tests;

use EPWT\CodeFactory\Tokenizer;

class TokenizerTest extends \PHPUnit_Framework_TestCase
{
    protected function getCodeSample($filename)
    {
        return file_get_contents(__DIR__ . '/Fixtures/CodeSamples/' . $filename . '.sample');
    }

    protected function getCodeSampleResult($filename)
    {
        $tokens = json_decode(file_get_contents(__DIR__ . '/Fixtures/CodeSamples/' . $filename . '.result'));

        foreach ($tokens as &$token) {
            if (is_array($token)) {
                if (is_string($token[0])) {
                    $token[0] = constant($token[0]);
                }
            }
        }

        return $tokens;
    }

    public function dataTokenGetAll()
    {
        $out = [];

        $out[] = ['0-sample_tokens'];
        $out[] = ['1-sample_tokens_tabs'];

        return $out;
    }

    /**
     * @param string $name
     *
     * @dataProvider dataTokenGetAll
     */
    public function testTokenGetAll($name)
    {
        $code = $this->getCodeSample($name);
        $expected = $this->getCodeSampleResult($name);

        $tokenizer = new Tokenizer();
        $tokens = $tokenizer->tokenGetAll($code);

        $this->assertEquals($expected, $tokens);
    }
}
