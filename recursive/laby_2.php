<?php

$map = [
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

$map3 = [
    ["##","##","##","##","##","##","##","##","##","##","##","##","##","##"],
    ["##","  ","  ","  ","  ","  ","  ","  ","##","##","##","  ","  ","##"],
    ["##","  ","##","##","  ","##","##","  ","##","##","##","##","  ","##"],
    ["##","  ","##","  ","  ","  ","##","  ","##","  ","  ","  ","  ","##"],
    ["##","  ","  ","  ","  ","  ","  ","  ","##","  ","  ","  ","  ","##"],
    ["##","  ","##","  ","  ","  ","  ","  ","##","  ","  ","  ","  ","##"],
    ["##","  ","##","##","  ","##","##","  ","##","  ","  ","  ","  ","##"],
    ["##","  ","  ","  ","  ","  ","  ","  ","##","##","##","  ","##","##"],
    ["##","##","##","##","##","##","##","##","##","##","##","  ","##","##"]
];


// GAME VARIABLES
const coordStart = [1,1]; // [y,x]
const coordGoal = [8,4];

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
        print_r(join('', $displayedMap[$i] )."\n");
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
function checkDir($dir) {
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

function changeDir($value):void {
    global $indexDir;
    $indexDir += $value;
    if ($indexDir > 3) {
        $indexDir -= 4;
    }
    if ($indexDir < 0) {
        $indexDir += 4;
    }
}

function updatePath():void {
    global $cellId, $path, $playerCoord;

    if ($cellId > count($path)) {
        array_push($path, $playerCoord);
    } else {
        $path[$cellId-1] = $playerCoord;
    }
}


function movePlayer():void {
    global $map, $step, $cellId, $playerCoord, $indexDir;

        $map[$playerCoord[0]][$playerCoord[1]] = sprintf("%02d", $cellId);

    switch (dir[$indexDir]) {
        case "S":
            $playerCoord[0]++;
            break;
        case "E":
            $playerCoord[1]++;
            break;
        case "N":
            $playerCoord[0]--;
            break;
        case "W":
            $playerCoord[1]--;
            break;
    }
    time_nanosleep(0,speed); // 0.1 sec
    $step++;
    $cellId++;
    showMap();
    showStep();
    updatePath();
}



$w1 = 0;
$w2 = 0;
$w3 = 0;

// include start cell in path
updatePath();

while (!$goalFound) {

    $movedThisTurn = false;

    $w1 =0;
    while (!$movedThisTurn) {
        $w1++;
        if ($w1>5) {print_r("w1");}

        $tryNotVisited = true;
        $tryVisited = true;

        // coup de radar : pour trouver les carrefours et éventuellement le goal
        $nOfWay = 0;
        for ($i=0; $i<count(dir); $i++) {

            if (contentOfCellInDir(dir[$i]) === '  ') {
                $nOfWay++;
                if ($nOfWay === 2) { // 2 to avoid duplicates
                    $listOfCrossroadsId[] = $cellId;
                    $listOfCrossroadsCoord[] = $playerCoord;
                }
            }

            if (checkIfGoalOnSigh(dir[$i])) {
                $indexDir = $i;
                movePlayer();
                $movedThisTurn = true;
                $tryVisited = false;
                $tryNotVisited = false;
            }
        }

        // on sonde les cases devant, à gauche et à droite
        $w2 = 0;
        while ($tryNotVisited) {
            $w2++;
            if ($w2>10) {print_r("w2");}

            // d'abord les cases non visitées
            if (contentOfCellInDir(dir[$indexDir]) === "  ") {
                // si pas de mur ET pas visitée on avance
                movePlayer();
                $movedThisTurn = true;
                $tryNotVisited = false;

            } else {
                if ($failures < 3) {
                    $failures++;
                    changeDir($failures);
                } else {
                    $tryNotVisited = false;
                }
            }
        }

        if ($movedThisTurn) {
            break;
        }

        // ensuite les cases visitées
        while ($tryVisited) {

// si pas le choix, je cherche une case déjà visitée avec le moins de riz
            $oldestPath = 999;

            // est-ce qu'il y a un carrefour a visiter avant ?
            if (count($listOfCrossroadsId) === 0) {
                $failures = 0;

                // je vais continuer à chercher une case sans mur
                for ($i=0; $i<count(dir); $i++) {
                    $val = intval(contentOfCellInDir(dir[$i]), 10);

                    if ($val > 0 && $val < $oldestPath) { // /!\ 0 serait un mur
                        $oldestPath = intval(contentOfCellInDir(dir[$i]), 10);
                        $indexDir = $i;
                    }
                }

            } else {
                // teleport to last crossroad
                $map[$playerCoord[0]][$playerCoord[1]] = sprintf("%02d", $cellId);
                $playerCoord = $listOfCrossroadsCoord[array_key_last($listOfCrossroadsCoord)];
                $teleporting = true;
                $movedThisTurn = true;
                $tryVisited = false;
                time_nanosleep(0,speed); // 0.1 sec
                $step++;
                $cellId = $listOfCrossroadsId[array_key_last($listOfCrossroadsId)];
                showMap();
                showStep();
            }

            if (!$teleporting) {
                movePlayer();
                $movedThisTurn = true;
                $tryVisited = false;
            }
        }


    } // end of while (!$movedThisTurn)


    // ici on s'est déplacé

    // but atteint ?
    if (checkIfGoalReached()) {
        print_r("GOAL FOUND !\n");
        print_r("\n");
        $goalFound = true;
    } else {
        $failures = 0;
    }

    // je viens d'etre téléporté sur le dernier carrefour
    if ($teleporting) {
        $teleporting = false;

        // je supprime le dernier carrefour de la liste
        array_pop($listOfCrossroadsId);
        array_pop($listOfCrossroadsCoord);

        // je supprime les cases visitées inutiles
        $path = array_slice($path, 0, $cellId);
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