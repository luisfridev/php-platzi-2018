<?php
require 'app/Models/Job.php';
require 'app/Models/Project.php';
require_once 'app/Models/Printable.php';

require 'lib1/Project.php';

use App\Models\{Job, Project, Printable};

$job1 = new Job('PHP Developer', 'This is a description');
$job1->months = 15;

$job2 = new Job('Python Developer', 'This is a description');
$job2->months = 13;

$job3 = new Job('DevOps', 'This is a description');
$job3->months = 13;

$jobs = [
    $job1,
    $job2,
    $job3
];

$project1 = new Project('Proyecto Uno', 'Descripción del proyecto');
$project1->months = 18;

$projects = [
    $project1
];

function printElement(Printable $element)
{
    if ($element->visible == false) {
        return;
    }

    echo '<li class="work-position">';
    echo '<h5>'.$element->getTitle().'</h5>';
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