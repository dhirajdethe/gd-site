<?php
    
    $projectDBJSON = file_get_contents("project-resources/projects-db.json",true);
    $projectDB = json_decode($projectDBJSON, true);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <?php

    $page_title = "Projects";
    include("_includes/meta.php");

    ?>
    <link rel="stylesheet" type="text/css" href="style/style.min.css">
</head>

<body>

<?php include("_includes/nav.php"); ?>



<div id="project-modal-container">

    <div id="project-modal-content">
        <div id="project-header" class="project-content-header-box">
            <h1 id="project-content-project-name" class="sans-serif"></h1><br/>
            <p id="project-content-project-desc"></p>
        </div>

        <a id="project-modal-close" href="#" class="monospace">X</a>

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

<!--    <div class="top-gradient"></div>-->
    <div class="page-container">
        <div class="page-content">

            <h1 class="section-header">
                Projects
            </h1>

            <ul id="projects-list" class="sans-serif">
                <li><a data-category="all" href="#" class="link link-active projects-link">ALL</a></li>
                <li><a data-category="1" href="#" class="link  projects-link">FONTS</a></li>
                <li class="center-text"><a data-category="2" href="#" class="link projects-link">OTHERS</a></li>
            </ul>

<!--            <div class="top-gradient-3"></div>-->

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

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="script/script.js"></script>
</body>
</html>
