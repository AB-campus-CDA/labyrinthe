<?php


$map = [
    ["##","##","##","##","##","##","##","##","##","##","##"],
    ["##","  ","##","  ","  ","  ","  ","  ","  ","  ","##"],
    ["##","  ","##","  ","##","##","##","  ","##","##","##"],
    ["##","  ","##","  ","##","  ","  ","  ","  ","  ","##"],
    ["##","  ","  ","  ","  ","##","##","##","  ","  ","##"],
    ["##","  ","##","##","##","  ","  ","  ","  ","  ","##"],
    ["##","  ","##","  ","  ","  ","  ","##","  ","  ","##"],
    ["##","  ","##","##","##","##","##","##","##","  ","##"],
    ["##","##","  ","  ","  ","##","##","##","##","##","##"],
    ["##","##","  ","##","##","##","##","##","##","  ","##"],
    ["##","##","  ","##","##","##","##","##","##","  ","##"],
    ["##","##","  ","  ","  ","  ","  ","  ","  ","  ","##"],
    ["##","##","##","##","##","##","##","##","##","##","##"],
];

$map2 = [
    ["##","##","##","##","##","##","##","##","##","##","##","##","##","##"],
    ["##","  ","  ","  ","  ","  ","  ","  ","  ","  ","  ","  ","  ","##"],
    ["##","  ","##","##","##","  ","##","  ","##","##","  ","##","##","##"],
    ["##","  ","##","  ","  ","  ","##","  ","##","  ","  ","##"],
    ["##","  ","##","  ","  ","  ","##","  ","  ","  ","  ","##","##","##"],
    ["##","  ","##","  ","##","##","##","  ","##","  ","  ","##","  ","##"],
    ["##","  ","  ","  ","  ","  ","  ","  ","##","##","##","  ","  ","##"],
    ["##","##","##","##","  ","##","##","##","##","##","##","  ","##","##"],
    ["##","##","##","  ","  ","##","  ","##","  ","  ","  ","  ","##","##"],
    ["##","##","  ","  ","  ","  ","  ","##","  ","##","##","##","##","##"],
    ["##","##","##","##","  ","##","  ","  ","  ","##"],
    ["##","##","##","##","  ","##","##","##","##","##"],
    ["##","##","##","##","  ","##","##","##","##","##","##","##","##","##","##","##","##","##","##","##","##","##","##","##","##","##"],
    ["##","##","##","##","  ","##","##","##","##","##","##","##","##","##","##","##","##","##","##","##","##","##","##","##","##","##"],
    ["##","##","##","##","  ","##","##","##","##","##","##","##","##","##","##","##","##","##","##","##","##","##","##","##","##","##"],
    ["##","##","##","##","  ","  ","##","##","##","##","##","##","##","##","##","##","##","##","##","##","##","##","##","##","##","##"],
    ["##","##","##","##","  ","##","##","##","##","##","##","##","##","##","##","##","##","##","##","##","##","##","##","##","##","##"],
    ["##","##","##","##","  ","##","##","##","##","##","##","##","##","##","##","##","##","##","##","##","##","##","##","##","##","##"],
    ["##","##","  ","  ","  ","  ","##","##","##","##","##","##","##","##","##","##","##","##","##","##","##","##","##","##","##","##"],
    ["##","##","  ","##","  ","##","##","##","##","##","##","##","##","##","##","##","##","##","##","##","##","##","##","##","##","##"],
    ["##","##","  ","##","  ","##","##","##","##","##","##","##","##","##","##","##","##","##","##","##","##","##","##","##","##","##"],
    ["##","##","  ","##","  ","  ","##","##","##","##","##","##","##","##","##","##","##","##","##","##","##","##","##","##","##","##"],
    ["##","##","  ","  ","  ","##","##","##","##","##","##","##","##","##","##","##","##","##","##","##","##","##","##","##","##","##"],
    ["##","##","##","##","##","##","##","##","##","##","##","##","##","##","##","##","##","##","##","##","##","##","##","##","##","##"],
];

$map1 = [
    ["##","##","##","##","##","##","##","##","##","##","##","##","##","##"],
    ["##","  ","##","  ","  ","  ","  ","  ","##","  ","##","  ","  ","##"],
    ["##","  ","##","##","  ","##","##","  ","##","  ","##","##","  ","##"],
    ["##","  ","##","  ","  ","  ","##","  ","##","  ","  ","##","  ","##"],
    ["##","  ","  ","  ","  ","  ","  ","  ","##","  ","  ","##","  ","##"],
    ["##","  ","##","  ","  ","##","  ","  ","##","  ","  ","  ","  ","##"],
    ["##","  ","##","##","  ","##","##","  ","  ","  ","  ","##","  ","##"],
    ["##","  ","  ","  ","  ","  ","  ","  ","##","##","##","  ","##","##"],
    ["##","##","##","  ","##","##","##","##","##","##","##","  ","##","##"],
    ["##","##","##","  ","  ","  ","  ","  ","  ","  ","  ","  ","##","##"],
    ["##","##","##","##","##","##","##","##","##","##","##","##","##","##"]
];


