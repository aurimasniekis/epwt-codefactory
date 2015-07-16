<?php

namespace EPWT\CodeFactory;

/**
 * Class File
 * @package EPWT\CodeFactory
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class File
{
    /**
     * @var string
     */
    protected $path;

    /**
     * @var string
     */
    protected $content;

    /**
     * @var SourceCode
     */
    protected $sourceCode;

    /**
     * @param string $path
     */
    public function __construct($path = null)
    {
        $this->path = $path;
    }

    /**
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @param string $path
     *
     * @return $this
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    public function getContent()
    {
        if ($this->content) {
            return $this->content;
        }

        $this->content = file_get_contents($this->getPath());

        return $this->content;
    }

    /**
     * @param string $content
     *
     * @return $this
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
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
