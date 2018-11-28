<?php

namespace MraafatCode\EmbedCreator\EmbedSources;

use  MraafatCode\EmbedCreator\Abstracts\EmbedCreatorAbstract;

class Instagram extends EmbedCreatorAbstract
{
    /**
     * Send request to Instagram API with url and max width
     *
     * @return string
     */
    private function sendInstagramRequest()
    {
        $url = $this->getUrl();
        $width = $this->getWidth();
        $response = json_decode(
            file_get_contents(
                "https://api.instagram.com/oembed/?url=" . $url . '&maxwidth='
                . $width
            ), true
        );

        return $response;
    }

    /**
     * Get and reurn embed HTML which created by send request to Instagram API
     *
     * @return string
     */
    public function create()
    {

        $response = $this->sendInstagramRequest();
        if (isset($response['html'])) {
            $embed = $response['html'];

            return $embed;
        }
    }
}