// GAME VARIABLES
const coordStart = [1,1]; // [y,x]
const coordGoal = [7,9];

const speed = 3*100000000; // ns

const dir = ["S","E","N","W"];
$indexDir = 0;
$failures = 0;
$playerCoord = coordStart;
$goalFound = false;
//$step = 0;
$cellId = 0;
$movedThisTurn = false;
$teleporting = false;

$cellsCoord = [coordStart]; // coord = [y,x]
$segmentsList = [[$cellId]]; // segment = [cellId]


// GAME FUNCTIONS
function showMap():void {
    global $map, $playerCoord;

    $displayedMap = $map;

    // integrate game objects in map
    $displayedMap[$playerCoord[0]][$playerCoord[1]] = " *";
    $displayedMap[coordGoal[0]][coordGoal[1]] = " G";
    $displayedMap[coordStart[0]][coordStart[1]] = " S";


    for ($i=0; $i<count($displayedMap); $i++) {
        print_r(join(' ', $displayedMap[$i] )."\n");
    };
    print_r("\n");
}

function showStep():void {
    global $cellId, $listOfCrossroadsId, $listOfCrossroadsCoord, $segmentsList;
    print_r("step: " . ($cellId) . "\n");
    //print_r( "list of crossroads id : " . join(', ', $listOfCrossroadsId )."\n");

    print_r("segments : \n");

    for ($i=0; $i<10; $i++) {
        if (isset($segmentsList[$i])) {
            print_r(join(' ', $segmentsList[$i] )."\n");
        } else {
            print_r("free space\n");
        }
    }

    print_r("\n");
    print_r("-----------------------------------------------------------------------------------------------------\n");
    print_r("\n");


}


// GAME API
function contentOfCellInDir($dir) {
    global $map, $playerCoord;
    switch ($dir) {
        case "S":
            return $map[$playerCoord[0]+1][$playerCoord[1]];
        case "E":
            return $map[$playerCoord[0]][$playerCoord[1]+1];
        case "N":
            return $map[$playerCoord[0]-1][$playerCoord[1]];
        case "W":
            return $map[$playerCoord[0]][$playerCoord[1]-1];
    }
}

function checkIfGoalOnSigh($dir):bool {
    global $playerCoord;
    switch ($dir) {
        case "S":
            return $playerCoord[0]+1 === coordGoal[0] && $playerCoord[1] === coordGoal[1];
        case "E":
            return $playerCoord[0] === coordGoal[0] && $playerCoord[1]+1 === coordGoal[1];
        case "N":
            return $playerCoord[0]-1 === coordGoal[0] && $playerCoord[1] === coordGoal[1];
        case "W":
            return $playerCoord[0] === coordGoal[0] && $playerCoord[1]-1 === coordGoal[1];
    }
    return false;
}

function checkIfGoalReached():bool {
    global $playerCoord;
    return ($playerCoord[0] === coordGoal[0] && $playerCoord[1] === coordGoal[1]);
}

function lastSegmentIndex():int {
    global $segmentsList;

    $lowerLastSegmentCellId = 999;
    $currentSegmentIndex = -1;
    foreach ($segmentsList as $index => $segment) {
        if ($segment[array_key_last($segment)] < $lowerLastSegmentCellId) {
            $lowerLastSegmentCellId = $segment[array_key_last($segment)];
            $currentSegmentIndex = $index;
        }
    }
    return $currentSegmentIndex;

}

function findSegmentEndingWith($cellId):int {
    global $segmentsList;

    foreach ($segmentsList as $index => $segment) {
        if ($segment[array_key_last($segment)] === $cellId) {
            return $index;
        }
    }
    return -1;
}

function coordFromHere($dir) {
    global $playerCoord;
    switch ($dir) {
        case "S":
            return [$playerCoord[0]+1, $playerCoord[1]];
        case "E":
            return [$playerCoord[0], $playerCoord[1]+1];
        case "N":
            return [$playerCoord[0]-1, $playerCoord[1]];
        case "W":
            return [$playerCoord[0], $playerCoord[1]-1];
    }
}

function teleportPlayer($destination):void {
    global $map, $cellId, $playerCoord, $step;
    //print_r("teleporting to : ".join(',',$destination)."\n");

    //$map[$playerCoord[0]][$playerCoord[1]] = sprintf("%02d", $cellId);

    $playerCoord = $destination;

    time_nanosleep(0,speed); // 0.1 sec
    showMap();
    showStep();
    //$cellId++;
}


// security variables
$w1 = 0;
$w2 = 0;
$w3 = 0;


