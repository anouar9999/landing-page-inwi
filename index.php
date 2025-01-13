<?php
// Mise à jour des sections du site avec un contenu plus immersif et engageant en darija
$sections = [
    'video-intro' => [
        'title' => 'Inwi eLeague 2024',
        'subtitle' => "L'Arena dyal l'Abtal Virtuels",
        'video' => 'video/videoplayback.mp4',
        'description' => 'Marhba bikom f akbar tournoi dyal e-sport f lMaghrib. Werriw lina chno 3andkom f Free Fire w Valorant.',
        'cta' => 'Dkhol l3alam dyal INWI ELEAGUE',
        'cta_link' => 'http://62.60.157.218:3001/auth/auth1/login'

    ],
    'game-showcase' => [
        'title' => 'L3eb m3ana f INWI ELEAGUE!',
        'description' => 'Jouj dyal les jeux, jouj dyal les défis kbar. Wach ghadi tkoun l\'btal dyal Free Fire wla l\'tacticien dyal Valorant? L\'choix 3andek.',
        'games' => [
            'Free Fire' => [
                'image' => 'image/freefire_poster.png',
                'slogan' => 'Ghir li 9wi li ghadi ib9a',
                'description' => 'Battle Royale 3la l\'mobile, l3iba fiha excitement. Khasek strategy w reflexes rapides bach treb7 contre 49 joueurs khrin.',
                'link' => 'http://62.60.157.218:3001/auth/auth1/login'
            ],
            'Valorant' => [
                'image' => 'image/valorant_poster.png',
                'slogan' => 'Precision w Teamwork',
                'description' => '5v5 3la PC. Khasek tkoun mzian f l\'aim w strategy. Ghadi twa9ef ahsan les joueurs f lMaghrib f des duels.',
                'link' => 'http://62.60.157.218:3001/auth/auth1/login'
            ]
        ]
    ],
    'tournament-overview' => [
        'title' => 'Tri9 l Glory',
        'description' => 'Had tri9 machi sahla, walakin fiha l\'honneur w l\'gloire. Ghadi tel3bo m3a ahsan les joueurs f lMaghrib, w twerriw lblad kamla chno 3andkom.',
        'features' => [
            'Free Fire' => 'Battle Royale 3la l\'mobile, dir team dyal 4 w chouf chkoun li ghadi ib9a lekher. 4 dyal les phases bach twsel l finale.',
            'Valorant' => 'L3ba tactique 3la PC, khasek tkoun mzian f l\'aim w strategy. Ghadi twa9ef ahsan les joueurs f lMaghrib f des duels.',
            'Conditions' => 'Khasek tkoun faye9 16 ans, tkoun maghribi, w ma3andekch lwe9t tdi3o hit les places mahdoudin.',
            'Finale' => 'Round robin bach n3erfo chkoun huwa l\'btal l\'ha9i9i dyal lMaghrib.'
        ],
        'cta' => 'Chouf kifach tcharek m3ana',
        'cta_link' => 'http://62.60.157.218:3001/auth/auth1/login'

    ],
    'cashprize' => [
        'title' => 'Rbe7 w welli mchhor',
        'description' => '250,000 dh f l\'jeu, ghir werrina chno 3andek. Rbe7 w welli une légende m3roufa f lblad kamla.',
        'prizes' => [
            'Premier prix' => '100,000 DH',
            'Deuxième prix' => '50,000 DH',
            'Troisième prix' => '25,000 DH',
            'Autres prix' => '75,000 DH en prix additionnels'
        ]
    ],
    'how-to-participate' => [
        'title' => 'Join the INWI ELEAGUE Adventure',
        'description' => 'Ready to showcase your gaming skills? Follow these simple steps to become part of the most exciting e-sports event in Morocco!',
        'steps' => [
            'Sign Up' => 'Create your account on our official platform. It\'s quick, easy, and free!',
            'Choose Your Game' => 'Select your battlefield: Free Fire or Valorant. Master one or dominate both!',
            'Form Your Team' => 'Solo player or squad leader? Build your dream team or join forces with other gamers.',
            'Compete & Qualify' => 'Battle through online qualifiers. Show your skills and climb the ranks!',
            'Reach the Finals' => 'Top performers will advance to the grand finale. Are you ready for the spotlight?'
        ],
        'cta' => 'Start Your INWI ELEAGUE Journey Now',
        'cta_link' => 'http://62.60.157.218:3001/auth/auth1/login'
    ],
    'countdown' => [
        'title' => 'L3eb m3ana f INWI ELEAGUE!',
        'description' => 'Ma ttsennach, had l\'forsa ma katjich kul nhar. Wjed rasek mzian bach tkoun f niveau la compétition.',
        'endDate' => '2025-01-01T00:00:00',
        'info' => [
            'Prix total' => '250,000 DH en jeu!',
            'Jeux' => 'Free Fire & Valorant - Mobile & PC',
            'Inscription' => 'Katbda f: 1 janvier 2025',
        ],
        'cta' => 'Sjel daba w rbe7!',
        'cta_link' => 'http://62.60.157.218:3001/auth/auth1/login'
    ]
];
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inwi eLeague 2024</title>

    <!-- Préchargement des ressources critiques -->
    <link rel="preload" href="script.js" as="script">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&family=Roboto:wght@300;400;700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&family=Roboto:wght@300;400;700&display=swap" media="print" onload="this.media='all'">

    <!-- Chargez directement les styles -->
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/header.css">

    <!-- Chargement des styles -->
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/video-intro.css">
    <link rel="stylesheet" href="css/tournament-overview.css">
    <link rel="stylesheet" href="css/game-showcase.css">
    <link rel="stylesheet" href="css/rewards.css">
    <link rel="stylesheet" href="css/countdown.css">
    <link rel="stylesheet" href="css/animations.css">
    <link rel="stylesheet" href="css/utilities.css">
    <link rel="stylesheet" href="css/popups.css">
    <link rel="stylesheet" href="css/glitch.css">
    <link rel="stylesheet" href="css/how-to-participate.css">
    <link rel="stylesheet" href="css/cashprize.css">

    <!-- Chargement différé des scripts non critiques -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/ScrollToPlugin.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/ScrollTrigger.min.js"></script>

    <script src="script.js"></script>
    <!-- Ajoutez ces lignes juste avant la fermeture de la balise </head> -->
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="https://unpkg.com/tippy.js@6"></script>
</head>

