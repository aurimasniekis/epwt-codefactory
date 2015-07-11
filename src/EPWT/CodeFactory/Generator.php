<?php

namespace EPWT\CodeFactory;

use EPWT\CodeFactory\Token\Token;

/**
 * Class Generator
 * @package EPWT\CodeFactory
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class Generator
{
    /**
     * @param Token[] $tokens
     *
     * @return string
     */
    public function generateFromTokens(array $tokens)
    {
        $code = '';

        foreach ($tokens as $token) {
            $code .= $token->getContent();
        }

        return $code;
    }
}
