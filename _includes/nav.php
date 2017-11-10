
<nav class="sans-serif">
    <div id="nav-container">
        <div id="nav-list-container">
            <ul id="nav-list">
                <li class="nav-list-items">
                    <a class="nav-list-links <?php if ($page_title == "Home") echo "active-nav-link"; ?>" href="index.php">HOME</a>
                </li>
                <li class="nav-list-items">
                    <a class="nav-list-links <?php if ($page_title == "Academics") echo "active-nav-link"; ?>" href="academic.php">ACADEMIC</a>
                </li>
                <li class="nav-list-items">
                    <a  class="nav-list-links <?php if ($page_title == "Research") echo "active-nav-link"; ?>" href="research.php">RESEARCH</a>
                </li>
                <li class="nav-list-items">
                    <a  class="nav-list-links <?php if ($page_title == "Projects") echo "active-nav-link"; ?>" href="projects.php">PROJECTS</a>
                </li>

                <li class="nav-list-items">
                    <a  class="nav-list-links <?php if ($page_title == "Resources") echo "active-nav-link"; ?>" href="resources.php">RESOURCES</a>
                </li>
            </ul>
        </div>

        <span id="transation-links">
                    <a href="#" class="link">English</a> &nbsp;&nbsp;&nbsp;&nbsp;<span class="seperator">/</span>&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="#" class="link">हिन्दी</a>  &nbsp;&nbsp;&nbsp;&nbsp;<span class="seperator">/</span>&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="#" class="link">मराठी</a>
        </span>
    </div>
</nav>