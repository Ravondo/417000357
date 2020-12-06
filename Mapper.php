<?php
$mapper = new VenueMapper();
$venue = $mapper->find(2);
print_r($venue);