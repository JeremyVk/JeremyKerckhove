
<?php session_start();?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Développeur Web Freelance basé à Puget sur Argens, non loin de Saint Raphaël/Frejus. Jérémy Kerckhove réalise vos sites vitrines sur mesure ainsi que vos E-commerces ">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&family=PT+Serif:wght@400;700&display=swap"
        rel="stylesheet">
    <title>Jérémy Kerckhove</title>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-5FZ71TZ3EF"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-5FZ71TZ3EF');
</script>
</head>

<body>
    <!-- Header -->
    <header>
        <!-- DESKTOP NAV -->
        <nav class="desktop-nav">
            <ul>
                <li><a href="#presentation">Présentation</a> </li>
                <li><a href="#mes-real">Mes réalisations</a> </li>
                <li><a href="#contact">Me contacter</a> </li>
            </ul>
        </nav>
        <svg class="hamburger" id="hamburger" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
            fill="currentColor">
            <path fill-rule="evenodd"
                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                clip-rule="evenodd"></path>
        </svg>
        <!-- MOBILE NAV -->
        <nav class="mobile-nav">
            <ul>
                <li><a href="#presentation">Présentation</a> </li>
                <li><a href="#mes-real">Mes réalisations</a> </li>
                <li><a href="#contact">Me contacter</a> </li>
            </ul>
        </nav>
        <div class="logo">
            <img src="img/logo.png" alt="Logo Jeremy Kerckhove développeur Web">
        </div>
    </header>

    <!-- SECTION PRESTATIONS -->
    <section class="section2">
        <div class="presentation" id="presentation">
            <h1>Création de site Web dans le Var</h1>
            <p>Développeur Web basé à Puget sur Argens, je crée vos sites vitrines sur mesure ainsi que vos E-commerces.
            </p>
            <p>Mon but est de vous satisfaire le plus possible en réalisant toutes vos idées, et de vous guidre tout au
                long de la création de votre projet.</p>
        </div>

        <div class="prestations">
                <div class="item-prestation" id="item1">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="48px" height="48px" viewBox="0 0 48 48" version="1.1">
                            <!-- Generator: Sketch 59 (86127) - https://sketch.com -->
                            <title>designer</title>
                            <desc>Created with Sketch.</desc>
                            <g id="Website" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <path d="M39.929103,44.0670766 L44.1327586,39.8645461 L45.3940804,45.3283983 L39.929103,44.0670766 Z M25.6247468,30.3331844 L24.0337487,28.7421863 L19.259629,23.9680666 L17.6686309,22.3770685 L7.81996972,12.5284073 L12.5929642,7.75428767 L22.4416253,17.6029488 L24.0337487,19.193947 L28.8067431,23.9680666 L30.3977413,25.5590648 L42.8264299,37.9877533 L38.0534354,42.761873 L25.6247468,30.3331844 Z M9.85316185,42.9216479 L6.08269875,44.5373999 L3.46329019,41.9179914 L5.08016738,38.1452779 L17.6675057,25.5590648 L22.4416253,30.3331844 L9.85316185,42.9216479 Z M3.03909902,7.74753662 C2.60703163,7.31434405 2.60815681,6.60098278 3.04585008,6.16216434 L6.22784639,2.98016802 C6.67004036,2.53909923 7.37665058,2.53797405 7.81321867,2.97341697 L11.001966,6.16216434 L6.22784639,10.936284 L3.03909902,7.74753662 Z M37.3940826,5.83361309 L42.1682022,10.6066076 L30.3977413,22.3770685 L25.6247468,17.6018236 L37.3940826,5.83361309 Z M43.3631386,2.2510543 C43.3665141,2.24880395 43.3575127,2.24880395 43.3665141,2.25780535 L45.7440099,4.63530118 C45.750761,4.64205224 45.750761,4.63755154 45.750761,4.63867671 L42.5665143,7.8217982 L40.1800171,5.43530097 L43.3631386,2.2510543 Z M46.0095514,37.9877533 L31.9898646,23.9680666 L41.3423234,14.6156079 L42.2188351,15.4932448 C42.6587787,15.9331884 42.6587787,16.6454245 42.2165847,17.0876184 L37.8013961,21.5016819 C37.3625776,21.9416255 37.3625776,22.6538616 37.8013961,23.0926801 C38.2413397,23.5326237 38.9535758,23.5326237 39.3923942,23.0926801 L43.8075829,18.6797418 C45.1285389,17.3587857 45.1296641,15.2209523 43.8109584,13.9022466 L42.9333215,13.0246097 L43.7592004,12.1976057 L45.3501985,10.6066076 L44.1575125,9.41392153 L47.3417591,6.22967487 C48.2250219,5.34416175 48.2160205,3.92531544 47.3350081,3.04317785 L44.9575123,0.665682022 C44.0674984,-0.224331798 42.6497773,-0.217580745 41.7721404,0.660056145 L38.5878938,3.84430281 L37.3940826,2.6504916 L35.8030844,4.24148976 L35.8019592,4.24148976 L35.8019592,4.24261494 L24.0337487,16.0108255 L9.40421683,1.38241882 C8.08663632,0.0659634808 5.95555392,0.0704641828 4.63684823,1.38916987 L1.45485192,4.57116618 C0.140646937,5.88537116 0.132770709,8.02432979 1.44810087,9.33853477 L4.63684823,12.5272821 L4.94064562,12.8310795 L6.22784639,14.1194055 L16.0765075,23.9680666 L3.18199631,36.8625778 L0.795499078,42.4321966 L2.38649723,44.0231947 L0,46.409692 L1.59099816,48.0006901 L3.97749539,45.6141929 L5.56961872,47.205191 L11.1392374,44.8186938 L24.0337487,31.9241826 L36.4613121,44.3528711 L38.0523102,45.9438693 L46.2030815,47.8251627 C47.404769,48.1019559 48.1698883,47.3480883 47.8897196,46.1373995 L46.0095514,37.9877533 Z" id="designer" fill="#469CDC"/>
                            </g>
                        </svg>
                    </div>
                    <h2>Site Vitrine</h2>
                    <hr class="presta-separator">
                    <p>Maquettaque de votre site vitrine </p>
                    <p>Site Web Responsive</p>
                    <p>Référencement</p>
                    <p>Sur mesure</p>
                    <p>Nom de domaine + Hebergement</p>
                </div>
                <div class="item-prestation"id="item2">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="50px" height="48px" viewBox="0 0 50 48" version="1.1">
                            <!-- Generator: Sketch 59 (86127) - https://sketch.com -->
                            <g id="Website" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <path d="M47.6190476,44.3916 C47.6190476,45.0576 47.0797619,45.6 46.4238095,45.6 L3.57619048,45.6 C2.91428571,45.6 2.38095238,45.0624 2.38095238,44.3916 L2.38095238,18 L2.38095238,13.2 L2.38095238,12 L5.95238095,12 L13.0952381,12 L16.6666667,12 L20.2380952,12 L35.1904762,12 L47.6190476,12 L47.6190476,18 L47.6190476,44.3916 Z M3.57619048,2.4 L5.95238095,2.4 L13.0952381,2.4 L16.6666667,2.4 L20.2380952,2.4 L46.4238095,2.4 C47.0821429,2.4 47.6130952,2.934 47.6178571,3.6 C47.6178571,3.6024 47.6190476,3.6048 47.6190476,3.6084 L47.6190476,9.6 L20.2380952,9.6 L16.6666667,9.6 L13.0952381,9.6 L5.95238095,9.6 L2.38095238,9.6 L2.38095238,3.6084 C2.38095238,3.6048 2.38214286,3.6024 2.38214286,3.6 C2.38690476,2.9388 2.92261905,2.4 3.57619048,2.4 L3.57619048,2.4 Z M46.4238095,0 C48.3964286,0 49.9940476,1.6068 49.9988095,3.6 C49.9988095,3.6024 50,3.606 50,3.6084 L50,3.6084 L50,44.3916 C50,46.3848 48.3928571,48 46.4238095,48 L46.4238095,48 L3.57619048,48 C1.60119048,48 0,46.3884 0,44.3916 L0,44.3916 L0.000595238095,3.6042 L0.000595238095,3.6042 C0.00476190476,2.0364 1.00238095,0.7188 2.38095238,0.222 C2.75595238,0.0864 3.1547619,0 3.57619048,0 L3.57619048,0 Z M27.3807143,17.03184 C27.192619,17.16264 27.0271429,17.33184 26.9378571,17.56224 L26.7688095,18.00024 L22.7509524,28.34664 L19.1295238,37.67784 C18.8890476,38.29464 19.1914286,38.99064 19.8045238,39.23184 C20.417619,39.47304 21.1080952,39.16824 21.347381,38.55264 L22.7509524,34.93344 L27.3807143,23.00664 L29.1545238,18.43704 C29.2104762,18.29304 29.2307143,18.14544 29.2307143,18.00024 C29.2307143,17.52024 28.9509524,17.06664 28.4807143,16.88184 C28.097381,16.73064 27.6961905,16.81224 27.3807143,17.03184 Z M14.7671429,20.75136 L13.0957143,22.43616 L8.8802381,26.68416 C8.4147619,27.15336 8.4147619,27.91296 8.8802381,28.38096 L13.0957143,32.63016 L14.7671429,34.31616 C15.232619,34.78416 15.985,34.78416 16.4504762,34.31616 C16.9159524,33.84696 16.9159524,33.08616 16.4504762,32.61936 L13.0957143,29.23656 L11.4052381,27.53256 L13.0957143,25.82976 L16.4504762,22.44816 C16.9159524,21.97896 16.9159524,21.22056 16.4504762,20.75136 C15.985,20.28216 15.232619,20.28216 14.7671429,20.75136 Z M33.6821429,20.75136 C33.2166667,21.22056 33.2166667,21.97896 33.6821429,22.44816 L35.1904762,23.96856 L38.7261905,27.53256 L35.1904762,31.09896 L33.6821429,32.61936 C33.2166667,33.08616 33.2166667,33.84696 33.6821429,34.31616 C34.0952381,34.73136 34.7261905,34.75776 35.1904762,34.43256 C35.247619,34.39296 35.3130952,34.36896 35.3654762,34.31616 L41.252381,28.38096 C41.7178571,27.91296 41.7178571,27.15336 41.252381,26.68416 L35.3654762,20.75136 C35.3130952,20.69976 35.247619,20.67456 35.1904762,20.63376 C34.7261905,20.31096 34.0952381,20.33376 33.6821429,20.75136 Z M5.95238095,4.79976 C5.29404762,4.79976 4.76190476,5.33616 4.76190476,5.99976 C4.76190476,6.66336 5.29404762,7.19976 5.95238095,7.19976 C6.61071429,7.19976 7.14285714,6.66336 7.14285714,5.99976 C7.14285714,5.33616 6.61071429,4.79976 5.95238095,4.79976 Z M9.52380952,4.79976 C8.86547619,4.79976 8.33333333,5.33616 8.33333333,5.99976 C8.33333333,6.66336 8.86547619,7.19976 9.52380952,7.19976 C10.1821429,7.19976 10.7142857,6.66336 10.7142857,5.99976 C10.7142857,5.33616 10.1821429,4.79976 9.52380952,4.79976 Z M13.0952381,4.79976 C12.4369048,4.79976 11.9047619,5.33616 11.9047619,5.99976 C11.9047619,6.66336 12.4369048,7.19976 13.0952381,7.19976 C13.7535714,7.19976 14.2857143,6.66336 14.2857143,5.99976 C14.2857143,5.33616 13.7535714,4.79976 13.0952381,4.79976 Z" id="frontend" fill="#469CDC"/>
                            </g>
                        </svg>
                    </div>
                    <h2>E-commerce</h2>
                    <hr class="presta-separator">
                    <p>Mise en place de votre site sous WordPress </p>
                    <p>Site Web clef en main</p>
                    <p>Référencement</p>
                    <p>Nom de domaine + Hebergement</p>
                </div>
                <div class="item-prestation"id="item3">
                    <div class="icon">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M32.72 28C32.88 26.68 33 25.36 33 24C33 22.64 32.88 21.32 32.72 20H39.48C39.8 21.28 40 22.62 40 24C40 25.38 39.8 26.72 39.48 28H32.72ZM29.18 39.12C30.38 36.9 31.3 34.5 31.94 32H37.84C35.9023 35.3366 32.8282 37.864 29.18 39.12ZM28.68 28H19.32C19.12 26.68 19 25.36 19 24C19 22.64 19.12 21.3 19.32 20H28.68C28.86 21.3 29 22.64 29 24C29 25.36 28.86 26.68 28.68 28ZM24 39.92C22.34 37.52 21 34.86 20.18 32H27.82C27 34.86 25.66 37.52 24 39.92ZM16 16H10.16C12.0777 12.6544 15.1496 10.123 18.8 8.88C17.6 11.1 16.7 13.5 16 16ZM10.16 32H16C16.7 34.5 17.6 36.9 18.8 39.12C15.1572 37.8633 12.0897 35.3354 10.16 32ZM8.52 28C8.2 26.72 8 25.38 8 24C8 22.62 8.2 21.28 8.52 20H15.28C15.12 21.32 15 22.64 15 24C15 25.36 15.12 26.68 15.28 28H8.52ZM24 8.06C25.66 10.46 27 13.14 27.82 16H20.18C21 13.14 22.34 10.46 24 8.06ZM37.84 16H31.94C31.314 13.5229 30.3871 11.1318 29.18 8.88C32.86 10.14 35.92 12.68 37.84 16ZM24 4C12.94 4 4 13 4 24C4 29.3043 6.10714 34.3914 9.85786 38.1421C11.715 39.9993 13.9198 41.4725 16.3463 42.4776C18.7728 43.4827 21.3736 44 24 44C29.3043 44 34.3914 41.8929 38.1421 38.1421C41.8929 34.3914 44 29.3043 44 24C44 21.3736 43.4827 18.7728 42.4776 16.3463C41.4725 13.9198 39.9993 11.715 38.1421 9.85786C36.285 8.00069 34.0802 6.5275 31.6537 5.52241C29.2272 4.51732 26.6264 4 24 4Z" fill="#469CDC"/>
                            </svg>
                    </div>
                    <h2>Maintenance</h2>
                    <hr class="presta-separator">
                    <p>Maintenance de votre site web </p>
                    <p>Mise à jour de vos plugins Wordpress</p>
                    <p>Amélioration du Référencement</p>
                    <p>Correction de bugs</p>
                    <p>Refonte site web</p>
                </div>
                <div class="me-contacter">
                    <p>Le tarif des prestations est défini selon votre projet :</p>
                    <button class="btn-action">Me contacter</button>
                </div>
        </div>
    </section>
    <section class="section3" id="mes-real">
        <h3 id="realisations">Mes réalisations</h3>
        <div class="mes-realisations">
            <div class="item-realisation">
                <div class="logo-real">
                    <img src="img/diouet-logo.png" class="logo-realisation" alt="Logo Diouet">
                </div>
               <hr class="real-separator">
               <ul>
                   <li>(EN CONSTRUCTION)</li>
                    <li>Site Vitrine ordinateur et mobile</li>
                    <li>Gallerie Photo</li>
               </ul>
                <a class="btn-realisation" href="https://jeremyvk.github.io/Diouet/">Découvrir</a>
            </div>
            <div class="item-realisation prochainement"><img src="img/prochainement.png" alt="Création qui arrivera prochainement"></div>
        </div>
    </section>

    <section class="reseaux">
        <div class="item-reseaux ">
            <h4>Retrouvez moi sur :</h4>
            <div class="reseaux-icons">
                <div class="item-icon">
                    <a href="https://www.facebook.com/JeremyWebDev">
                        <svg width="130" height="130" viewBox="0 0 130 130" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0)">
                            <path d="M54.1667 129.278C23.4722 123.861 0 97.1389 0 65C0 29.25 29.25 0 65 0C100.75 0 130 29.25 130 65C130 97.1389 106.528 123.861 75.8333 129.278L72.2222 126.389H57.7778L54.1667 129.278Z" fill="url(#paint0_linear)"/>
                            <path d="M90.2779 83.0556L93.1668 65.0001H75.8334V52.3612C75.8334 47.3056 77.639 43.3334 85.5834 43.3334H93.889V26.7223C89.1945 26.0001 84.139 25.2778 79.4445 25.2778C64.639 25.2778 54.1667 34.3056 54.1667 50.5556V65.0001H37.9167V83.0556H54.1667V128.917C57.7779 129.639 61.389 130 65.0001 130C68.6112 130 72.2223 129.639 75.8334 128.917V83.0556H90.2779Z" fill="#FEFEFF"/>
                            </g>
                            <defs>
                            <linearGradient id="paint0_linear" x1="65" y1="125.501" x2="65" y2="0" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#0062E0"/>
                            <stop offset="1" stop-color="#19AFFF"/>
                            </linearGradient>
                            <clipPath id="clip0">
                            <rect width="130" height="130" fill="white"/>
                            </clipPath>
                            </defs>
                            </svg>
                    </a>
                    
                        
                    </div>
                <div class="item-icon insta">
                    <img src="img/icons/instagram.png" alt="Logo d'Instagram">
                        
                </div>
                <div class="item-icon">
                    <svg width="130" height="130" viewBox="0 0 130 130" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0)">
                        <path d="M110.765 110.767H91.5033V80.6016C91.5033 73.4085 91.3748 64.1485 81.4852 64.1485C71.4528 64.1485 69.9177 71.9861 69.9177 80.0781V110.765H50.6564V48.7328H69.1473V57.2103H69.4063C71.2568 54.0461 73.9309 51.4431 77.1438 49.6785C80.3567 47.9138 83.988 47.0537 87.651 47.1896C107.174 47.1896 110.773 60.0311 110.773 76.7372L110.765 110.767ZM28.922 40.2539C22.7485 40.2549 17.743 35.2509 17.742 29.0774C17.741 22.904 22.7445 17.8985 28.9179 17.8974C35.0914 17.8959 40.0969 22.8999 40.0979 29.0734C40.0985 32.038 38.9213 34.8814 36.8254 36.9782C34.7296 39.0749 31.8866 40.2532 28.922 40.2539ZM38.5532 110.768H19.271V48.7328H38.5527V110.767L38.5532 110.768ZM120.368 0.00872909H9.59211C4.35656 -0.0501772 0.0630078 4.14385 -0.000976562 9.37939V120.617C0.0609766 125.855 4.35402 130.053 9.5916 129.999H120.368C125.617 130.064 129.926 125.865 129.999 120.617V9.37076C129.924 4.12506 125.614 -0.0684584 120.368 9.62735e-05" fill="#0A66C2"/>
                        </g>
                        <defs>
                        <clipPath id="clip0">
                        <rect width="130" height="130" fill="white"/>
                        </clipPath>
                        </defs>
                        </svg>
                        
                </div>
            </div>
        </div>
    </section>

    <section class="contact" id="contact">
        <h5>Me contacter</h5>
        <?php 
        if(!empty($_SESSION['errors'])): ?>
        <div class="danger">
            <?php
            foreach($_SESSION['errors'] as $error) {
                echo "<p>" .$error. "<p>";
            } ?>
        </div>
            <?php endif; ?>
        <?php if(isset($_SESSION['success'])): ?>
            <div class="success">
            <p> Votre message a bien été envoyé, je reviendrai vers vous d'ici peu.</p>
            </div>
        <?php endif; ?>
   
        <form action="traitement_contact.php"method="post">
            <div class="form-item">
                <label for="E-mail">E-mail</label>
                <input type="email" name="email" id="E-mail">
            </div>
            <div class="form-item">
                <label for="content">Votre demande</label>
                <textarea name="content" id="content" cols="30" rows="10"></textarea>
            </div>
            <button type="submit">Envoyer</button>
        </form>
    </section>

    <footer>
        <div class="footer-logo">
            <img src="img/logo-blanc.jpg" alt="Logo Jérémy Kerckhove Développeur Web">

        </div>
        <p> <a href="mailto:contact@jeremy-kerckhove.com"><strong>Adresse-mail: </strong>contact@jeremy-kerckhove.com</a> </p>
        <p> &copy 2021 Tous droits réservés</p>
    </footer>
    <script src="app.js"></script>
</body>
<?php session_unset();?>
</html>