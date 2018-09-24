<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{

    protected $table = 'jobs';

     /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

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
