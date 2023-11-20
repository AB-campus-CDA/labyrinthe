Constantes : Direction = [V +1, H +1, V -1, H -1]
Variables : Echec = 0
            indexDir = 0

0 / Je peux avancer dans la direction en cours ?
    NON : Echec = Echec + 1, indexDir = indexDir + Echec
    OUI : Je suis sur une case enregistrée ?
        NON : J'enregistre la case, Echec = 0, je me déplace dans la direction en cours et je passe à l'étape 1
        OUI : Echec = 0, je me déplace dans la direction en cours et je passe à l'étape 1
1 / Je suis sur la case d'arrivée ?
    OUI : J'ai gagné
    NON : Je suis sur une case enregistrée ?
        NON : Je retourne à l'étape 0
        OUI : indexDir = indexDir - 1, et je retourne à l'étape 0
