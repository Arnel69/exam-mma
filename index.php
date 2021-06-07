<!doctype html>
<html lang="en">
 
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./css/style.css" />
    <title>MMA FIGHT CLUB</title>
</head>
<body>

<?php include('header.php'); ?>


<div class="jumbotron"></div>

<div class="col-md-12">
    <h1>Quelqu'un doit être le meilleur ? <br> Pourquoi pas vous ?</h1>
    <h2>Du matériel de qualité, pour des séances réussies<br>
        Chez MMA FIGHT CLUB, tes entraînements sont notre priorité quel que soit ton niveau.<br>
    </h2>
</div>

<br>
<br>
<br>
<?php if (isset($_POST['activite'])):?>
    <div class="col-md-12">
        <div class="col-md-12">
            <img src="./img/mmasalle.jpg" id="imgsalle">
        </div>
        <div class="col-md-6">
            <h3>Nos activités</h3>
            <br>
            <p>
                Les activités sportives apportent beaucoup de bienfaits pour l’organisme.
                <br>
                Pratiquer un exercice physique quotidien permet de rallonger l’espérance de vie, sans oublier
                l’effet immédiat du sport qui permet de libérer de l’endorphine dans le corps et
                procure la sensation de bien-être. <br>
                <br>
                Outre la santé, les motivations qui nous poussent à s’inscrire dans un club de
                sport sont multiples et peuvent évoluer au fur et à mesure de notre implication
                dans les programmes d’entrainement : remise en forme, prise de masse, perte de poids,
                endurance, rééducation
            </p>
        </div>
    </div>
<?php endif ?>

<br>
<br>
<br>
<br>
<br>
<br>
<br>


<?php if (isset($_POST['installation'])):?>
    <div class="col-md-12">

            <div class="col-md-12"><img src="./img/photo-1540497077202-7c8a3999166f.webp" id="imgsalle2"></div>
            <br>
            <br>
            <div class="col-md-12">
                <h3 class="float-right">Nos Instalation</h3>

                <p id="p2">
                    <br>
                    <br>

                    Pour te permettre de te surpasser à chaque séance, nos clubs sont équipés de matériel <br>
                    et équipements sportifs de qualité dernière génération sur l’ensemble des espaces.<br>
                    <br>
                    Nous proposons les meilleures solutions et produits du marché grâce à nos partenaires machines,<br>
                    pour que chacun de tes passages chez MMA FIGHT CLUB soit la meilleure expérience qui soit. <br>
                    <br>
                    Rendre la pratique sportive accessible aux personnes en situation de handicap
                    est l'une des priorités chez NOUS.
                    <br>
                    <br>
                    De manière à rendre accessibles les bâtiments et les instaltions aux personnes à mobilité réduite, <br>
                    les vestiaires et les sanitaires sont faits de manière à simplifier leurs déplacements. <br>
                    Des rampes d'une largeur de 90 cm sont créée afin de rendre chaque partie de la salle disponible à tous
                </p>

            </div>
    </div>
<?php endif ?>

<br>
<br>
<br>
<br>


<h2>nos activités associé</h2>

<div class="col-md-13">
    <table class="table table-sm">
        <tbody>

            <tr>
                <th scope="row"></th>
                <td>Box Française<br>
                    <p>Pieds / poings</p>
                </td>
                <td>Box Anglaise<br>
                    <p>Coup de poing / Frappe</p>
                </td>
            </tr>
            <tr>
                <th scope="row"></th>
                <td>Box thai <br>
                    <p>Pieds / Poings / Coudes / Genoux.</p>
                </td>
                <td>Jujitsu<br>
                    <p>Combat au sol / Pas de percutions.</p>
                </td>
            </tr>
            <tr>
                <th scope="row"></th>
                <td>Grappling<br>
                    <p>Combat au sol / Pas de percutions.</p>
                </td>
                <td>Box cardio<br>
                    <p>Boostez votre endurance.</p>
                </td>
            </tr>
            <tr>
                <th scope="row"></th>
                <td>Krav Maga<br>
                    <p>Self defense / Combat rapproché.</p>
                </td>
                <td>Sparring<br>
                    <p>Entrainement commun à de nombreux arts martiaux</p>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<br>
<br>
<br>
<br>
<br>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
</body>
</html>