<!DOCTYPE html>
<html>
<head>
    <title>Exercices PHP</title>
</head>
<body>
    <h1>Exercices PHP</h1>

    <!-- Exercice 1 -->
    <h2>1. Tableau associatif étudiant</h2>
    <?php
    $etudiant = [
        'nom' => 'Doe',
        'prenom' => 'John',
        'matricule' => '123456'
    ];
    echo "Nom : " . $etudiant['nom'] . "<br>";
    echo "Prénom : " . $etudiant['prenom'] . "<br>";
    echo "Matricule : " . $etudiant['matricule'];
    ?>

    <!-- Exercice 2 -->
    <h2>2. Ajouter une clé et modifier sa valeur</h2>
    <?php
    $etudiant['note'] = 15;
    $etudiant['note'] = 18; // Modification
    echo "Nom : " . $etudiant['nom'] . "<br>";
    echo "Note : " . $etudiant['note'];
    ?>

    <!-- Exercice 3 -->
    <h2>3. Parcourir un tableau associatif de produits</h2>
    <?php
    $produits = [
        'Produit1' => 100,
        'Produit2' => 200,
        'Produit3' => 150
    ];
    foreach ($produits as $nom => $prix) {
        echo "$nom coûte $prix DH<br>";
    }
    ?>

    <!-- Exercice 4 -->
    <h2>4. Moyenne des scores</h2>
    <?php
    $scores = [
        'Étudiant1' => 12,
        'Étudiant2' => 15,
        'Étudiant3' => 18,
        'Étudiant4' => 14,
        'Étudiant5' => 16
    ];
    $moyenne = array_sum($scores) / count($scores);
    echo "La moyenne des scores est : $moyenne";
    ?>

    <!-- Exercice 5 -->
    <h2>5. Tri d'un tableau par population</h2>
    <?php
    $pays = [
        'Maroc' => 37000000,
        'France' => 67000000,
        'Espagne' => 47000000
    ];
    arsort($pays); // Tri par ordre décroissant
    foreach ($pays as $nom => $population) {
        echo "$nom : $population habitants<br>";
    }
    ?>

    <!-- Exercice 6 -->
    <h2>6. Formulaire avec récupération via $_POST</h2>
    <form method="POST">
        Nom : <input type="text" name="nom"><br>
        Âge : <input type="text" name="age"><br>
        <button type="submit" name="submit_ex6">Envoyer</button>
    </form>
    <?php
    if (isset($_POST['submit_ex6'])) {
        $nom = $_POST['nom'];
        $age = $_POST['age'];
        echo "Bienvenue, $nom, vous avez $age ans !";
    }
    ?>

    <!-- Exercice 7 -->
    <h2>7. Validation simple</h2>
    <form method="POST">
        Âge : <input type="text" name="age_validation"><br>
        <button type="submit" name="submit_ex7">Envoyer</button>
    </form>
    <?php
    if (isset($_POST['submit_ex7'])) {
        $age = $_POST['age_validation'];
        if (!is_numeric($age) || $age <= 0) {
            echo "L'âge doit être un entier supérieur à 0.";
        } else {
            echo "Bienvenue, vous avez $age ans !";
        }
    }
    ?>

    <!-- Exercice 8 -->
    <h2>8. Liste déroulante pour choisir une couleur</h2>
    <form method="POST">
        Choisissez une couleur :
        <select name="couleur">
            <option value="rouge">Rouge</option>
            <option value="vert">Vert</option>
            <option value="bleu">Bleu</option>
        </select>
        <button type="submit" name="submit_ex8">Envoyer</button>
    </form>
    <?php
    if (isset($_POST['submit_ex8'])) {
        $couleur = $_POST['couleur'];
        echo "Votre couleur préférée est : $couleur";
    }
    ?>

    <!-- Exercice 9 -->
    <h2>9. Somme de deux nombres</h2>
    <form method="GET">
        Nombre 1 : <input type="text" name="nombre1"><br>
        Nombre 2 : <input type="text" name="nombre2"><br>
        <button type="submit" name="submit_ex9">Calculer</button>
    </form>
    <?php
    if (isset($_GET['submit_ex9'])) {
        $nombre1 = $_GET['nombre1'];
        $nombre2 = $_GET['nombre2'];
        echo "La somme est : " . ($nombre1 + $nombre2);
    }
    ?>

    <!-- Exercice 10 -->
    <h2>10. Type de compte avec message conditionnel</h2>
    <form method="POST">
        Type de compte :
        <select name="type">
            <option value="Administrateur">Administrateur</option>
            <option value="Utilisateur">Utilisateur</option>
        </select>
        <button type="submit" name="submit_ex10">Envoyer</button>
    </form>
    <?php
    if (isset($_POST['submit_ex10'])) {
        $type = $_POST['type'];
        if ($type == 'Administrateur') {
            echo "Bienvenue, administrateur !";
        } else {
            echo "Bienvenue, utilisateur simple !";
        }
    }
    ?>
</body>
</html>
