<?php
$birds = array("falcon", "eagle", "pigeon", "ostrich", "crow", "parrot");
$fish = array("sharks", "whales", "dolphins");

$animals = array();
$birdCount = count($birds);
$fishCount = count($fish);

$birdIndex = 0;
$fishIndex = 0;

while ($birdIndex < $birdCount) {
    if ($birdIndex < $birdCount) {
        $animals[] = $birds[$birdIndex];
        $birdIndex++;
    }
    if ($birdIndex < $birdCount) {
        $animals[] = $birds[$birdIndex];
        $birdIndex++;
    }

    if ($fishIndex < $fishCount) {
        $animals[] = $fish[$fishIndex];
        $fishIndex++;
    }
}

print_r($animals);
?>