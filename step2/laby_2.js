const map = [
    ["##","##","##","##","##","##","##","##","##"],
    ["##"," S","##","  ","  ","  ","  ","  ","##"],
    ["##","  ","##","  ","##","##","  ","##","##"],
    ["##","  ","##","  ","##"," G","  ","  ","##"],
    ["##","  ","  ","  ","  ","##","##","  ","##"],
    ["##","  ","##","  ","##","  ","  ","  ","##"],
    ["##","  ","##","  ","  ","  ","##","  ","##"],
    ["##","##","##","##","##","##","##","##","##"],
]

// GAME FUNCTIONS
function showMap(map) {
    //console.clear()
    for (let i=0; i<map.length; i++) {
        console.log(map[i].join(''))
    }
}

function showStep(step) {
    console.log(`step: ${step}`)
}


// GAME VARIABLES
const coordStart = [1,1] // [y,x]
const coordGoal = [3,5]

const dir = ["S","E","N","W"]
let indexDir = 0
let failures = 0
let playerCoord = coordStart
let goalFound = false
let step = 0
let movedThisTurn = false


// GAME API
function checkDir(playerCoord, dir) {
    switch (dir) {
        case "S":
            return map[playerCoord[0]+1][playerCoord[1]]
        case "E":
            return map[playerCoord[0]][playerCoord[1]+1]
        case "N":
            return map[playerCoord[0]-1][playerCoord[1]]
        case "W":
            return map[playerCoord[0]][playerCoord[1]-1]
    }
}

function checkGoal(playerCoord) {
    return (playerCoord[0] === coordGoal[0] && playerCoord[1] === coordGoal[1])
}


function movePlayer(playerCoord, dir) {
    let newValue = step.toString().padStart(2, " ")
    switch (dir) {
        case "S":
            map[playerCoord[0]][playerCoord[1]] = newValue
            playerCoord[0]++
            map[playerCoord[0]][playerCoord[1]] = " *"
            break
        case "E":
            map[playerCoord[0]][playerCoord[1]] = newValue
            playerCoord[1]++
            map[playerCoord[0]][playerCoord[1]] = " *"
            break
        case "N":
            map[playerCoord[0]][playerCoord[1]] = newValue
            playerCoord[0]--
            map[playerCoord[0]][playerCoord[1]] = " *"
            break
        case "W":
            map[playerCoord[0]][playerCoord[1]] = newValue
            playerCoord[1]--
            map[playerCoord[0]][playerCoord[1]] = " *"
            break
    }
}



while (!goalFound) {

    setTimeout(() => {
        showMap(map)
        showStep(step)
    }, 1000)


    while (!movedThisTurn) {
        // on sonde les devant, à gauche et à droite

        console.log(checkDir(playerCoord, dir[indexDir]))

        // d'abord les cases non visitées
        if (checkDir(playerCoord, dir[indexDir]) === "  ") {
            // si pas de mur ET pas visitée on avance
            step++
            movePlayer(playerCoord, dir[indexDir])
            movedThisTurn = true
        } else {
            failures++
            indexDir += failures
        }

    }




    // secu pour éviter la boucle infinie
    if (step > 100) {
        goalFound = true
    }

}
