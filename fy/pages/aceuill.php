<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ISAM : Votre Porte Vers l'Avenir Technologique</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body, html {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
        }

        .hero {
            background-color: #2c3e50;
            color: white;
            padding: 60px 20px;
            text-align: left;
        }

        .hero-content {
            max-width: 1200px;
            margin: 0 auto;
        }

        .hero-text {
            max-width: 600px;
        }

        .discover-button {
            background-color: #3498db;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            display: inline-block;
            margin-top: 15px;
            transition: background-color 0.3s ease;
        }

        .discover-button:hover {
            background-color: #2980b9;
            text-decoration: none;
            color: white;
        }

        .main-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .section {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            margin-bottom: 30px;
            padding: 30px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .section:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 12px rgba(0,0,0,0.2);
        }

        .section h2 {
            color: #2c3e50;
            margin-bottom: 20px;
        }

        .section ul li {
            margin-bottom: 10px;
            color: #2c3e50;
            padding-left: 15px;
            position: relative;
        }

        .section ul li::before {
            content: '• ';
            color: #3498db;
            position: absolute;
            left: 0;
            font-weight: bold;
        }

        .btn-primary {
            background-color: #3498db;
            border-color: #3498db;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #2980b9;
            border-color: #2980b9;
            transform: translateY(-2px);
        }

        .competition-images {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .competition-images img {
            max-width: 30%;
            border-radius: 10px;
            transition: transform 0.3s ease;
        }

        .competition-images img:hover {
            transform: scale(1.05);
        }

        @media (max-width: 768px) {
            .main-content {
                padding: 10px;
            }

            .competition-images {
                flex-direction: column;
            }

            .competition-images img {
                max-width: 100%;
                margin-bottom: 15px;
            }
        }

        .projects-gallery {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .projects-gallery img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            border-radius: 10px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .projects-gallery img:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 15px rgba(0,0,0,0.2);
        }

        @media (max-width: 768px) {
            .projects-gallery {
                grid-template-columns: 1fr;
            }
        }

    </style>
</head>
<body>
    <div class="hero">
        <div class="hero-content">
            <div class="hero-text">
                <h1>L'Université Informatique Statistique Appliquée et Mathématique (ISAM)</h1>
                <p>Vous êtes passionné(e) par les nouvelles technologies, l'innovation et la transformation numérique ? L'Université vous offre une formation d'excellence.</p>
                <a href="#" class="discover-button">Découvrir le programme</a>
            </div>
        </div>
    </div>

    <div class="main-content container-fluid">

        <section class="section projects">
            <h2 class="text-primary">Projets et Réalisations des Étudiants</h2>
            <p>Découvrez les projets innovants et les compétitions auxquels nos étudiants participent :</p>
            <div class="projects-gallery">
                <img src="projet1.jpg" alt="Projet 1">
                <img src="projet2.jpg" alt="Projet 2">
                <img src="projet3.jpg" alt="Projet 3">
                <img src="projet4.jpg" alt="Projet 4">
                <img src="projet5.jpg" alt="Projet 5">
                <img src="projet6.jpg" alt="Projet 6">
            </div>
        </section>
    </div>
        <div class="row">
            <div class="col-12">
                <section class="section project-explanation">
                    <h2 class="text-primary">Approche Pédagogique</h2>
                    <p>À l'ISAM, l'apprentissage se fait par projets concrets. Nos étudiants développent des compétences en :</p>
                    <ul>
                        <li>Programmation</li>
                        <li>Cybersécurité</li>
                        <li>Intelligence Artificielle</li>
                        <li>Développement Web</li>
                    </ul>
                </section>

                <section class="section competitions">
                    <h2 class="text-primary">Compétitions et Défis</h2>
                    <p>Nos compétitions encouragent l'innovation :</p>
                    <ul>
                        <li>Hackathons</li>
                        <li>Concours de développement web</li>
                        <li>Compétitions d'algorithmes</li>
                        <li>Défis en cybersécurité</li>
                    </ul>
                    <div class="competition-images">
                        <img src="competition1.jpg" alt="Compétition 1">
                        <img src="competition2.jpg" alt="Compétition 2">
                        <img src="competition3.jpg" alt="Compétition 3">
                    </div>
                </section>

                <section class="section inscription">
                    <h2 class="text-primary">Formulaire d'Inscription</h2>
                    <form action="inscription.php" method="POST">
                        <div class="form-group">
                            <label for="nom">Nom :</label>
                            <input type="text" class="form-control" id="nom" name="nom" required>
                        </div>
                        <div class="form-group">
                            <label for="prenom">Prénom :</label>
                            <input type="text" class="form-control" id="prenom" name="prenom" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email :</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="telephone">Téléphone :</label>
                            <input type="tel" class="form-control" id="telephone" name="telephone" required>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">S'inscrire</button>
                    </form>
                </section>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
