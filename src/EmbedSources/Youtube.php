<?php

namespace MraafatCode\EmbedCreator\EmbedSources;

use  MraafatCode\EmbedCreator\Abstracts\EmbedCreatorAbstract;
use  MraafatCode\EmbedCreator\Traits\VideoSourceTrait;

class Youtube extends EmbedCreatorAbstract
{
    use VideoSourceTrait;
    /**
     * View Name
     *
     * @var string
     */
    protected $view = "youtube";

    /**
     * Get Youtube video id from url
     *
     * @param string $url
     *
     * @return string
     */
    protected function getVideoIdByUrl($url)
    {
        parse_str(parse_url($url, PHP_URL_QUERY), $my_array_of_vars);

        return $my_array_of_vars['v'];
    }
}
