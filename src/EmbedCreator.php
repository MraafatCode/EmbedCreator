<?php

namespace MraafatCode\EmbedCreator;

use MraafatCode\EmbedCreator\EmbedSources\Youtube;
use MraafatCode\EmbedCreator\EmbedSources\Dailymotion;
use MraafatCode\EmbedCreator\EmbedSources\Vimeo;
use MraafatCode\EmbedCreator\EmbedSources\Twitter;
use MraafatCode\EmbedCreator\EmbedSources\Instagram;
use MraafatCode\EmbedCreator\EmbedSources\Facebook;

class EmbedCreator
{
    /**
     * Url
     *
     * @var string
     */
    static $url;
    /**
     * EmbedCreator Object
     *
     * @var \MraafatCode\EmbedCreator\EmbedCreator
     */
    private static $_instance;
    /**
     * Width
     *
     * @var int
     */
    protected $width = 560;
    /**
     * Height
     *
     * @var int
     */
    protected $height = 315;
    /**
     * Height
     *
     * @var string
     */
    protected $embed;

    /**
     * Init class and update url
     *
     * @param string $url
     *
     * @return void
     */
    public static function url($url)
    {
        static::$_instance = new Static;
        self::$url = $url;

        return static::$_instance;
    }

    /**
     * Update embed max width
     *
     * @param int $width
     *
     * @return void
     */
    public function maxWidth($width)
    {
        $this->width = $width;
        $this->updateHeightDependOnWidth($width);

        return $this;
    }

    /**
     * Update embed height depend on new width
     *
     * @param int $width
     *
     * @return void
     */
    protected function updateHeightDependOnWidth($width)
    {
        $this->height = $width * (9 / 16);

        return $this;
    }

    /**
     * Start Youtube embed creation
     *
     * @return void
     */
    public function youtube()
    {
        $this->embed = Youtube::start($this->width, $this->height, self::$url)
            ->create();

        return $this;
    }

    /**
     * Start Dailymotion embed creation
     *
     * @return void
     */
    public function dailymotion()
    {
        $this->embed = Dailymotion::start(
            $this->width, $this->height, self::$url
        )->create();

        return $this;
    }

    /**
     * Start Vimeo embed creation
     *
     * @return void
     */
    public function vimeo()
    {
        $this->embed = Vimeo::start($this->width, $this->height, self::$url)
            ->create();

        return $this;
    }

    /**
     * Start Twitter embed creation
     *
     * @return void
     */
    public function twitter()
    {
        $this->embed = Twitter::start($this->width, null, self::$url)->create();

        return $this;
    }

    /**
     * Start Instagram embed creation
     *
     * @return void
     */
    public function instagram()
    {
        $this->embed = Instagram::start($this->width, null, self::$url)->create(
        );

        return $this;
    }

    /**
     * Start Facebook embed creation
     *
     * @return void
     */
    public function facebook()
    {
        $this->embed = Facebook::start($this->width, null, self::$url)->create(
        );

        return $this;
    }

    /**
     * Get the generated HTML embed
     *
     * @return string
     */
    public function get()
    {
        return $this->embed;
    }
}

