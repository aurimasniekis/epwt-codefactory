<?php

namespace EPWT\CodeFactory\Token;

/**
 * Class Token
 * @package EPWT\CodeFactory\Token
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class Token
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $content;

    /**
     * @var int
     */
    protected $lineNumber;

    /**
     * @param int|null $id
     * @param string $content
     * @param int|null $lineNumber
     */
    public function __construct($id = null, $content, $lineNumber = null)
    {
        $this->id = $id;
        $this->content = $content;
        $this->lineNumber = $lineNumber;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getContent()
    {
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
     * @return int
     */
    public function getLineNumber()
    {
        return $this->lineNumber;
    }

    /**
     * @param int $lineNumber
     *
     * @return $this
     */
    public function setLineNumber($lineNumber)
    {
        $this->lineNumber = $lineNumber;

        return $this;
    }
}
