<?php

namespace MraafatCode\EmbedCreator\EmbedSources;

use  MraafatCode\EmbedCreator\Abstracts\EmbedCreatorAbstract;

class Facebook extends EmbedCreatorAbstract
{
    /**
     * View Name
     *
     * @var string
     */
    protected $view = "facebook";

    /**
     * Prepare Facebook embed data url and width
     *
     * @return void
     */
    public function prepareEmbedCreationData()
    {
        $data['url'] = $this->getUrl();
        $data['width'] = $this->getWidth();
        $this->data = $data;
    }

    /**
     * Pass prepared data to view
     *
     * @return string
     */
    public function passDataToView()
    {
        $data = $this->data;

        return view('MraafatCode::' . $this->view, compact('data'))->render();
    }

    /**
     * Create video embed by run steps
     *
     * @return string
     */
    public function create()
    {

        $this->prepareEmbedCreationData();

        return $this->passDataToView();
    }
}
