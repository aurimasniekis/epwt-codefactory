<?php

namespace EPWT\CodeFactory\Block\Namespaces;

use EPWT\CodeFactory\Block\BaseBlock;
use EPWT\CodeFactory\Block\BlockInterface;
use EPWT\CodeFactory\Token\NsSeparatorToken;
use EPWT\CodeFactory\Token\StringToken;

/**
 * Class ClassBlock
 * @package EPWT\CodeFactory\Block\Namespaces
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class ClassBlock extends BaseBlock
{
    /**
     * @var string
     */
    protected $class;

    public function __construct($class)
    {
        $this->class = $class;
    }

    public function generate()
    {
        $tokens = [];

        $classParts = explode('\\', $this->class);
        $classPartsCount = count($classParts);

        $i = 1;
        foreach ($classParts as $classPart) {
            $token = new StringToken($classPart);
            $tokens[] = $token;

            if ($i < $classPartsCount) {
                $tokens[] = new NsSeparatorToken();
                $i++;
            }
        }

        return $tokens;
    }
}
