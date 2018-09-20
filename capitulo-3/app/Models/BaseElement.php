<?php

class BaseElement
{
    private $title;
    public $description;
    public $visible = true;
    public $months;

    public function __construct($title, $description)
    {
        $this->setTitle($title);
        $this->description = $description;
    }

    /**
     * Asina valor a propiedad privada $title
     */
    public function setTitle($titleReceived)
    {
        if ($titleReceived == '') {
            $this->title = 'N/A';
        } else {
            $this->title = $titleReceived;
        }
    }

    function getDurationAsString($months)
    {
        $years = floor($months / 12);
        $extraMonths = $months % 12;
        $message = "";
        if ($years > 0) {
            $message .= "$years years ";
        } 
        if ($extraMonths > 0) {
            $message .= "$extraMonths months";
        }
        return $message;
    }

    /**
     * Devuelve valor de propiedad $title
     */
    public function getTitle()
    {
        return $this->title;
    }
}