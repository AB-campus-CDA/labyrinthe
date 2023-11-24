<?php

$map1 = [
    ["##","##","##","##","##","##","##","##","##","##","##"],
    ["##","  ","##","  ","  ","  ","  ","  ","  ","  ","##"],
    ["##","  ","##","  ","##","##","##","  ","##","##","##"],
    ["##","  ","##","  ","##","  ","  ","  ","  ","  ","##"],
    ["##","  ","  ","  ","  ","##","##","##","  ","  ","##"],
    ["##","  ","##","  ","##","  ","  ","  ","  ","  ","##"],
    ["##","  ","##","  ","  ","  ","  ","##","  ","  ","##"],
    ["##","##","##","##","  ","##","##","##","##","  ","##"],
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

$map = [
    ["##","##","##","##","##","##","##","##","##","##","##","##","##","##"],
    ["##","  ","  ","  ","  ","  ","  ","  ","##","  ","##","  ","  ","##"],
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
const coordStart = [1,11]; // [y,x]
const coordGoal = [8,10];

const speed = 1*100000000; // ns

const dir = ["S","E","N","W"];
$indexDir = 0;
$failures = 0;
$playerCoord = coordStart;
$goalFound = false;
$step = 0;
$cellId = 1;
$movedThisTurn = false;
$teleporting = false;

$listOfCrossroadsId = []; // crossroad = cellId
$listOfCrossroadsCoord = []; // crossroad = COORD
$path = [];


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
    global $step, $cellId, $listOfCrossroadsId, $listOfCrossroadsCoord;
    print_r("step: " . ($step) . "\n");
    print_r( "list of crossroads id : " . join(', ', $listOfCrossroadsId )."\n");

    $CRcoords = "";
    foreach ($listOfCrossroadsCoord as $coord) {
        $CRcoords .= "{".join(',',$coord)."} ";
    }
    print_r( "list of crossroads coord : " . $CRcoords ."\n");
    print_r("cellId: " . ($cellId) . "\n");
    print_r("\n");
    print_r("\n");
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


function updatePath():void {
    global $cellId, $path, $playerCoord;

    if ($cellId > count($path)) {
        array_push($path, $playerCoord);
    } else {
        $path[$cellId-1] = $playerCoord;
    }
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

function teleportPlayer($destination) {
    global $map, $cellId, $playerCoord, $step;

    $map[$playerCoord[0]][$playerCoord[1]] = sprintf("%02d", $cellId);

    $playerCoord = $destination;

    time_nanosleep(0,speed); // 0.1 sec
    $step++;
    showMap();
    showStep();
    $cellId++;

}



$w1 = 0;
$w2 = 0;
$w3 = 0;

// include start cell in path
updatePath();

while (!$goalFound) {

    $nextCellToGo = [];
    $indexDir = 0;
    $nOfWay = 0;
    $nOfDead = 0;
    while ($indexDir < 4) {

        // shortcut to goal
        if (checkIfGoalOnSigh(dir[$indexDir])) {
            $nextCellToGo = coordFromHere(dir[$indexDir]);
            break;
        }

        if (contentOfCellInDir(dir[$indexDir]) === '  ') {
            // on a trouvé une case libre !
            $nextCellToGo = coordFromHere(dir[$indexDir]);

            $nOfWay++;
            if ($nOfWay === 2) { // 2 to avoid duplicates
                // on a trouvé un carrefour !
                $listOfCrossroadsId[] = $cellId;
                $listOfCrossroadsCoord[] = $playerCoord;
            }


        } else { // une case déjà visitée ou un mur

            $nOfDead++;
            if ($nOfDead === 4) {
                print_r("impasse\n");
                // on est dans une impasse ! => suppression du path
                $nextCellToGo = $listOfCrossroadsCoord[array_key_last($listOfCrossroadsCoord)];

                array_pop($listOfCrossroadsId);
                array_pop($listOfCrossroadsCoord);
                break;
            }

            // if ($maybeNextCell > 0 && $maybeNextCell < $oldestPath)
            //$oldestPath = intval(contentOfCellInDir(dir[$indexDir]), 10);

        }

        $indexDir++;
    }


    teleportPlayer($nextCellToGo);

    // but atteint ?
    if (checkIfGoalReached()) {
        print_r("GOAL FOUND !\n");
        print_r("\n");
        $goalFound = true;
    } else {
        $failures = 0;
    }

}

if ($goalFound) {

    // format the path
    foreach ($path as $key => $coord) {
        $path[$key] = "{".join(',',$coord)."} ";
    }

    print_r("YOUR BEST PATH :\n");
    print_r(join(' -> ', $path )."\n");

} else {
    print_r("GAME OVER !\n");
}

print_r("\n");
print_r("------------------------------------------------------------------------\n");