<body>
    <div class="glitch-overlay"></div>
    <div id="loading-overlay">
        <div class="loader"></div>
    </div>
    <div class="futuristic-overlay"></div>
    <header class="floating-header">
        <div class="header-content">
            <div class="logo">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/ef/Logo_inwi.svg/2560px-Logo_inwi.svg.png" alt="Inwi eLeague Logo">
            </div>
            <nav aria-label="Navigation principale">
                <ul role="menubar">
                    <?php foreach ($sections as $id => $section): ?>
                        <li role="none">
                            <a href="/<?php echo $id; ?>" class="nav-link" role="menuitem" aria-label="<?php echo ucfirst(str_replace('-', ' ', $id)); ?>">
                                <span class="nav-text"><?php echo ucfirst(str_replace('-', ' ', $id)); ?></span>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </nav>
            <div class="menu-toggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </header>

    <main>
        <section id="video-intro" class="fullscreen-video fullscreen-section">
            <div class="video-overlay"></div>
            <video class="video-background" autoplay loop playsinline muted>
                <source src="<?php echo $sections['video-intro']['video']; ?>" type="video/mp4">
            </video>
            <div class="video-content">
                <h1 class="main-title"><?php echo $sections['video-intro']['title']; ?></h1>
                <p class="intro-description"><?php echo $sections['video-intro']['description']; ?></p>
                <a type="button"   href="<?php echo $sections['video-intro']['cta_link']; ?>" class="cta-button pulse-effect"><?php echo $sections['video-intro']['cta']; ?></a>
            </div>
            <div class="scroll-indicator"></div>
        </section>

        <?php foreach ($sections as $id => $section): ?>
            <?php if ($id !== 'video-intro'): ?>
                <section id="<?php echo $id; ?>" class="fullscreen-section">
                    <div class="section-background"></div>
                    <?php if ($id === 'cashprize'): ?>
                        <?php include 'cashprize_section.php'; ?>
                    <?php else: ?>
                        <div class="section-content">
                            <h2 class="futuristic-title"><?php echo $section['title']; ?></h2>
                            <p class="futuristic-text"><?php echo $section['description']; ?></p>

                            <?php if ($id === 'game-showcase'): ?>
                                <div class="game-showcase">
                                    <?php foreach ($section['games'] as $game => $details): ?>
                                        <div class="game-poster">
                                            <div class="poster-wrapper">
                                                <img src="<?php echo $details['image']; ?>" alt="<?php echo $game; ?>" loading="lazy">
                                                <div class="poster-overlay">
                                                    <h3><?php echo $game; ?></h3>
                                                    <p class="game-slogan"><?php echo $details['slogan']; ?></p>
                                                    <p class="game-description"><?php echo $details['description']; ?>sssssssssss</p>
                                                    <a href="<?php echo $details['link']; ?>" class="game-link" target="_blank" rel="noopener noreferrer">En savoir plus</a>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            <?php elseif ($id === 'tournament-overview'): ?>
                                <div class="features-grid">
                                    <?php foreach ($section['features'] as $feature => $description): ?>
                                        <div class="feature-item">
                                            <h3><?php echo $feature; ?></h3>
                                            <p><?php echo $description; ?></p>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            <?php elseif ($id === 'how-to-participate'): ?>
                                <div class="steps-grid">
                                    <?php foreach ($section['steps'] as $step => $description): ?>
                                        <div class="step-item">
                                            <h3><?php echo $step; ?></h3>
                                            <p><?php echo $description; ?></p>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                                <div class="participation-note">
                                    <p>Note: Everything will take place on our platform. It will be the main hub for the INWI ELEAGUE.</p>
                                </div>
                            <?php elseif ($id === 'countdown'): ?>
                                <?php include 'countdown_section.php'; ?>
                                <?php if (isset($section['cta'])): ?>
                                    <a href="<?php echo $section['cta_link'] ?? '#'; ?>" class="cta-button futuristic-button" data-info="<?php echo $section['cta']; ?>" target="_blank" rel="noopener noreferrer"><?php echo $section['cta']; ?></a>
                                <?php endif; ?>
                            <?php endif; ?>

                            <?php if (isset($section['cta']) && $id !== 'countdown'): ?>
                                <a href="<?php echo $section['cta_link'] ?? '#'; ?>" class="cta-button futuristic-button" data-info="<?php echo $section['cta']; ?>" target="_blank" rel="noopener noreferrer"><?php echo $section['cta']; ?></a>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                </section>
            <?php endif; ?>
        <?php endforeach; ?>
    </main>

    <footer class="futuristic-footer">
        <!-- Contenu du footer -->
    </footer>

    <script src="script.js"></script>
    <!-- À la fin du body, juste avant la fermeture de la balise </body> -->
    <!-- <div id="promo-popup-container" class="promo-popup-container" aria-live="polite">
        <?php
        $promos = [
            [
                'title' => "Fibre Optique 20 Méga",
                'price' => "249 dh/mois",
                'content' => [
                    "Débit : 50 Méga pendant 3 mois, puis 20 Méga",
                    "Appels : 2 heures d'appels vers tous les mobiles nationaux",
                    "Bonus : Appels illimités vers tous les fixes nationaux"
                ],
                'cta' => "Je teste mon éligibilité"
            ],
            [
                'title' => "Fibre Optique 50 Méga",
                'price' => "349 dh/mois",
                'content' => [
                    "Débit : 100 Méga pendant 3 mois, puis 50 Méga",
                    "Appels : 3 heures d'appels vers tous les mobiles nationaux",
                    "Bonus : Appels illimités vers tous les fixes nationaux"
                ],
                'cta' => "Je teste mon éligibilité"
            ],
            [
                'title' => "Fibre Optique 100 Méga",
                'price' => "449 dh/mois",
                'content' => [
                    "Débit : 200 Méga pendant 3 mois, puis 100 Méga",
                    "Appels : 4 heures d'appels vers tous les mobiles nationaux et internationaux (Zone 1)",
                    "Bonus : Appels illimités vers tous les fixes nationaux"
                ],
                'cta' => "Je teste mon éligibilité"
            ],
            [
                'title' => "Fibre Optique 200 Méga",
                'price' => "649 dh/mois",
                'content' => [
                    "Débit : 200 Méga",
                    "Appels : 6 heures d'appels vers tous les mobiles nationaux et internationaux (Zone 1)",
                    "Bonus : Appels illimités vers tous les fixes nationaux"
                ],
                'cta' => "Je teste mon éligibilité"
            ]
        ];
        foreach ($promos as $index => $promo): ?>
            <div class="promo-popup" data-index="<?php echo $index; ?>">
                <h3><?php echo $promo['title']; ?></h3>
                <p class="promo-price"><?php echo $promo['price']; ?></p>
                <ul class="promo-features">
                    <?php foreach ($promo['content'] as $feature): ?>
                        <li>
                            <?php if (strpos($feature, "Débit") !== false): ?>
                                <img src="image/Frame_171.webp" alt="Débit" class="feature-icon">
                            <?php elseif (strpos($feature, "Appels") !== false): ?>
                                <img src="image/Appels_2x.webp" alt="Appels" class="feature-icon">
                            <?php endif; ?>
                            <?php echo $feature; ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
                <a href="https://inwi.ma/particuliers/offres-internet/wifi-a-la-maison/fibre-optique" class="cta-button futuristic-button" target="_blank" rel="noopener noreferrer"><?php echo $promo['cta']; ?></a>
                <button class="close-popup" aria-label="Fermer la popup">×</button>
            </div>
        <?php endforeach; ?>
    </div>

    <div id="reasons-popup" class="reasons-popup">
        <h3>Les bonnes raisons pour choisir la Fibre inwi</h3>
        <div class="reasons-grid">
            <div class="reason-item">
                <img src="https://inwi.ma/_next/image?url=http%3A%2F%2Fmscontent-galaxie%3A8080%2Fapi%2Fv1%2Fms-content%2Fmedia%2Ffibercoverage1.png&w=128&q=75" alt="Gamme complète de débits">
                <p>Gamme complète de débits: <b>20 Méga, 50 Méga,100 Méga et 200 Méga</b></p>
            </div>
            <div class="reason-item">
                <img src="https://inwi.ma/_next/image?url=http%3A%2F%2Fmscontent-galaxie%3A8080%2Fapi%2Fv1%2Fms-content%2Fmedia%2Ffibercoverage2.png&w=128&q=75" alt="Adaptée à votre budget">
                <p>La Fibre inwi est <b>adaptée à votre budget</b> et à votre usage en connexion internet</p>
            </div>
            <div class="reason-item">
                <img src="https://inwi.ma/_next/image?url=http%3A%2F%2Fmscontent-galaxie%3A8080%2Fapi%2Fv1%2Fms-content%2Fmedia%2FadslCoverage2.png&w=128&q=75" alt="Equipement fibre">
                <p><strong>Equipement fibre mis à votre disposition</strong> à 150dh durant toute la période de votre abonnement. Les 150dh sont remboursables automatiquement sur la 3ème facture</p>
            </div>
            <div class="reason-item">
                <img src="https://inwi.ma/_next/image?url=http%3A%2F%2Fmscontent-galaxie%3A8080%2Fapi%2Fv1%2Fms-content%2Fmedia%2FadslCoverage1.png&w=128&q=75" alt="Installation gratuite">
                <p><b>Installation gratuite</b> quelque soit votre forfait</p>
            </div>
            <div class="reason-item">
                <img src="https://inwi.ma/_next/image?url=http%3A%2F%2Fmscontent-galaxie%3A8080%2Fapi%2Fv1%2Fms-content%2Fmedia%2FGroup_4376.png&w=128&q=75" alt="Satisfait ou remboursé">
                <p><b>Satisfait ou remboursé</b> pendant 8 jours</p>
            </div>
        </div>
        <button class="close-reasons" aria-label="Fermer les raisons">×</button>
    </div> -->
    <script>
        // Chargement différé des polices
        WebFontConfig = {
            google: {
                families: ['Orbitron:400,700', 'Roboto:300,400,700']
            }
        };
        (function(d) {
            var wf = d.createElement('script'),
                s = d.scripts[0];
            wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js';
            wf.async = true;
            s.parentNode.insertBefore(wf, s);
        })(document);

        // Initialisation des animations GSAP
        gsap.registerPlugin(ScrollTrigger);

        // Animation d'entrée pour les raisons
        gsap.utils.toArray('.reason-item').forEach((item, index) => {
            gsap.from(item, {
                opacity: 0,
                y: 50,
                duration: 0.8,
                delay: index * 0.2,
                scrollTrigger: {
                    trigger: item,
                    start: "top 80%",
                    toggleActions: "play none none reverse"
                }
            });
        });

        // Animation du bouton de fermeture
        gsap.from('.close-reasons', {
            opacity: 0,
            scale: 0.5,
            duration: 0.5,
            delay: 1,
            ease: "back.out(1.7)"
        });

        // Gestion de l'ouverture/fermeture de la popup des raisons
        const reasonsPopup = document.getElementById('reasons-popup');
        const closeReasonsBtn = document.querySelector('.close-reasons');

        closeReasonsBtn.addEventListener('click', () => {
            gsap.to(reasonsPopup, {
                opacity: 0,
                y: 50,
                duration: 0.5,
                onComplete: () => reasonsPopup.style.display = 'none'
            });
        });

        // Fonction pour ouvrir la popup des raisons (à appeler quand nécessaire)
        function openReasonsPopup() {
            reasonsPopup.style.display = 'block';
            gsap.from(reasonsPopup, {
                opacity: 0,
                y: -50,
                duration: 0.5
            });
        }
    </script>
    <!-- Ajoutez cette ligne juste avant la fermeture de la balise </body> -->
    <script src="particles.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const prizeAmount = document.querySelector('.prize-amount');
            const target = parseInt(prizeAmount.getAttribute('data-target'));
            const duration = 2000; // 2 secondes
            const steps = 100;
            const stepValue = target / steps;
            let current = 0;

            const timer = setInterval(function() {
                current += stepValue;
                if (current > target) {
                    clearInterval(timer);
                    current = target;
                }
                prizeAmount.textContent = Math.floor(current).toLocaleString();
            }, duration / steps);
        });
    </script>



</body>

</html>
