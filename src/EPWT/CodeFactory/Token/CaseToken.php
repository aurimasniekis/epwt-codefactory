<?php

namespace EPWT\CodeFactory\Token;

/**
 * Class CaseToken
 * @package EPWT\CodeFactory\Token
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class CaseToken extends Token
{
    /**
     * @param mixed|null $value
     * @param int|null $lineNumber
     */
    public function __construct($value = 'case', $lineNumber = null)
    {
        parent::__construct(T_CASE, $value, $lineNumber);
    }
}
