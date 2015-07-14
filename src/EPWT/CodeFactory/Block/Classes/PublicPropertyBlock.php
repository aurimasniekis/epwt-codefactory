<?php

namespace EPWT\CodeFactory\Block\Classes;

use EPWT\CodeFactory\Token\StringToken;

/**
 * Class PublicPropertyBlock
 * @package EPWT\CodeFactory\Block\Classes
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class PublicPropertyBlock extends PropertyBlock
{
    public function __construct($name, $value = null)
    {
        parent::__construct($name, $value);

        $this->type = new StringToken('public');
    }
}
