<?php

$teamMembers = array("Doug","Peter","Philipp","Benjamin","Ernesto","Thiago","Dave","Mo","Carlos","Paulo","Henrique","Zak");

$clientEngagementManager = $teamMembers[0];
$managingDirector = $teamMembers[1];
$kudosKing = $teamMembers[4];

$teamPositions = array(
    "Client Engagement Manager" => $clientEngagementManager,
    "Managing Director" => $managingDirector,
    "Kudos King" => $kudosKing );


            // this is a very important comment



if ($teamPositions["Kudos King"] != "Ernesto") { echo "???";};
