<?php

require_once 'BaseElement.php';

class Job extends BaseElement 
{
    public function __construct($title, $description)
    {
        $newTitle =  "Job: {$title}";
        parent::__construct($newTitle, $description);
    }

    function getDurationAsString($months)
    {
        $years = floor($months / 12);
        $extraMonths = $months % 12;
        $message = "Job duration: ";
        if ($years > 0) {
            $message .= "$years years ";
        } 
        if ($extraMonths > 0) {
            $message .= "$extraMonths months";
        }
        return $message;
    }
}
