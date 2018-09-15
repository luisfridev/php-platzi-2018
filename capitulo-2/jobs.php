<?php
$jobs = [
  [
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
  ]
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
  if ($job['visible'] == false) {
    return;
  }

  echo '<li class="work-position">';
  echo '<h5>'.$job['title'].'</h5>';
  echo '<p>'.$job['description'].'</p>';
  echo '<p>'.getDuration($job['months']).'</p>';
  echo '<strong>Achievements:</strong>';
  echo '<ul>';
  echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
  echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
  echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
  echo '</ul>';
  echo '</li>';
}