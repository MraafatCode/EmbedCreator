<?php

namespace MraafatCode\EmbedCreator\Traits;
trait VideoSourceTrait
{
    /**
     * Prepare video data id, width and heigth
     *
     * @return void
     */
    public function prepareVideoCreationData()
    {
        $data['id'] = $this->getVideoIdByUrl($this->getUrl());
        $data['width'] = $this->getWidth();
        $data['height'] = $this->getHeight();
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

        $this->prepareVideoCreationData();

        return $this->passDataToView();
    }
}
