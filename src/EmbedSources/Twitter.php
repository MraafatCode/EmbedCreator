<?php

namespace MraafatCode\EmbedCreator\EmbedSources;

use  MraafatCode\EmbedCreator\Abstracts\EmbedCreatorAbstract;

class Twitter extends EmbedCreatorAbstract
{
    /**
     * Prepare request query params
     *
     * @return string
     */
    private function preparParamsQuery()
    {
        $paramsArray = array(
            "url" => $this->getUrl(),
            "omit_script" => true,
            "align" => "center",
            "hide_media" => true,
            "hide_thread" => true,
            "maxwidth" => $this->getWidth()
        );
        $query = http_build_query($paramsArray);

        return $query;
    }

    /**
     * Send request to Twitter API with query data
     *
     * @param string $query
     *
     * @return string
     */
    private function sendTwitterRequest($query)
    {
        $response = json_decode(
            file_get_contents(
                "https://api.twitter.com/1.1/statuses/oembed.json?" . $query
            ), true
        );

        return $response;
    }

    /**
     * Get and reurn embed HTML which created by send request to Twitter API
     *
     * @return string
     */
    public function create()
    {
        $query = $this->preparParamsQuery();
        $response = $this->sendTwitterRequest($query);
        if (isset($response['html'])) {
            $embed = $response['html'];

            return $embed;
        }
    }
}
