

<!DOCTYPE html>
<html lang="en">

<?php
    $page_title = "Research";
    include("_includes/head.php");
?>

<body>

<?php include("_includes/nav.php"); ?>

<div class="page">

    <div id="hamburger-menu-container">



        <div id="hamburger-content-band">
            <div id="mobile-selector">
                <select id="research-selector" class="mobile-dropdown-nav">
                    <option value="research.php" selected>ALL PUBLICATIONS</option>
                    <option value="research/hci-for-dev.php">HCI FOR DEVELOPMENT</option>
                    <option value="research/hci-se.php">SE + HCI</option>
                    <option value="research/other.php">OTHERS</option>
                </select>
            </div>
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
            <section>
                <h1 class="section-header">
                    Research - All Publications
                </h1>
                
                <ul id="research-domain-list">
                    <li><a href="research.php" class="link research-domain-list-active">ALL PUBLICATIONS</a></li>
                    <li><a href="research/hci-for-dev.php" class="link">DESIGN FOR DEVELOPMENT</a></li>
                    <li class="center-text"><a href="research/hci-se.php" class="link">HCI + SE</a></li>
                    <li class="center-text"><a href="research/other.php" class="link">OTHERS</a></li>
                </ul>
                <div class="top-gradient-2"></div>

                <div id="publication-container-1" class="publication-container">
                    <ul class="publication-list">
                        <li class="publication-list-items">
                            <a class="link" target="_blank" href="http://dl.acm.org/citation.cfm?id=3025482">Chameleon Devices: Investigating More Secure and Discreet Mobile Interactions via Active Camouflaging</a> ; <a class="link" target="_blank" href="https://chi2017.acm.org/">CHI 2017</a>&nbsp;&nbsp;//&nbsp;&nbsp;
                            Pearson, J., Robinson, S., Jones, M., Joshi, A., Ahire, S. Sahoo, D., Subramanian, S.;
                            <i class="fa mention fa-star"></i>&nbsp;<span class="honour-text">This paper got an Honorable Mention award</span>
                        </li>
                        <li class="publication-list-items">
                            <a class="link" target="_blank" href="http://dl.acm.org/citation.cfm?id=3025944">Shift+ Tap or Tap+ LongPress?: The Upper Bound of Typing Speed on InScript</a>; <a class="link" target="_blank" href="https://chi2017.acm.org/">CHI 2017</a>&nbsp;&nbsp;//&nbsp;&nbsp;
                            Ghosh, S., Joshi, A., Joshi, M., Emmadi, N., Dalvi, G., Ahire, S., Rangale, S.;
                            <i class="fa award fa-trophy"></i>&nbsp;<span class="honour-text">This paper got the Best Case Study award</span>
                        </li>
                    </ul>
                </div>

            </section>
        </div>
    </div>
</div>


<?php include("_includes/js-scripts.php"); ?>

<script type="text/javascript" src="script/script.js"></script>
</body>
</html>