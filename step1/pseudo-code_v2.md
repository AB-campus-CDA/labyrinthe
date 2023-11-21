Constantes : Direction = [V +1, H +1, V -1, H -1]
Variables : Echec = 0
            indexDir = 0


// je cherche une case adjacente NON enresgistrée
0 / Je peux avancer dans la direction en cours sur une case non enregistrée ?
    OUI : Je passe à l'étape 1
    NON : Echec === 3 ?
        NON : Echec = Echec + 1, indexDir = indexDir + Echec et je retourne à l'étape 0
        OUI : Echec = 0, indexDir = indexDir -2 et je passe à l'étape 0 bis


// si pas le choix, je cherche une case déjà enregistrée
0 bis / Je peux avancer dans la direction en cours sur une case non enregistrée ?
    OUI : Je passe à l'étape 1
    NON : Echec = Echec + 1, indexDir = indexDir + Echec et je retourne à l'étape 0


// je me déplace (enregistrement si besoin)
1 / Je suis sur une case enregistrée ?
    NON : J'enregistre la case, je me déplace dans la direction en cours et je passe à l'étape 2
    OUI : Je me déplace dans la direction en cours et je passe à l'étape 2 // il faut privilégier la direction vers une case non enregistrée


// je vérifie la ou j'arrive
2 / Je suis sur la case d'arrivée ?
    OUI : J'ai gagné !!
    NON : Echec = 0 et je retourne à l'étape 0




si indexDir === 4 => indexDir = 0
si indexDir === -1 => indexDir = 3

================================================


    NON : Je suis sur une case enregistrée ?
        NON : Echec = 0 et je retourne à l'étape 0
        OUI : Echec === 0 ?
            OUI : indexDir = indexDir + 1, et je retourne à l'étape 0
            NON : indexDir = indexDir + Echec et je retourne à l'étape 0 // echec = 0 ?



si Echec === 4 => Echec = 0

```