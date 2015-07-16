<?php

namespace EPWT\CodeFactory;

/**
 * Class CodeFactory
 * @package EPWT\CodeFactory
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class CodeFactory
{
    /**
     * @var Tokenizer
     */
    protected $tokenizer;

    /**
     * @param string $file
     *
     * @return File
     */
    public function parseFile($file)
    {
        $file = new File($file);

        $tokens = $this->getTokenizer()->tokenize(
            $file->getContent()
        );

        $sourceCode = new SourceCode($tokens);

        $file->setSourceCode($sourceCode);
        $sourceCode->setFile($file);

        return $sourceCode;
    }

    /**
     * @param string $codeBlock
     *
     * @return SourceCode
     */
    public function parseCodeBlock($codeBlock)
    {
        $tokens = $this->getTokenizer()->tokenize($codeBlock);

        return new SourceCode($tokens);
    }

    /**
     * @return Tokenizer
     */
    public function getTokenizer()
    {
        if ($this->tokenizer) {
            return $this->tokenizer;
        }

        $this->tokenizer = new Tokenizer();

        return $this->tokenizer;
    }
}
