# PSEUDO-CODE DE LA "fourmie inverse"


Constantes : Direction = [V +1, H +1, V -1, H -1]
Variables : Echec = 0
            indexDir = 0
            riz = 0
            mode = explorateur // explorateur ou retour
            liste_carrefours = [] // un carrefour est représenté par le nombre de grain de riz dessus


0 / Je peux avancer dans la direction en cours sur une case non visitée ?
    OUI : Je passe à l'étape 3 ---
    NON : Echec === 3 ? (blocage) ----
        NON : Echec = Echec + 1, indexDir = indexDir + Echec et je retourne à l'étape 0 ---
        OUI : Je passe à l'étape 1 ----


// est-ce qu'il y a un carrefour a visiter avant ?
1 / si liste_carrefours vide :
    OUI : Echec = 0 et je passe à l'étape 2 (retour vers carrefour)
    NON : Echec = 0, indexDir = indexDir + 2 et je passe à l'étape 2 (je reviens sur mes pas dans ce carrefour)


// si pas le choix, je cherche une case déjà visitée avec le moins de riz
2 / je teste chaque direction : n, n+1, n+2, n+3 et je retiens la direction avec le moins de riz
    Puis je passe à l'étape 3


// je me déplace (enregistrement si besoin)
3 / Je dépose le nombre de gdr, je me déplace dans la direction en cours et je passe à l'étape 4


// je vérifie la ou j'arrive
4 / Je suis sur la case d'arrivée ?
    OUI : J'ai gagné !!
    NON : Echec = 0 et je retourne à l'étape 0




si indexDir === 4 => indexDir = 0
si indexDir === -1 => indexDir = 3

================================================




si Echec === 4 => Echec = 0

```