<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ifri</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Axentix CSS minified version -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/axentix@2.0.0/dist/axentix.min.css">
        <link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">
        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>
    </head>
    <body class="layout white " >
    <!-- header -->

    <header class="">
        <nav class="navbar shadow-1 airforce dark-3 align-content-center ">
        <a href="#" class="navbar-brand">
            <i class="fa fa-home" >  HOME</i>
        </a>
        <div class="navbar-menu navbar-centered">
            <div class="dropdown ml-2" id="explorer-dropdown" data-ax="dropdown">
                <a class="" data-target="explorer-dropdown" href="#">
                    <span class="text-orange">Explorer</span>

                </a>
                <div class="dropdown-content white shadow-1 rounded-1">
                <a class="dropdown-item active" href="#">Rectorat</a>
                    <a class="dropdown-item active" href="#">L'Univerté</a>
                    <a class="dropdown-item " href="#">Les Structures </a>
                    <a class="dropdown-item" href="#">Sécrétariat Général</a>
                    <a class="dropdown-item" href="#">Services Communs</a>
                    <a class="dropdown-item" href="#">Direction de la Communication</a>
                    <a class="dropdown-item" href="#">Contact</a>
                </div>
            </div>
            <div class="dropdown ml-2" id="formation-dropdown" data-ax="dropdown">
                <a class="" data-target="formation-dropdown" href="#">
                    <span class="text-orange">Formation</span>

                </a>
                <div class="dropdown-content white shadow-1 rounded-1">
                    <a class="dropdown-item " href="#">Présentation</a>
                    <a class="dropdown-item active" href="#">Inscription</a>
                    <a class="dropdown-item " href="#">Etudes et Scolarité</a>
                    <a class="dropdown-item " href="#">Offres de formation</a>
                    <a class="dropdown-item " href="#">Diplômes</a>
                    <a class="dropdown-item " href="#">Réglementation</a>
                </div>
            </div>
            <div class="dropdown ml-2" id="recherche-dropdown" data-ax="dropdown">
                <a class="" data-target="recherche-dropdown" href="#">
                    <span class="text-orange">Post-Graduation</span>

                </a>
                <div class="dropdown-content white shadow-1 rounded-1">
                    <a class="dropdown-item " href="#">Le Vice Rectorat</a>
                    <a class="dropdown-item " href="#">Unités et Laboratoires de Recherche</a>
                    <a class="dropdown-item " href="#">Recherche Sciebntifique</a>
                    <a class="dropdown-item " href="#">Production Sciebntifique</a>
                    <a class="dropdown-item " href="#">Revues Sciebntifique</a>
                    <a class="dropdown-item " href="#">Post-Graduation</a>
                    <a class="dropdown-item " href="#">Thèses et Mémoires soutenus</a>
                    <a class="dropdown-item " href="#">Habilitation Universitaires</a>
                    <a class="dropdown-item " href="#">Contact</a>
                </div>
            </div>
            <div class="dropdown ml-2" id="cooperation-dropdown" data-ax="dropdown">
                <a class="" data-target="cooperation-dropdown" href="#">
                    <span class="text-orange">Relations Extérieures</span>

                </a>
                <div class="dropdown-content white shadow-1 rounded-1">
                    <a class="dropdown-item " href="#">Vice Rectorat</a>
                    <a class="dropdown-item " href="#">Coopération Internationale</a>
                    <a class="dropdown-item " href="#">Coopération Nationale</a>
                    <a class="dropdown-item " href="#">Commmunication</a>
                    <a class="dropdown-item " href="#">Manifestations Scientifique</a>
                    <a class="dropdown-item " href="#">Structures d'Appui</a>
                    <a class="dropdown-item " href="#">Actualités</a>
                </div>
            </div>
            <div class="dropdown ml-2" id="prospective-dropdown" data-ax="dropdown">
                <a class="" data-target="prospective-dropdown" href="#">
                    <span class="text-orange">Développement</span>
                </a>
                <div class="dropdown-content white shadow-1 rounded-1">
                    <a class="dropdown-item active" href="#">Rectorat</a>
                    <a class="dropdown-item" href="#">L'Univerté</a>
                    <a class="dropdown-item " href="#">Les Structures </a>
                    <a class="dropdown-item" href="#">Sécrétariat Général</a>
                    <a class="dropdown-item" href="#">Services Communs</a>
                    <a class="dropdown-item" href="#">Direction de la Communication</a>
                    <a class="dropdown-item" href="#">Contact</a>
                </div>
            </div>
        </div>
        <a class="navbar-link ml-auto " href="#">D-space</a>
        </nav>
    </header>

    <!--La partie carousel-->
    <div class="container align-content-center">
        <div class="shadow-5">
        <div class="caroulix" id="example-caroulix" data-ax="caroulix" data-ax-caroulix-autoplay-enabled="true" data-caroulix-indicators-enabled="true">
            <div class="caroulix-arrow caroulix-prev">
                <span class="iconify-inline font-s5" data-icon="mdi:chevron-left"></span>
            </div>
            <div class="caroulix-arrow caroulix-next">
                <span class="iconify-inline font-s5" data-icon="mdi:chevron-right"></span>
            </div>
            <div class="caroulix-item">

                <img src="https://picsum.photos/800/450?random=1" alt="img1" />
            </div>
            <div class="caroulix-item">
                <img src="https://picsum.photos/800/450?random=2" alt="img2" />
            </div>
            <div class="caroulix-item">
                <img src="https://picsum.photos/800/450?random=3" alt="img3" />
            </div>
            <div class="caroulix-item">
                <img src="https://picsum.photos/800/450?random=4" alt="img4" />
            </div>
        </div>
        <div class="grix xs1 sm2 m-1 p-2" style="width:fit-content;" shadow-1>
            <div class="grix xs1 ">
                <div class="grix xs1 sm2">
                    <div class="">
                        <img src="https://picsum.photos/800/450?random=4" width="100px" height="100px" alt="img4" />
                    </div>
                    <div class="">
                        <p>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Porro velit architecto distinctio, reprehenderit quas aliquid beatae repellat aliquam tenetur tempora inventore
                            praesentium nesciunt earum? Perspiciatis harum natus amet nihil placeat!
                        </p>
                    </div>
                </div>
                <div class="grix xs1 sm2">
                    <div class="">
                        <img src="https://picsum.photos/800/450?random=3" width="100px" height="100px" alt="img4" />
                    </div>
                    <div class=" xs3">
                        <p>
                            Lorem, Pierre Marie sit amet consectetur adipisicing elit. Porro velit architecto distinctio, reprehenderit quas aliquid beatae repellat aliquam tenetur tempora inventore
                            praesentium nesciunt earum? Perspiciatis harum natus amet nihil placeat!
                        </p>
                    </div>
                </div>
                <div class="grix xs1 sm2">
                    <div class="">
                        <img src="https://picsum.photos/800/450?random=3" width="100px" height="100px" alt="img4" />
                    </div>
                    <div class="">
                        <p class="text-align-justify">
                            Lorem, Pierre Marie sit amet consectetur adipisicing elit. Porro velit architecto distinctio, reprehenderit quas aliquid beatae repellat aliquam tenetur tempora inventore
                            praesentium nesciunt earum? Perspiciatis harum natus amet nihil placeat!
                        </p>
                    </div>
                </div>
            </div>
            <div class="grix xs3 red">
            <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate, voluptatibus a eum, optio officia omnis fugiat, quaerat dolores dicta cupiditate
                    ab eligendi neque laboriosam perferendis cum earum. Dolor, laborum optio.
                    ab eligendi neque laboriosam perferendis cum earum. Dolor, laborum optio.
                    ab eligendi neque laboriosam perferendis cum earum. Dolor, laborum optio.
                    ab eligendi neque laboriosam perferendis cum earum. Dolor, laborum optio.
                    ab eligendi neque laboriosam perferendis cum earum. Dolor, laborum optio.
                    ab eligendi neque laboriosam perferendis cum earum. Dolor, laborum optio.
                </p>
            </div>
        </div>

        </div>
    </div>


    <footer class="d-flex fx-col airforce dark-3 ">
        <div class="footer fx-center blue dark-5 ">
            <p>
              © 2022 Université d'Abomey Calavi | site développé et maitenu
              <span class="text-blue">
                <a href="ifri-uac.bj/index">L'Institue informatique ifri</a>
              </span>
              | Contact
              <span class="text-blue">
              <a href="ifri-uac.bj/contact ">Contact_Ifri</a>
              </span>
            </p>
        </div>

        <div class="container p-2 ">
            <div class="grix  xs1 sm4">
                <div class="">
                    <span class="text-orange text-bold ">BIBLIOTHEQUES VIRTUELLES</span>
                    <div class="d-block">
                        <a href="#">Technique de l'Ingénieur</a>
                        <a href="#">Système de Documentation en ligne </a>
                        <a href="#">Sciences Directes</a>
                        <a href="#">Universités Algériennes</a>
                        <a href="#"> Bibliothèque Numérique Mondiale</a>
                    </div>
                </div>
                <div class="">
                    <span class="text-orange text-bold ">MESSAGERIE</span>
                   <div class="d-block">

                    <i class="fa fa-mail-reply " >   Mail</i>
                    </div>
                </div>
                <div class="">
                    <span class="text-orange text-bold ">LIENS UTILES</span>
                    <div class="d-block">
                        <a href="#">Ministère de l'Enseignement Supérieur et de la recherche scientifique</a>
                        <a href="#">Textes Réglementaires</a>
                        <a href="#">Logiciels et Utilitaires</a>
                        <a href="#">Oeuvres Sociales</a>
                        <a href="#">Universités Algériennes</a>
                        <a href="#">Centre de recherche en Biotechnique</a>
                    </div>
                </div>
                <div class="">
                    <span class="text-orange text-bold ">SUIVEZ-NOUS SUR:</span>
                    <p>
                        <i class="fa fa-facebook-official" >  faceboock</i><br>
                        <i class="fa fa-twitter" >    twitter</i><br>
                        <i class="fa fa-youtube" >    youtube</i><br>
                        <i class="fa fa-instagram" >   instagram</i>
                    </p>
                </div>
            </div>
        </div>

    </footer>
    <script src="https://kit.fontawesome.com/45e38e596f.js" crossorigin="anonymous"></script>
    <script src="../js/app.js"></script>
    <!-- Axentix JS minified version -->
    <script src="https://cdn.jsdelivr.net/npm/axentix@2.0.0/dist/axentix.min.js"></script>
    </body>

</html>
