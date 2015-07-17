<?php

namespace EPWT\CodeFactory;

use EPWT\CodeFactory\Token\CloseTagToken;
use EPWT\CodeFactory\Token\InlineHtmlToken;
use EPWT\CodeFactory\Token\OpenTagToken;
use EPWT\CodeFactory\Token\WhitespaceToken;
use EPWT\CodeFactory\Token\Token;

/**
 * Class TokenWalker
 * @package EPWT\CodeFactory
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class TokenWalker
{
    /**
     * @var bool
     */
    protected $inPhp;

    /**
     * @var SourceCode
     */
    protected $sourceCode;

    public function __construct()
    {
        $this->reset();
    }

    public function reset($sourceCode = null)
    {
        $this->inPhp = false;
        $this->sourceCode = $sourceCode;
    }

    public function walk($sourceCode)
    {
        $this->reset($sourceCode);
        $tokens = $this->getSourceCode()->getTokens();

        foreach ($tokens as $position => $token) {
            if ($token instanceof OpenTagToken) {
                $this->inPhp = true;
            }

            if ($token instanceof CloseTagToken) {
                $this->inPhp = false;
            }

            if ($this->isSkipableToken($token)) {
                continue;
            }

            echo CustomTokens::tokenName($token->getId()) . PHP_EOL;
        }

    }

    public function isSkipableToken(Token $token)
    {
        if (false === $this->inPhp) {
            return true;
        }

        if ($token instanceof WhitespaceToken ||
            $token instanceof InlineHtmlToken ||
            $token instanceof OpenTagToken ||
            $token instanceof CloseTagToken
        ) {
            return true;
        }

        return false;
    }

    /**
     * @return SourceCode
     */
    public function getSourceCode()
    {
        return $this->sourceCode;
    }

    /**
     * @param SourceCode $sourceCode
     *
     * @return $this
     */
    public function setSourceCode($sourceCode)
    {
        $this->sourceCode = $sourceCode;

        return $this;
    }
}
