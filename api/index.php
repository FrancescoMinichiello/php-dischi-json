<?php

$disc = file_get_contents("dischi.json");

header("content-type: application/json");
echo $disc;