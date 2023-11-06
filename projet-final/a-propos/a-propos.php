<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>Bootstrap demo</title>
    <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" rel="stylesheet" />
    <link href="http://fonts.googleapis.com/css?family=Monument:400,300,700" rel="stylesheet" type="text/css" />
    <link href="http://fonts.googleapis.com/css?family=Poppins:400,300,700" rel="stylesheet" type="text/css" />
    <LINK REL="stylesheet" TYPE="text/css" HREF="styles.css">
</head>

<body>
    <div class="container-fluid">
        <section id="1r-paragraf">
            <br />
            <div class="section-title">
            </div>
            <h1 style="color: #f22dbb; justify-content: center;margin-bottom: 1.8em ">À PROPOS DE RETROWAVECINEMA</h1>
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="image">
                        <img class="img-fluid" margin-left:="" src="quebec1.jpg " style="border-radius: 3em " width="700 " />
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="content pt-4 pt-lg-0 pl-0 pl-lg-3">
                        <h2>"Bienvenue sur RetroWaveCinema!</h2>
                        <p>
                        <h2>sommes un groupe d'amis de Québec passionnés par la culture rétro et le cinéma, et nous avons créé ce site web pour partager notre amour pour ces deux mondes fascinants.</h2>
                        </p>
                    </div>
                </div>
            </div>
    </div>
    </section>
    <section id="miami">
        <div class="row justify-content-center my-4 g">
            <img class="img-fluid" src="miami.svg" style="max-width: 450px;margin-top: 12%;" />
        </div>
    </section>
    <section id="2eme-paragraf">
        <div class="container-fluid">
            <br />
            <div class="section-title">
                <h1 style="color: #f22dbb; justify-content: center;margin-bottom: 1.8em ">NOTRE MISSION</h1>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="image-1">
                        <img class="img-fluid" src="Cassette.png " width="600" />
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="content pt-4 pt-lg-0 pl-0 pl-lg-3">
                        <p class="poppins">
                        <h2 style="color: #fcfbfb ">"Notre mission est de vous transporter dans une époque révolue, celle des années 80 et 90, à travers une sélection soigneusement choisie de films, de musiques, et d'autres médias liés à cette ère nostalgique."</h2>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="3r-paragraf">
        <div class="container-fluid">
            <br />
            <div class="section-title">
            </div>
            <h1 style="color: #f22dbb; justify-content: center;margin-bottom: 2em; margin-top: 2.0em">CE QUE NOUS OFFRONS
            </h1>
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="content pt-4 pt-lg-0 pl-0 pl-lg-3">
                        <p>
                        <h2 style="color: #fcfbfb;text-align: center; margin-left: unset">"Sur notre site, vous trouverez une collection de critiques de films rétro, des recommandations de bandes sonores rétro, des articles sur les tendances cinématographiques de l'époque, et bien plus encore. Nous travaillons constamment
                            pour ajouter du contenu qui ravira les amateurs de rétro et de cinéma."
                        </h2>
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col">
                    <button class="btn btn-custom-blue">PARCOUREZ NOS FILMS</button>
                </div>
            </div>
        </div>
    </section>
    <section id="4r-paragraf">
        <div class="container-fluid">
            <br />
            <div class="section-title">
                <h1 style="color: #f22dbb; justify-content: center;margin-bottom: 2em; margin-top: 2.0em">NOTRE EQUIPE
                </h1>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="image-2">
                        <img class="img-fluid" src="amies.svg" width="600" />
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="content pt-4 pt-lg-0 pl-0 pl-lg-3">
                        <p>
                        <h2 style="color: #fcfbfb;text-align: center; margin-left: unset">"Nous sommes un groupe d'amis passionnés par le rétro et le cinéma, avec des compétences variées en matière de rédaction, de design, et de création de contenu. Découvrez qui nous sommes et ce que nous apportons à ce projet
                            sur notre page d'équipe."
                        </h2>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="formulaire " style="background-image:url(back.png);/* max-width: -webkit-fill-available; *//* max-height: 1000px; */width: auto;height: 1020px;">
        <div class="container-fluid">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $serveur = "localhost";
                $utilisateur = "root";
                $mot_de_passe = "Mama2019";
                $base_de_donnees = "la_base_de_donnees";

                try {
                    $connexion = new PDO("mysql:host=$serveur;dbname=$base_de_donnees", $utilisateur, $mot_de_passe);
                    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                    $nom = $_POST['nom'];
                    $email = $_POST['email'];
                    $message = $_POST['message'];

                    $requete = $connexion->prepare("INSERT INTO messages (nom, email, message) VALUES (:nom, :email, :message)");
                    $requete->bindParam(':nom', $nom);
                    $requete->bindParam(':email', $email);
                    $requete->bindParam(':message', $message);
                    $requete->execute();

                    echo "Le message a été enregistré avec succès.";
                } catch (PDOException $error) {
                    echo "Error: " . $error->getMessage();
                }
            }

            ?>
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div class="section-title">
                    <h1 style="color: #f22dbb; justify-content: center;margin-bottom: 2em; margin-top: 2.0em; ">CONTACT</h1>
                </div>
                <div class="container-fluid">
                    <form id="contactForm" method="post" action="">
                        <div class="form-group">
                            <label for="nom"></label>
                            <input type="text" class="form-control" id="name" name="nom" placeholder="VOTRE NOM" required="" style="border-radius: 3em;height: 5.5em;margin-bottom: 5em;">
                        </div>

                        <div class="form-group">
                            <label for="email"></label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="VOTRE EMAIL" required="" style="border-radius: 3em;height: 5.5em;margin-bottom: 3em;">
                        </div>

                        <div class="form-group">
                            <label for="message" style="margin-bottom: 3em;text-align: center;font-family: 'Poppins';font-size: 1em;">Ecrivez nous un message on va vous répondre le plus vite possible</label>
                            <textarea class="form-control" id="message" name="message" rows="4" placeholder="VOTRE MESSAGE" required="" style="height: 22em;border-radius: 3em;text-align: left;margin-bottom: 4em;">VOTRE MESSAGE</textarea>
                        </div>

                        <button type="submit" class="btn btn-primary" style="/* margin-left: 1.5em; */height: 4.5em;border-radius: 4em;width: 100%;font-family: 'Poppins';font-size: 20px;margin-bottom: 8em;">ENVOYEZ</button>
                    </form>
                </div>
        </div>
        </div>

        <script crossorigin="anonymous " integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r " src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js "></script>
        <script crossorigin="anonymous " integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+ " src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js "></script>

</body>

</html>