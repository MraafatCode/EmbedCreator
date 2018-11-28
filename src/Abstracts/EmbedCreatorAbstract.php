<?php

namespace MraafatCode\EmbedCreator\Abstracts;
abstract class EmbedCreatorAbstract
{
    /**
     * Url
     *
     * @var string
     */
    public $url;
    /**
     * Width
     *
     * @var int
     */
    public $width;
    /**
     * Height
     *
     * @var int
     */
    public $height;
    /**
     * Data container
     *
     * @var array
     */
    public $data;
    /**
     * Embed Source Object
     *
     * @var \MraafatCode\EmbedCreator\Abstracts\EmbedCreatorAbstract
     */
    public static $instance;

    /**
     * Init class and update url, width and height
     *
     * @param int    $width
     * @param int    $height
     * @param string $url
     *
     * @return void
     */
    public static function start($width, $height, $url)
    {
        static::$instance = new Static($width, $height, $url);
        self::$instance->setWidth($width)
            ->setHeight($height)
            ->setUrl($url);

        return static::$instance;
    }

    /**
     * Update url property
     *
     * @param string $url
     *
     * @return void
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Update width property
     *
     * @param int $width
     *
     * @return void
     */
    public function setWidth($width)
    {
        $this->width = $width;

        return $this;
    }

    /**
     * Update height property
     *
     * @param int $height
     *
     * @return void
     */
    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Get url property
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Get width property
     *
     * @return int
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Get height property
     *
     * @return int
     */
    public function getHeight()
    {
        return $this->height;
    }
}
