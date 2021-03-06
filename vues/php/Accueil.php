<?php
header('Content-Type: text/html;charset=UTF-8');
header('Pragma: no-cache');

if(!isset($_GET['action'])){
    echo("bonronbr");
}

$var_Key = "cle a mettre";

?>
<!DOCTYPE html>
<html>
<head lang="fr">
    <meta charset="utf-8">
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="pragma" content="no-cache" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="vues/css/style.css">
    <script type="text/javascript" src="vues/js/jquery.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <title>Accueil</title>
</head>
<body>
    <div class="video-bg">
        <video width="320" height="240" autoplay loop muted>
            <source src="https://assets.codepen.io/3364143/7btrrd.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
    <div class="dark-light">
        <svg viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z" /></svg>
    </div>
    <div class="app">
        <div class="header">
            <div class="menu-circle"></div>
            <div class="header-menu">
                <?php

                if(isset($_GET['select'])){
                    if($_GET['select'] == "allClasse"){
                        echo '
                                <a class="menu-link is-active" href="index.php?action=app&select=allClasse">Toute la Classe</a>
                                <a class="menu-link" href="index.php?action=app&select=allBetters">Les meilleurs</a>
                                <a class="menu-link" href="index.php?action=app&select=customTest">Classement</a>
                                <a class="menu-link" href="index.php?action=app&select=moyenneG">G??n??ral</a>
                             ';
                    }elseif ($_GET['select'] == "allBetters"){
                        echo '
                                <a class="menu-link" href="index.php?action=app&select=allClasse">Toute la Classe</a>
                                <a class="menu-link is-active" href="index.php?action=app&select=allBetters">Les meilleurs</a>
                                <a class="menu-link" href="index.php?action=app&select=customTest">Classement</a>
                                <a class="menu-link" href="index.php?action=app&select=moyenneG">G??n??ral</a>
                             ';
                    }elseif ($_GET['select'] == "customTest"){
                        echo '
                                <a class="menu-link" href="index.php?action=app&select=allClasse">Toute la Classe</a>
                                <a class="menu-link" href="index.php?action=app&select=allBetters">Les meilleurs</a>
                                <a class="menu-link is-active" href="index.php?action=app&select=customTest">Classement</a>
                                <a class="menu-link" href="index.php?action=app&select=moyenneG">G??n??ral</a>
                             ';
                    }elseif ($_GET['select'] == "moyenneG"){
                        echo '
                                <a class="menu-link" href="index.php?action=app&select=allClasse">Toute la Classe</a>
                                <a class="menu-link" href="index.php?action=app&select=allBetters">Les meilleurs</a>
                                <a class="menu-link" href="index.php?action=app&select=customTest">Classement</a>
                                <a class="menu-link is-active" href="index.php?action=app&select=moyenneG">G??n??ral</a>
                             ';
                    }
                }else{
                    echo '
                        <a class="menu-link is-active" href="index.php?action=app&select=allClasse">Toute la Classe</a>
                        <a class="menu-link" href="index.php?action=app&select=allBetters">Les meilleurs</a>
                        <a class="menu-link" href="index.php?action=app&select=customTest">Classement</a>
                        <a class="menu-link" href="index.php?action=app&select=moyenneG">G??n??ral</a>
                    ';
                }


                ?>
            </div>
            <div class="header-profile">
                <a href="#" class="notification">
                    <svg viewBox="0 0 488.932 488.932" fill="currentColor">
                        <path d="M243.158 61.361v-57.6c0-3.2 4-4.9 6.7-2.9l118.4 87c2 1.5 2 4.4 0 5.9l-118.4 87c-2.7 2-6.7.2-6.7-2.9v-57.5c-87.8 1.4-158.1 76-152.1 165.4 5.1 76.8 67.7 139.1 144.5 144 81.4 5.2 150.6-53 163-129.9 2.3-14.3 14.7-24.7 29.2-24.7 17.9 0 31.8 15.9 29 33.5-17.4 109.7-118.5 192-235.7 178.9-98-11-176.7-89.4-187.8-187.4-14.7-128.2 84.9-237.4 209.9-238.8z" />
                    </svg>
                </a>
                <svg viewBox="0 0 512 512" fill="currentColor">
                    <path d="M448.773 235.551A135.893 135.893 0 00451 211c0-74.443-60.557-135-135-135-47.52 0-91.567 25.313-115.766 65.537-32.666-10.59-66.182-6.049-93.794 12.979-27.612 19.013-44.092 49.116-45.425 82.031C24.716 253.788 0 290.497 0 331c0 7.031 1.703 13.887 3.006 20.537l.015.015C12.719 400.492 56.034 436 106 436h300c57.891 0 106-47.109 106-105 0-40.942-25.053-77.798-63.227-95.449z" />
                </svg>
                <img class="profile-img" src="https://images.unsplash.com/photo-1600353068440-6361ef3a86e8?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80" alt="">
            </div>
        </div>
        <div class="wrapper">
            <div class="left-side">
                <div class="side-wrapper">
                    <div class="side-title">Apps</div>
                    <div class="side-menu">
                        <a href="#">
                            <svg viewBox="0 0 512 512">
                                <g xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                                    <path d="M0 0h128v128H0zm0 0M192 0h128v128H192zm0 0M384 0h128v128H384zm0 0M0 192h128v128H0zm0 0" data-original="#bfc9d1" />
                                </g>
                                <path xmlns="http://www.w3.org/2000/svg" d="M192 192h128v128H192zm0 0" fill="currentColor" data-original="#82b1ff" />
                                <path xmlns="http://www.w3.org/2000/svg" d="M384 192h128v128H384zm0 0M0 384h128v128H0zm0 0M192 384h128v128H192zm0 0M384 384h128v128H384zm0 0" fill="currentColor" data-original="#bfc9d1" />
                            </svg>
                            Accueil
                        </a>
                    </div>
                </div>
                <div class="side-wrapper">
                    <div class="side-title">Mati??res</div>
                    <div class="side-menu">
                        <?php
                        $matieres = new MatiereModele();
                        $Liste_Mat = $matieres->getAllMatieresDispo();

                        foreach ($Liste_Mat as $e){
                            $s = "";
                            echo '
                                    <a href="index.php?action=app&select=allClasse&codeMat='.$e->getIdMat().'">
                                        <svg viewBox="0 0 512 512" fill="currentColor">
                                            <path d="M499.377 46.402c-8.014-8.006-18.662-12.485-29.985-12.613a41.13 41.13 0 00-.496-.003c-11.142 0-21.698 4.229-29.771 11.945L198.872 275.458c25.716 6.555 47.683 23.057 62.044 47.196a113.544 113.544 0 0110.453 23.179L500.06 106.661C507.759 98.604 512 88.031 512 76.89c0-11.507-4.478-22.33-12.623-30.488zM176.588 302.344a86.035 86.035 0 00-3.626-.076c-20.273 0-40.381 7.05-56.784 18.851-19.772 14.225-27.656 34.656-42.174 53.27C55.8 397.728 27.795 409.14 0 416.923c16.187 42.781 76.32 60.297 115.752 61.24 1.416.034 2.839.051 4.273.051 44.646 0 97.233-16.594 118.755-60.522 23.628-48.224-5.496-112.975-62.192-115.348z" />
                                        </svg>
                                        '.$e->getNom().'
                                    </a>
                                    ';
                        }
                        ?>
                    </div>
                </div>
                <div class="side-wrapper">
                    <div class="side-title">??l??ves</div>
                    <div class="side-menu">
                        <?php
                            $etudiants = new EtudiantModele();
                            $Liste_Etus = $etudiants->getAllEtudiants();

                            foreach ($Liste_Etus as $e){
                                $s = "";
                                echo '
                                    <a href="index.php?action=app&select=allClasse&codeEtu='.$e->getIdEtu().'">
                                        <svg viewBox="0 0 511.441 511.441" fill="currentColor">
                                            <path d="M255.721 347.484L90.22 266.751v106.57l165.51 73.503 165.509-73.503V266.742z" />
                                            <path d="M511.441 189.361L255.721 64.617 0 189.361l255.721 124.744 195.522-95.378v111.032h30V204.092z" />
                                        </svg>
                                        '.$e->getNomComplet().'
                                    </a>
                                    ';
                            }
                        ?>
                    </div>
                </div>
            </div>


                <div class="content-wrapper">
                    <?php
                    error_reporting(0);
                    $notes = new NoteModele();
                        $ues = new UeModele();
                    if($_GET['select'] == "allClasse" || !isset($_GET['select'])){
                        foreach ($Liste_Etus as $e){
                            echo '
                                        <div class="content-section">
                                        <div class="content-section-title">'.$e->getNomComplet().'</div>
                                        <ul>
                            ';
                            foreach ($Liste_Mat as $m){
                                $Liste_Note = $notes->getMoyenneForOneMat($e->getIdEtu(), $m->getIdMat());
                                echo '
                                    
                                            <li class="adobe-product">
                                                <div class="products">
                                                    '.$m->getNom().'
                                                </div>
                                                <span class="status">
                                                <span class="status-circle green"></span>
                                                '.$Liste_Note.'</span>
                                            </li>
                                        
                                    ';
                            }
                            echo '
                                </ul>
                                </div>
                            ';
                        }
                    }elseif ($_GET['select'] == "allBetters"){
                        foreach ($Liste_Mat as $m){
                            $personnage = null;
                            $noteMax = 0;
                            foreach ($Liste_Etus as $e){
                                if($notes->getMoyenneForOneMat($e->getIdEtu(),$m->getIdMat()) > $noteMax){
                                    $noteMax = $notes->getMoyenneForOneMat($e->getIdEtu(),$m->getIdMat());
                                    $personnage = $e;
                                }
                            }
                            echo '
                                <div class="content-section">
                                        <div class="content-section-title">'.$m->getNom().'</div>
                                        <ul>
                                        <li class="adobe-product">
                                                <div class="products">
                                                    '.$personnage->getNomComplet().'
                                                </div>
                                                <span class="status">
                                                <span class="status-circle green"></span>
                                                '.round($noteMax, 2).'</span>
                                        </li>
                                        </ul>
                                </div>
                            ';

                        }
                    }elseif ($_GET['select'] == "customTest"){
                        foreach ($Liste_Mat as $m){
                            $moyennes = [];
                            $users = [];
                            $Tableau_Tout = [];
                            echo '
                                <div class="content-section">
                                <div class="content-section-title">'.$m->getNom().'</div>
                                <ul>
                            ';
                            //stocker toutes les notes et users
                            foreach ($Liste_Etus as $e){
                                $moyenne = $notes->getMoyenneForOneMat($e->getIdEtu(),$m->getIdMat());
                                $Tableau_Tout[] = ['note' => $moyenne, 'eleve' => $e];
                            }

                            usort($Tableau_Tout, 'Validation::DescSort');

                            $position = 1;
                            foreach ($Tableau_Tout as $t){
                                echo '
                                    <li class="adobe-product">
                                    <div class="products">
                                    '.$position.' - '.$t['eleve']->getNomComplet().'
                                    </div>
                                    <span class="status">
                                    <span class="status-circle green"></span>
                                    '.round($t['note'], 2).'</span>
                                    </li>
                                    ';
                                $position += 1;
                            }
                            echo '
                                </ul>
                                </div>
                            ';
                        }
                    }elseif ($_GET['select'] == "moyenneG"){

                        $Liste_Ues = $ues->getAllUe();
                        $Tableau_Tout_General = [];


                        foreach ($Liste_Etus as $e){
                            $moyenneG = 0;
                            $coefG = 0;
                            foreach ($Liste_Ues as $ue){
                                $Liste_Matiere_Ue = $matieres->getMatieresByUe($ue->getId());
                                $moyenne = 0;
                                $coef = 0;
                                foreach ($Liste_Matiere_Ue as $matUe){
                                    $moyenne += ($notes->getMoyenneForOneMat($e->getIdEtu(),$matUe->getIdMat()) * $matUe->getCoef());
                                    $coef += $matUe->getCoef();

                                }
                                $moyenneG += $moyenne/$coef;
                                $coefG += 1;
                            }
                            //echo $e->getNomComplet()." - ".$moyenneG/$coefG."<br>";
                            $Tableau_Tout_General[] = ['note' => $moyenneG/$coefG, 'eleve' => $e];
                        }


                        usort($Tableau_Tout_General, 'Validation::DescSort');
                        foreach ($Tableau_Tout_General as $t)
                            //echo $t['eleve']->getNomComplet()." ".$t['note']."<br>";

                        $pos = 1;
                        echo '
                                <div class="content-section">
                                <div class="content-section-title">Classement G??n??ral</div>
                                <ul>
                            ';
                        foreach ($Tableau_Tout_General as $t){
                            echo '
                                    <li class="adobe-product">
                                    <div class="products">
                                    '.$pos.' - '.$t['eleve']->getNomComplet().'
                                    </div>
                                    <span class="status">
                                    <span class="status-circle green"></span>
                                    '.round($t['note'],2).'</span>
                                    </li>
                            ';
                            $pos += 1;
                        }

                        echo '
                                </ul>
                                </div>
                            ';



                        /*
                        foreach ($Liste_Mat as $m){
                            $Liste_Note = $notes->getMoyenneForOneMat(24, $m->getIdMat());
                            $moyenne += $Liste_Note*$m->getCoef();
                            $coef += $m->getCoef();
                            echo $m->getNom()." ".$Liste_Note." ".$m->getIdUe()."<br>";
                        }*/
                    }

                    ?>


                    <!--
                    <div class="content-section">
                        <div class="content-section-title">Installed</div>
                        <ul>
                            <li class="adobe-product">
                                <div class="products">
                                    <svg viewBox="0 0 52 52" style="border:1px solid #3291b8">
                                        <g xmlns="http://www.w3.org/2000/svg">
                                            <path d="M40.824 52H11.176C5.003 52 0 46.997 0 40.824V11.176C0 5.003 5.003 0 11.176 0h29.649C46.997 0 52 5.003 52 11.176v29.649C52 46.997 46.997 52 40.824 52z" fill="#061e26" data-original="#393687" />
                                            <path d="M12.16 39H9.28V11h9.64c2.613 0 4.553.813 5.82 2.44 1.266 1.626 1.9 3.76 1.9 6.399 0 .934-.027 1.74-.08 2.42-.054.681-.22 1.534-.5 2.561-.28 1.026-.66 1.866-1.14 2.52-.48.654-1.213 1.227-2.2 1.72-.987.494-2.16.74-3.52.74h-7.04V39zm0-12h6.68c.96 0 1.773-.187 2.44-.56.666-.374 1.153-.773 1.46-1.2.306-.427.546-1.04.72-1.84.173-.801.267-1.4.28-1.801.013-.399.02-.973.02-1.72 0-4.053-1.694-6.08-5.08-6.08h-6.52V27zM29.48 33.92l2.8-.12c.106.987.6 1.754 1.48 2.3.88.547 1.893.82 3.04.82s2.14-.26 2.98-.78c.84-.52 1.26-1.266 1.26-2.239s-.36-1.747-1.08-2.32c-.72-.573-1.6-1.026-2.64-1.36-1.04-.333-2.086-.686-3.14-1.06a7.36 7.36 0 01-2.78-1.76c-.987-.934-1.48-2.073-1.48-3.42s.54-2.601 1.62-3.761 2.833-1.739 5.26-1.739c.854 0 1.653.1 2.4.3.746.2 1.28.394 1.6.58l.48.279-.92 2.521c-.854-.666-1.974-1-3.36-1-1.387 0-2.42.26-3.1.78-.68.52-1.02 1.18-1.02 1.979 0 .88.426 1.574 1.28 2.08.853.507 1.813.934 2.88 1.28 1.066.347 2.126.733 3.18 1.16 1.053.427 1.946 1.094 2.68 2s1.1 2.106 1.1 3.6c0 1.494-.6 2.794-1.8 3.9-1.2 1.106-2.954 1.66-5.26 1.66-2.307 0-4.114-.547-5.42-1.64-1.307-1.093-1.987-2.44-2.04-4.04z" fill="#c1dbe6" data-original="#89d3ff" />
                                        </g>
                                    </svg>
                                    Photoshop
                                </div>
                                <span class="status">
            <span class="status-circle green"></span>
            Updated</span>
                                <div class="button-wrapper">
                                    <button class="content-button status-button open">Open</button>
                                    <div class="menu">
                                        <button class="dropdown">
                                            <ul>
                                                <li><a href="#">Go to Discover</a></li>
                                                <li><a href="#">Learn more</a></li>
                                                <li><a href="#">Uninstall</a></li>
                                            </ul>
                                        </button>
                                    </div>
                                </div>
                            </li>
                            <li class="adobe-product">
                                <div class="products">
                                    <svg viewBox="0 0 52 52" style="border:1px solid #b65a0b">
                                        <g xmlns="http://www.w3.org/2000/svg">
                                            <path d="M40.824 52H11.176C5.003 52 0 46.997 0 40.824V11.176C0 5.003 5.003 0 11.176 0h29.649C46.997 0 52 5.003 52 11.176v29.649C52 46.997 46.997 52 40.824 52z" fill="#261400" data-original="#6d4c13" />
                                            <path d="M30.68 39h-3.24l-2.76-9.04h-8.32L13.72 39H10.6l8.24-28h3.32l8.52 28zm-6.72-12l-3.48-11.36L17.12 27h6.84zM37.479 12.24c0 .453-.16.84-.48 1.16-.32.319-.7.479-1.14.479-.44 0-.827-.166-1.16-.5-.334-.333-.5-.713-.5-1.14s.166-.807.5-1.141c.333-.333.72-.5 1.16-.5.44 0 .82.16 1.14.48.321.322.48.709.48 1.162zM37.24 39h-2.88V18.96h2.88V39z" fill="#e6d2c0" data-original="#ffbd2e" />
                                        </g>
                                    </svg>
                                    Illustrator
                                </div>

                                <span class="status">
            <span class="status-circle"></span>
            Update Available</span>
                                <div class="button-wrapper">
                                    <button class="content-button status-button">Update this app</button>
                                    <div class="pop-up">
                                        <div class="pop-up__title">Update This App
                                            <svg class="close" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle">
                                                <circle cx="12" cy="12" r="10" />
                                                <path d="M15 9l-6 6M9 9l6 6" />
                                            </svg>
                                        </div>
                                        <div class="pop-up__subtitle">Adjust your selections for advanced options as desired before continuing. <a href="#">Learn more</a></div>
                                        <div class="checkbox-wrapper">
                                            <input type="checkbox" id="check1" class="checkbox">
                                            <label for="check1">Import previous settings and preferences</label>
                                        </div>
                                        <div class="checkbox-wrapper">
                                            <input type="checkbox" id="check2" class="checkbox">
                                            <label for="check2">Remove old versions</label>
                                        </div>
                                        <div class="content-button-wrapper">
                                            <button class="content-button status-button open close">Cancel</button>
                                            <button class="content-button status-button">Continue</button>
                                        </div>
                                    </div>
                                    <div class="menu">
                                        <button class="dropdown">
                                            <ul>
                                                <li><a href="#">Go to Discover</a></li>
                                                <li><a href="#">Learn more</a></li>
                                                <li><a href="#">Uninstall</a></li>
                                            </ul>
                                        </button>
                                    </div>
                                </div>
                            </li>
                            <li class="adobe-product">
                                <div class="products">
                                    <svg viewBox="0 0 52 52" style="border: 1px solid #C75DEB">
                                        <g xmlns="http://www.w3.org/2000/svg">
                                            <path d="M40.824 52H11.176C5.003 52 0 46.997 0 40.824V11.176C0 5.003 5.003 0 11.176 0h29.649C46.997 0 52 5.003 52 11.176v29.649C52 46.997 46.997 52 40.824 52z" fill="#3a3375" data-original="#3a3375" />
                                            <path d="M27.44 39H24.2l-2.76-9.04h-8.32L10.48 39H7.36l8.24-28h3.32l8.52 28zm-6.72-12l-3.48-11.36L13.88 27h6.84zM31.48 33.48c0 2.267 1.333 3.399 4 3.399 1.653 0 3.466-.546 5.44-1.64L42 37.6c-2.054 1.254-4.2 1.881-6.44 1.881-4.64 0-6.96-1.946-6.96-5.841v-8.2c0-2.16.673-3.841 2.02-5.04 1.346-1.2 3.126-1.801 5.34-1.801s3.94.594 5.18 1.78c1.24 1.187 1.86 2.834 1.86 4.94V30.8l-11.52.6v2.08zm8.6-5.24v-3.08c0-1.413-.44-2.42-1.32-3.021-.88-.6-1.907-.899-3.08-.899-1.174 0-2.167.359-2.98 1.08-.814.72-1.22 1.773-1.22 3.16v3.199l8.6-.439z" fill="#e4d1eb" data-original="#e7adfb" />
                                        </g>
                                    </svg>
                                    After Effects
                                </div>
                                <span class="status">
            <span class="status-circle green"></span>
            Updated</span>
                                <div class="button-wrapper">
                                    <button class="content-button status-button open">Open</button>
                                    <div class="menu">
                                        <button class="dropdown">
                                            <ul>
                                                <li><a href="#">Go to Discover</a></li>
                                                <li><a href="#">Learn more</a></li>
                                                <li><a href="#">Uninstall</a></li>
                                            </ul>
                                        </button>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="content-section">
                        <div class="content-section-title">Apps in your plan</div>
                        <div class="apps-card">
                            <div class="app-card">
           <span>
            <svg viewBox="0 0 512 512" style="border: 1px solid #a059a9">
             <path xmlns="http://www.w3.org/2000/svg" d="M480 0H32C14.368 0 0 14.368 0 32v448c0 17.664 14.368 32 32 32h448c17.664 0 32-14.336 32-32V32c0-17.632-14.336-32-32-32z" fill="#210027" data-original="#7b1fa2" />
             <g xmlns="http://www.w3.org/2000/svg">
              <path d="M192 64h-80c-8.832 0-16 7.168-16 16v352c0 8.832 7.168 16 16 16s16-7.168 16-16V256h64c52.928 0 96-43.072 96-96s-43.072-96-96-96zm0 160h-64V96h64c35.296 0 64 28.704 64 64s-28.704 64-64 64zM400 256h-32c-18.08 0-34.592 6.24-48 16.384V272c0-8.864-7.168-16-16-16s-16 7.136-16 16v160c0 8.832 7.168 16 16 16s16-7.168 16-16v-96c0-26.464 21.536-48 48-48h32c8.832 0 16-7.168 16-16s-7.168-16-16-16z" fill="#f6e7fa" data-original="#e1bee7" />
             </g>
            </svg>
            Premiere Pro
           </span>
                                <div class="app-card__subtext">Edit, master and create fully proffesional videos</div>
                                <div class="app-card-buttons">
                                    <button class="content-button status-button">Update</button>
                                    <div class="menu"></div>
                                </div>
                            </div>
                            <div class="app-card">
           <span>
            <svg viewBox="0 0 52 52" style="border: 1px solid #c1316d">
             <g xmlns="http://www.w3.org/2000/svg">
              <path d="M40.824 52H11.176C5.003 52 0 46.997 0 40.824V11.176C0 5.003 5.003 0 11.176 0h29.649C46.997 0 52 5.003 52 11.176v29.649C52 46.997 46.997 52 40.824 52z" fill="#2f0015" data-original="#6f2b41" />
              <path d="M18.08 39H15.2V13.72l-2.64-.08V11h5.52v28zM27.68 19.4c1.173-.507 2.593-.761 4.26-.761s3.073.374 4.22 1.12V11h2.88v28c-2.293.32-4.414.48-6.36.48-1.947 0-3.707-.4-5.28-1.2-2.08-1.066-3.12-2.92-3.12-5.561v-7.56c0-2.799 1.133-4.719 3.4-5.759zm8.48 3.12c-1.387-.746-2.907-1.119-4.56-1.119-1.574 0-2.714.406-3.42 1.22-.707.813-1.06 1.847-1.06 3.1v7.12c0 1.227.44 2.188 1.32 2.88.96.719 2.146 1.079 3.56 1.079 1.413 0 2.8-.106 4.16-.319V22.52z" fill="#e1c1cf" data-original="#ff70bd" />
             </g>
            </svg>
            InDesign
           </span>
                                <div class="app-card__subtext">Design and publish great projects & mockups</div>
                                <div class="app-card-buttons">
                                    <button class="content-button status-button">Update</button>
                                    <div class="menu"></div>
                                </div>
                            </div>
                            <div class="app-card">
                               <span>
                                <svg viewBox="0 0 52 52" style="border: 1px solid #C75DEB">
                                 <g xmlns="http://www.w3.org/2000/svg">
                                  <path d="M40.824 52H11.176C5.003 52 0 46.997 0 40.824V11.176C0 5.003 5.003 0 11.176 0h29.649C46.997 0 52 5.003 52 11.176v29.649C52 46.997 46.997 52 40.824 52z" fill="#3a3375" data-original="#3a3375" />
                                  <path d="M27.44 39H24.2l-2.76-9.04h-8.32L10.48 39H7.36l8.24-28h3.32l8.52 28zm-6.72-12l-3.48-11.36L13.88 27h6.84zM31.48 33.48c0 2.267 1.333 3.399 4 3.399 1.653 0 3.466-.546 5.44-1.64L42 37.6c-2.054 1.254-4.2 1.881-6.44 1.881-4.64 0-6.96-1.946-6.96-5.841v-8.2c0-2.16.673-3.841 2.02-5.04 1.346-1.2 3.126-1.801 5.34-1.801s3.94.594 5.18 1.78c1.24 1.187 1.86 2.834 1.86 4.94V30.8l-11.52.6v2.08zm8.6-5.24v-3.08c0-1.413-.44-2.42-1.32-3.021-.88-.6-1.907-.899-3.08-.899-1.174 0-2.167.359-2.98 1.08-.814.72-1.22 1.773-1.22 3.16v3.199l8.6-.439z" fill="#e4d1eb" data-original="#e7adfb" />
                                 </g>
                                </svg>
                                After Effects
                               </span>
                                <div class="app-card__subtext">Industry Standart motion graphics & visual effects</div>
                                <div class="app-card-buttons">
                                    <button class="content-button status-button">Update</button>
                                    <div class="menu"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    -->
                </div>
            </div>
        </div>
        <div class="overlay-app"></div>
    </div>

    <script >
        $(function () {
            $(".menu-link").click(function () {
                $(".menu-link").removeClass("is-active");
                $(this).addClass("is-active");
            });
        });

        $(function () {
            $(".main-header-link").click(function () {
                $(".main-header-link").removeClass("is-active");
                $(this).addClass("is-active");
            });
        });

        const dropdowns = document.querySelectorAll(".dropdown");
        dropdowns.forEach((dropdown) => {
            dropdown.addEventListener("click", (e) => {
                e.stopPropagation();
                dropdowns.forEach((c) => c.classList.remove("is-active"));
                dropdown.classList.add("is-active");
            });
        });

        $(".search-bar input")
            .focus(function () {
                $(".header").addClass("wide");
            })
            .blur(function () {
                $(".header").removeClass("wide");
            });

        $(document).click(function (e) {
            var container = $(".status-button");
            var dd = $(".dropdown");
            if (!container.is(e.target) && container.has(e.target).length === 0) {
                dd.removeClass("is-active");
            }
        });

        $(function () {
            $(".dropdown").on("click", function (e) {
                $(".content-wrapper").addClass("overlay");
                e.stopPropagation();
            });
            $(document).on("click", function (e) {
                if ($(e.target).is(".dropdown") === false) {
                    $(".content-wrapper").removeClass("overlay");
                }
            });
        });

        $(function () {
            $(".status-button:not(.open)").on("click", function (e) {
                $(".overlay-app").addClass("is-active");
            });
            $(".pop-up .close").click(function () {
                $(".overlay-app").removeClass("is-active");
            });
        });

        $(".status-button:not(.open)").click(function () {
            $(".pop-up").addClass("visible");
        });

        $(".pop-up .close").click(function () {
            $(".pop-up").removeClass("visible");
        });

        const toggleButton = document.querySelector('.dark-light');

        toggleButton.addEventListener('click', () => {
            document.body.classList.toggle('light-mode');
        });
    </script>
</body>
</html>