<?php

namespace EPWT\CodeFactory\Token;

/**
 * Class EndHereDocToken
 * @package EPWT\CodeFactory\Token
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class EndHereDocToken extends Token
{
    /**
     * @param mixed|null $value
     * @param int|null $lineNumber
     */
    public function __construct($value = null, $lineNumber = null)
    {
        parent::__construct(T_END_HEREDOC, $value, $lineNumber);
    }
}
