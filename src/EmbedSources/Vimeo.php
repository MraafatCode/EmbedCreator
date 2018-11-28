<?php

namespace MraafatCode\EmbedCreator\EmbedSources;

use  MraafatCode\EmbedCreator\Abstracts\EmbedCreatorAbstract;
use  MraafatCode\EmbedCreator\Traits\VideoSourceTrait;

class Vimeo extends EmbedCreatorAbstract
{
    use VideoSourceTrait;
    /**
     * View Name
     *
     * @var string
     */
    protected $view = "vimeo";

    /**
     * Get Vimeo video id from url
     *
     * @param string $url
     *
     * @return string
     */
    protected function getVideoIdByUrl($url)
    {
        $vimeo = explode('/', $url);

        return end($vimeo);

    }
}
