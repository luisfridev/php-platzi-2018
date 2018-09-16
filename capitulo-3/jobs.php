<?php

class Job
{
    private $title;
    public $description;
    public $visible = true;
    public $months;

    public function __construct($title, $description)
    {
      $this->title = $this->setTitle($title);
      $this->description = $description;
    }

    /**
     * Asina valor a propiedad privada $title
     */
    public function setTitle($titleReceived)
    {
      if ($titleReceived == '') {
        $titleReceived = 'N/A';
      }
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
  echo '<h5>'.$job->getTitle().'</h5>';
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