// main function variables
$nextCellToGo = [];
$map[$playerCoord[0]][$playerCoord[1]] = sprintf("%02d", $cellId);
while (!$goalFound) {

    //print_r("current coord : ".join(' ', $playerCoord )."\n");

    $indexDir = 0;
    $nOfWay = 0;
    $nOfDead = 0;
    $newSegmentList = [];
    while ($indexDir < 4) {
        //print_r("dir : ".dir[$indexDir]."\n");

        // shortcut to goal
/*        if (checkIfGoalOnSigh(dir[$indexDir])) {
            print_r("GOAL ON SIGHT !\n");
            $nextCellToGo = coordFromHere(dir[$indexDir]);
            print_r("nextCellToGo : ".join(' ', $nextCellToGo )."\n");
            $nOfWay = -1;
            break;
        }*/

        if (contentOfCellInDir(dir[$indexDir]) === '  ') {
            // on a trouvé une voie
            $nOfWay++;

            // on crée un nouveau segment avec l'indice de cell suivant
            $cellId++;
            $newSegment = [$cellId]; // an array with only the first cell
            $newSegmentList[] = $newSegment;
            //print_r("new segment : ".join(' ', $newSegment )."\n");

            // on met à jour la map et la liste des coordonnées
            $coord = coordFromHere(dir[$indexDir]);
            $map[$coord[0]][$coord[1]] = sprintf("%02d", $cellId);
            $cellsCoord[] = $coord;
            //print_r("new coord : ".join(' ', $coord )."\n");
        }

        $indexDir++;
    }

    // si $nOfWay === 0 alors on est dans une impasse ! => suppression du segment
    if ($nOfWay === 0) {
        //print_r("DEAD END !\n");

        // TODO : change to slice + merge solution
        //print_r("ccord : ".join(' ', $cellsCoord[$cellId] )."\n");
        //print_r("segment : ".join(' ', $segmentsList[lastSegmentIndex()] )."\n");
        //print_r("cellId : ".$cellId."\n");
        //$segmentsList = array_splice($segmentsList, lastSegmentIndex(), 1);

        $tempList = [];
        foreach ($segmentsList as $index => $segment) {
            if ($index !== lastSegmentIndex()) {
                $tempList[] = $segment;
            }
        }
        $segmentsList = $tempList;

        //var_dump($segmentsList);
    }

    // si un seul segment, on l'agrège au segment en cours
    if ($nOfWay === 1) {
        //print_r("ONE WAY !\n");
        //print_r($cellId . "\n");
        //print_r("{ ".join(' ',$cellsCoord[$cellId]) . " }\n");

        // met à jour les segments

        //print_r("currentSegmentIndex : ".$currentSegmentIndex."\n");
        $segmentsList[lastSegmentIndex()] = array_merge($segmentsList[lastSegmentIndex()], $newSegmentList[0]);
        //var_dump($segmentsList) ;

    }

    // si plus que 1 segment => on ferme le segment en cours avec un marqueur de fin et on conserve les nouveaux segments
    if ($nOfWay > 1) {
        //print_r("CROSSROAD !\n");
        //var_dump($segmentsList);
        $segmentsList[lastSegmentIndex()][] = 999;


        //var_dump($segmentsList);
        foreach ($newSegmentList as $newSegment) {
            //print_r("new segment : ".join(' ', $newSegment )."\n");
            $segmentsList[] = $newSegment;
        }
        //var_dump($segmentsList);

    }

    if ($nOfWay > -1) {
        // la position du curseur DOIT ETRE sur la plus petite fin de segment :
        $lowerLastSegmentCellId = 999;
        foreach ($segmentsList as $segment) {
            if ($segment[array_key_last($segment)] < $lowerLastSegmentCellId) {
                $lowerLastSegmentCellId = $segment[array_key_last($segment)];
            }
        }

        //print_r("lowerLastSegmentCellId : ".$lowerLastSegmentCellId."\n");
        $nextCellToGo = $cellsCoord[$lowerLastSegmentCellId];
    }

    teleportPlayer($nextCellToGo);

    // but atteint ?
    if (checkIfGoalReached()) {
        //print_r("GOAL FOUND !\n");
        //print_r("\n");
        $goalFound = true;
        $segmentsList[findSegmentEndingWith(intval($map[$playerCoord[0]][$playerCoord[1]]))][] = 999;
    } else {
        $failures = 0;
    }

    $nextCellToGo = [];
}

if ($goalFound) {

    //print_r("last id :" . join('-', $playerCoord) . "\n");


    $usedSegments = [];
    // keep useful segments
    for ($i=0; $i<count($segmentsList); $i++) {
        if ($segmentsList[$i][array_key_last($segmentsList[$i])] === 999 ) {
            array_pop($segmentsList[$i]) ;
            $usedSegments[] = $segmentsList[$i];
        }
    }

    $headOfLastSegment = $segmentsList[findSegmentEndingWith(intval($map[$playerCoord[0]][$playerCoord[1]]))][0];

    $pathList = [];
    foreach ($usedSegments as $segment) {
        if ($segment[0] <= $headOfLastSegment) {//$headOfLastSegment) {
            $pathList[] = $segment;
        }
    }

    $path = [];
    for ($i=0; $i<count($pathList); $i++) {
        for ($j=0; $j<count($pathList[$i]); $j++) {
            $path[] = "{".join('-',$cellsCoord[$pathList[$i][$j]])."}";
        }
    }

    print_r("path : ".join(' -> ', $path )."\n");




} else {
    print_r("GAME OVER !\n");
}

print_r("\n");
print_r("------------------------------------------------------------------------\n");

