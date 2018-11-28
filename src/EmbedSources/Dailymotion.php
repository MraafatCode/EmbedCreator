<?php

namespace MraafatCode\EmbedCreator\EmbedSources;

use  MraafatCode\EmbedCreator\Abstracts\EmbedCreatorAbstract;
use  MraafatCode\EmbedCreator\Traits\VideoSourceTrait;

class Dailymotion extends EmbedCreatorAbstract
{
    use VideoSourceTrait;
    /**
     * View Name
     *
     * @var string
     */
    protected $view = "dailymotion";

    /**
     * Get Dailymotion video id from url
     *
     * @param string $url
     *
     * @return string
     */
    protected function getVideoIdByUrl($url)
    {
        $dailymotion = explode('/', $url);

        return end($dailymotion);
    }
}
