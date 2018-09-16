<?php

class Job
{
    private $title;
    public $description;
    public $visible;
    public $months;

    /**
     * Asina valor a propiedad privada $title
     */
    public function setTitle($titleReceived)
    {
      $this->title = $titleReceived;
    }

    /**
     * Devuelve valor de propiedad $title
     */
    public function getTitle()
    {
      return $this->title;
    }
}

$job1 = new Job();
$job1->setTitle('PHP Developer');
$job1->description = 'This is a description';
$job1->visible = true;
$job1->months = 15;

$job2 = new Job();
$job2->setTitle('Python Developer');
$job2->description = 'This is a description';
$job2->visible = true;
$job2->months = 13;

$jobs = [
    $job1,
    $job2
  /* [
    'title' => 'PHP Developer',
    'description' => 'This is a description',
    'visible' => true,
    'months' => 15
  ],
  [
    'title' => 'Python Developer',
    'description' => 'This is a description',
    'visible' => true,
    'months' => 13
  ],
  [
    'title' => 'DevOps',
    'description' => 'This is a description',
    'visible' => true,
    'months' => 9
  ],
  [
    'title' => 'NodeDev',
    'description' => 'This is a description',
    'visible' => false,
    'months' => 10
  ],
  [
    'title' => 'FrontDev',
    'description' => 'This is a description',
    'visible' => true,
    'months' => 19
  ] */
];

function getDuration($months)
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

function printJob($job)
{
  if ($job->visible == false) {
    return;
  }

  echo '<li class="work-position">';
  echo '<h5>'.$job->getTitle.'</h5>';
  echo '<p>'.$job->description.'</p>';
  echo '<p>'.getDuration($job->months).'</p>';
  echo '<strong>Achievements:</strong>';
  echo '<ul>';
  echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
  echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
  echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
  echo '</ul>';
  echo '</li>';
}