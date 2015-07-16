<?php

namespace EPWT\CodeFactory;

/**
 * Class SourceCode
 * @package EPWT\CodeFactory
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class SourceCode
{
    /**
     * @var File
     */
    protected $file;

    /**
     * @var Token\[]
     */
    protected $tokens;

    /**
     * @var Scope
     */
    protected $scope;

    public function __construct($tokens = [])
    {
        $this->tokens = $tokens;
    }

    /**
     * @return Scope
     */
    public function getScope()
    {
        if ($this->scope) {
            return $this->scope;
        }

        $this->scope = new Scope();

        return $this->scope;
    }

    /**
     * @return File
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * @param File $file
     *
     * @return $this
     */
    public function setFile($file)
    {
        $this->file = $file;

        return $this;
    }
}
