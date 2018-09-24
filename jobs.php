<?php

require_once 'vendor/autoload.php';

use App\Models\{Job, Project};

$project1 = new Project('Proyecto Uno', 'Descripción del proyecto');
$project1->months = 18;

$projects = [
    $project1
];

function printElement($element)
{
    /* if ($element->visible == false) {
        return;
    } */

    echo '<li class="work-position">';
    echo '<h5>'.$element->title.'</h5>';
    echo '<p>'.$element->description.'</p>';
    echo '<p>'.$element->getDurationAsString($element->months).'</p>';
    echo '<strong>Achievements:</strong>';
    echo '<ul>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '</ul>';
    echo '</li>';
}