<?php

    $projectDBJSON = file_get_contents("project-resources/projects-db.json",true);
    $projectDB = json_decode($projectDBJSON, true);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <!-- Need site verification from Google -->
    <meta name="google-site-verification" content="" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <meta name="keywords" content="design research, typography, statical, mathematical, modelling">
    <meta name="description" content="Official website of Prof. Girish Dalvi, general information about the website">

    <title>Girish Dalvi | Projects</title>

    <link rel="stylesheet" type="text/css" href="style/style.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700|Spectral:400,700" rel="stylesheet">
</head>
<body>

<nav>
    <div id="nav-container">
        <div id="nav-header-band">
            <!--<div id="nav-title-band">
                <span id="header-title" class="spectral-400">Girish Dalvi</span>
            </div>-->
        </div>

        <div id="nav-list-container">
            <ul id="nav-list">
                <li class="nav-list-items">
                    <a class="nav-list-links" href="index.php">HOME</a>
                </li>
                <li class="nav-list-items">
                    <a class="nav-list-links" href="academic.php">ACADEMIC</a>
                </li>
                <li class="nav-list-items">
                    <a  class="nav-list-links" href="research.php">RESEARCH</a>
                </li>
                <li class="nav-list-items">
                    <a  class="nav-list-links active-nav-link" href="projects.php">PROJECTS</a>
                </li>

                <li class="nav-list-items">
                    <a  class="nav-list-links" href="resources.php">RESOURCES</a>
                </li>
            </ul>
        </div>

        <span id="transation-links">
                    <a href="#" class="link">English</a> &nbsp;&nbsp;&nbsp;&nbsp;<span class="seperator">/</span>&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="#" class="link">हिन्दी</a>  &nbsp;&nbsp;&nbsp;&nbsp;<span class="seperator">/</span>&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="#" class="link">मराठी</a> </span>
    </div>
</nav>



<div id="project-modal-container">

    <div id="project-modal-content">
        <div id="project-header" class="lato-400 project-content-header-box">
            <h1 id="project-content-project-name"></h1><br/>
            <p id="project-content-project-desc"></p>
        </div>

        <a id="project-modal-close" href="#" class="lato-400">X</a>

        <div id="project-img-master-container">





        </div>


    </div>



</div>



<div class="page">


    <div id="hamburger-menu-container">
        <div id="hamburger-content-band">
            <div id="hamburger-menu">
                <button class="c-hamburger c-hamburger--htla">
                    <span>toggle menu</span>
                </button>
            </div>
        </div>
    </div>

    <div class="top-gradient"></div>
    <div class="page-container">
        <div class="page-content">

            <h1 class="section-header">
                My Projects
            </h1>

            <ul id="projects-list">
                <li><a data-category="all" href="#" class="link projects-list-active projects-link">ALL PROJECTS</a></li>
                <li><a data-category="1" href="#" class="link  projects-link">PROJECT CATEGORY 1 </a></li>
                <li class="center-text"><a data-category="2" href="#" class="link projects-link">PROJECT CATEGORY 2</a></li>
                <li class="center-text"><a data-category="3" href="#" class="link projects-link">PROJECT CATEGORY 3</a></li>
            </ul>

            <div class="top-gradient-3"></div>

            <div id="projects-container" class="">

                <?php

                    $project_item_count = 0;
                    $end_class = "";

                    foreach ($projectDB as $item) {

                        if ($project_item_count == 2) {
                            $end_class = "end";
                        } else {
                            $end_class = "";
                        }

                        echo '
                            <a data-category="' . $item[projectCategory]. '" id="' . $item[projectID] . '" href="#" class="project-container-link filtr-item ' . $end_class . '" style="background: url(project-resources/project-thumbnail-pics/' . $item[projectThumbnailURL] . ');background-position: center; background-size: cover;">
                                <div class="project-name project-name-large-container">
                                    <span class="project-name-text"> ' . $item[projectName] .  '</span>
                                </div>
                            </a>
                        ';

                        if ($project_item_count == 2) {
                            $project_item_count = 0;
                        } else {
                            $project_item_count = $project_item_count + 1;
                        }



                    }

                ?>
            </div>

        </div>
    </div>
</div>


<script
    src="https://code.jquery.com/jquery-1.12.4.min.js"
    integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
    crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/filterizr/1.2.5/jquery.filterizr.min.js"></script>
<script type="text/javascript" src="script/script.js"></script>

</body>
</html>