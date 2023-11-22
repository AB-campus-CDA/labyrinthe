<?php

$map2 = [
    ["##","##","##","##","##","##","##","##","##"],
    ["##","  ","##","  ","  ","  ","  ","  ","##"],
    ["##","  ","##","  ","##","##","  ","##","##"],
    ["##","  ","##","  ","##","  ","  ","  ","##"],
    ["##","  ","  ","  ","  ","##","##","  ","##"],
    ["##","  ","##","  ","##","  ","  ","  ","##"],
    ["##","  ","##","  ","  ","  ","##","  ","##"],
    ["##","##","##","##","##","##","##","##","##"],
];

$map = [
    ["##","##","##","##","##","##","##","##","##","##","##","##","##","##"],
    ["##","  ","  ","  ","  ","  ","  ","  ","##","##","##"," G","  ","##"],
    ["##","  ","##","##","##","##","##","  ","##","##","##","##","  ","##"],
    ["##","  ","##","  ","  ","  ","##","  ","  ","  ","  ","  ","  ","##"],
    ["##","  ","##","  ","  ","  ","##","  ","##","  ","  ","  ","  ","##"],
    ["##","  ","##","  ","##","##","##","  ","##","  ","  ","  ","  ","##"],
    ["##","  ","  ","  ","  ","  ","  ","  ","##","##","##","  ","##","##"],
    ["##","##","##","  ","  ","##","##","##","##","##","##","  ","##","##"],
    ["##","##","##","  ","  ","##","  ","##","  ","  ","  ","  ","##","##"],
    ["##","##","  ","  ","  ","  ","  ","##","  ","##","##","##","##","##"],
    ["##","##","##","##","  ","##","  ","  ","  ","##"],
    ["##","##","##","##","##","##","##","##","##","##"],
];


// GAME VARIABLES
const coordStart = [5,3]; // [y,x]
const coordGoal = [1,11];

const speed = 300000000; // ns

const dir = ["S","E","N","W"];
$indexDir = 0;
$failures = 0;
$playerCoord = coordStart;
$goalFound = false;
$step = 0;
$CellId = 1;
$movedThisTurn = false;

$listOfCrossroads = []; // crossroad = last step value


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
    global $step;
    print_r("step: " . ($step-1) . "\n");
}


// GAME API
function checkDir($playerCoord, $dir) {
    global $map;
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

function checkGoal($playerCoord) {
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


function movePlayer():void {
    global $map, $step, $playerCoord, $indexDir;
    //$newValue = sprintf("%$02d", $step);
    switch (dir[$indexDir]) {
        case "S":
            $map[$playerCoord[0]][$playerCoord[1]] = sprintf("%02d", $step);
            $playerCoord[0]++;
            $map[$playerCoord[0]][$playerCoord[1]] = " *";
            break;
        case "E":
            $map[$playerCoord[0]][$playerCoord[1]] = sprintf("%02d", $step);
            $playerCoord[1]++;
            $map[$playerCoord[0]][$playerCoord[1]] = " *";
            break;
        case "N":
            $map[$playerCoord[0]][$playerCoord[1]] = sprintf("%02d", $step);
            $playerCoord[0]--;
            $map[$playerCoord[0]][$playerCoord[1]] = " *";
            break;
        case "W":
            $map[$playerCoord[0]][$playerCoord[1]] = sprintf("%02d", $step);
            $playerCoord[1]--;
            $map[$playerCoord[0]][$playerCoord[1]] = " *";
            break;
    }
    time_nanosleep(0,speed); // 0.1 sec
    $step++;
    showMap();
    showStep();
}

$w1 = 0;
$w2 = 0;
$w3 = 0;

while (!$goalFound) {
print_r("LOOP BEGIN HERE ----------------------------\n");
    print_r( "list of crossroads : " . join(', ', $listOfCrossroads )."\n");

    $movedThisTurn = false;

    while (!$movedThisTurn) {
        //print_r("no move\n");
        $tryNotVisited = true;
        $tryVisited = true;


        // coup de radar : pour trouver les carrefours et éventuellement le goal
        $nOfWay = 0;
        for ($i=0; $i<count(dir); $i++) {
            $val = checkDir($playerCoord, dir[$i]);

            if ($val === '  ') {
                $nOfWay++;
                if ($nOfWay === 2) { // 2 to avoid duplicates
                    $listOfCrossroads[] = $step;
                }
            }
            if ($val === ' G') {
                $indexDir = $i;
                movePlayer();
                $movedThisTurn = true;
                $tryVisited = false;
                $tryNotVisited = false;
            }
        }

        // on sonde les cases devant, à gauche et à droite
        $w1 = 0;
        while ($tryNotVisited) {
            //print_r("try not visited\n");
            $w1++;
            if ($w1 > 10) {
                $tryNotVisited = false;
                print_r("w1\n");
            }
            // d'abord les cases non visitées
            if (checkDir($playerCoord, dir[$indexDir]) === "  ") {
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
            //print_r("moved this turn\n");
            break;
        }

// est-ce qu'il y a un carrefour a visiter avant ?
        print_r("try crossroads : ");
        if (count($listOfCrossroads) === 0) {
            print_r("no crossroads\n");
            $failures = 0; // je vais continuer à chercher une case sans mur
        } else {
            print_r("way back to crossroads\n");
            $failures = 0;
            changeDir(2);; // je fais demi-tour puis continue à chercher une case sans mur

            //movePlayer();
            //$movedThisTurn = true;

            // ??
            //$tryVisited = false;
        }

        // ensuite les cases visitées
        while ($tryVisited) {
            //print_r("try visited\n");
            //print_r('dir is ' . dir[$indexDir] . "\n");
            $w2++;
            if ($w2 > 100) {
                $tryVisited = false;
                print_r("w2\n");
            }
// si pas le choix, je cherche une case déjà visitée avec le moins de riz
            $oldestPath = 999;
            for ($i=0; $i<count(dir); $i++) {
                $val = intval(checkDir($playerCoord, dir[$i]), 10 );

                if ($val > 0 && $val < $oldestPath) { // /!\ 0 serait un mur
                    $oldestPath = intval(checkDir($playerCoord, dir[$i]), 10 );
                    $indexDir = $i;
                }
            }

            movePlayer($playerCoord, dir[$indexDir]);
            $movedThisTurn = true;
            $tryVisited = false;
        }


    } // end of while (!$movedThisTurn)


    // ici on s'est déplacé


    // but atteint ?
    if (checkGoal($playerCoord)) {
        print_r("GOAL FOUND !\n");
        print_r("\n");
        $goalFound = true;
    } else {
        //print_r("reset failures\n");
        $failures = 0;
    }


    // si je suis sur un carrefour de la liste, je le retire
    if (in_array($map[$playerCoord[0]][$playerCoord[1]], $listOfCrossroads)) {
        $key = array_search($map[$playerCoord[0]][$playerCoord[1]], $listOfCrossroads); // objectif : la valeur supprimée est la dernière
        unset($listOfCrossroads[$key]);
        $listOfCrossroads = array_values($listOfCrossroads);
        print_r("crossroad cleared\n");
    }

    //print_r("end of loop\n");
$w3++;
    // secu pour éviter la boucle infinie
    if ($w3 > 300) {
        print_r("w3\n");
        $goalFound = true;
    }

}

print_r("FINISH !\n");