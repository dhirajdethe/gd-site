

<!DOCTYPE html>
<html lang="en">

<head>
    <?php

    $page_title = "Research";
    include("_includes/meta.php");

    ?>

    <link rel="stylesheet" type="text/css" href="style/style.min.css">

</head>

<body>

<?php include("_includes/nav.php"); ?>

<div class="page">

    <div id="hamburger-menu-container">



        <div id="hamburger-content-band">
            <div id="mobile-selector" class="sans-serif">
                <select id="research-selector" class="mobile-dropdown-nav">
                    <option value="all" selected>ALL PUBLICATIONS</option>
                    <option value="publication-category-1">HCI FOR DEVELOPMENT</option>
                    <option value="publication-category-2">SE + HCI</option>
                    <option value="publication-category-3">OTHERS</option>
                </select>
            </div>
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
            <section>
                <h1 class="section-header">
                    My Research Publications
                </h1>

                <!-- Add categories -->

                <ul id="research-domain-list" class="sans-serif">
                    <li><a href="#" class="link research-link link-active" data-publication-category-active="all">ALL PUBLICATIONS</a></li>
                    <li><a href="#" class="link research-link" data-publication-category-active="publication-category-1">DESIGN FOR DEVELOPMENT</a></li>
                    <li class="center-text"><a href="#" class="link research-link" data-publication-category-active="publication-category-2">HCI + SE</a></li>
                    <li class="center-text"><a href="#" class="link research-link" data-publication-category-active="publication-category-3">OTHERS</a></li>
                </ul>

<!--                <div class="top-gradient-2"></div>-->

                <!-- Populate data below -->

                <div class="publication-container">
                    <ul class="publication-list">
            <!--            <li class="publication-list-items publication-category-1">
                            <a class="link" target="_blank" href="http://dl.acm.org/citation.cfm?id=3025482">1-Chameleon Devices: Investigating More Secure and Discreet Mobile Interactions via Active Camouflaging</a> ; <a class="link" target="_blank" href="https://chi2017.acm.org/">CHI 2017</a>&nbsp;&nbsp;-&nbsp;&nbsp;
                            Pearson, J., Robinson, S., Jones, M., Joshi, A., Ahire, S. Sahoo, D., Subramanian, S.;
                            <span class="mention">⭐</span>&nbsp;<span class="honour-text">This paper got an Honorable Mention award</span>
                        </li>
                        <li class="publication-list-items publication-category-1">
                            <a class="link" target="_blank" href="http://dl.acm.org/citation.cfm?id=3025944">1-Shift+ Tap or Tap+ LongPress?: The Upper Bound of Typing Speed on InScript</a>; <a class="link" target="_blank" href="https://chi2017.acm.org/">CHI 2017</a>&nbsp;&nbsp;-&nbsp;&nbsp;
                            Ghosh, S., Joshi, A., Joshi, M., Emmadi, N., Dalvi, G., Ahire, S., Rangale, S.;
                            <span class="award">🏆</span>&nbsp;<span class="honour-text">This paper got the Best Case Study award</span>
                        </li>
                        <li class="publication-list-items publication-category-3">
                            <a class="link" target="_blank" href="http://dl.acm.org/citation.cfm?id=3025482">3-Chameleon Devices: Investigating More Secure and Discreet Mobile Interactions via Active Camouflaging</a> ; <a class="link" target="_blank" href="https://chi2017.acm.org/">CHI 2017</a>&nbsp;&nbsp;-&nbsp;&nbsp;
                            Pearson, J., Robinson, S., Jones, M., Joshi, A., Ahire, S. Sahoo, D., Subramanian, S.;
                            <span class="mention">⭐</span>&nbsp;<span class="honour-text">This paper got an Honorable Mention award</span>
                        </li>

                  -->
                        <li class="publication-list-items publication-category-2">
                          <a class="link" target="_blank" href="https://link.springer.com/chapter/10.1007%2F978-3-642-11762-6_12">“Development of an Intuitive User-Centric Font Selection Menu.”</a>; <a class="link" target="_blank" href="https://link.springer.com/book/10.1007/978-3-642-11762-6">  Human Work Interaction Design: Usability in Social, Cultural and Organizational Contexts pp 144-153. Springer, 2010. </a>&nbsp;&nbsp;-&nbsp;&nbsp;
                          Dalvi, Girish.
                        </li>

                        <li class="publication-list-items publication-category-3">
                          <a class="link" target="_blank" href="https://www.loksatta.com/vishesh-news/design-is-the-creation-of-a-plan-or-convention-for-the-construction-of-an-object-or-a-system-1183079/">अभिकल्प : डिझाइन म्हणजे काय? </a>(What is design?); <a class="link" target="_blank" href="https://www.loksatta.com/"> Loksatta</a>, January 2, 2016. &nbsp;&nbsp;-&nbsp;&nbsp;
                          Joshi, A., Athvankar, U., Dalvi, G.
                        </li>

                        <li class="publication-list-items publication-category-3">
                          <a class="link" target="_blank" href="https://www.loksatta.com/abhikalpa-news/the-scope-and-importance-of-design-1190542/">डिझाइनचे महत्त्व व व्याप्ती </a>(The Importance and Scope of Design); <a class="link" target="_blank" href="https://www.loksatta.com/"> Loksatta</a>, January 16, 2016.&nbsp;&nbsp;-&nbsp;&nbsp;
                          Bapat, V., Joshi, A., Dalvi, G.
                        </li>

                        <li class="publication-list-items publication-category-3">
                          <a class="link" target="_blank" href="  https://www.loksatta.com/abhikalpa-news/importance-of-design-in-different-game-1195866/">खेळामागील अभिकल्पाचे घटक </a>(The Elements of Game Design); <a class="link" target="_blank" href="https://www.loksatta.com/"> Loksatta</a>, January 30, 2016.&nbsp;&nbsp;-&nbsp;&nbsp;
                          Dalvi, G., Bapat, V., Athvankar, U., Joshi, A.
                        </li>

                        <li class="publication-list-items publication-category-3">
                          <a class="link" target="_blank" href="https://www.loksatta.com/abhikalpa-news/why-are-extracurricular-activities-important-for-students-in-school-life-1208821/">चला, खेळातून शिकू या बरेच काही </a>(Let us Play and Learn); <a class="link" target="_blank" href="https://www.loksatta.com/">Loksatta</a>, February 27, 2016.&nbsp;&nbsp;-&nbsp;&nbsp;
                          Athvankar, U., Bapat, V., Joshi, A., Dalvi, G.
                        </li>

                        <li class="publication-list-items publication-category-3">
                          <a class="link" target="_blank" href="https://www.loksatta.com/abhikalpa-news/challenges-of-interaction-designers-1201890/">अन्योन्यक्रिया अभिकल्पकांसमोरील आव्हाने </a>(Challenges for Interaction Designers); <a class="link" target="_blank" href="https://www.loksatta.com/">Loksatta</a>, February 13, 2016.&nbsp;&nbsp;-&nbsp;&nbsp;
                          Joshi, A., Dalvi, G.
                        </li>

                        <li class="publication-list-items publication-category-3">
                          <a class="link" target="_blank" href="https://www.loksatta.com/abhikalpa-news/a-font-is-the-combination-of-typeface-1214050/"> मुद्राक्षरांचे सौंदर्यशास्त्र</a> (Aesthetics of Typography); <a class="link" target="_blank" href="https://www.loksatta.com/">Loksatta</a>, March 12, 2016.&nbsp;&nbsp;-&nbsp;&nbsp;
                          Dalvi, G.
                        </li>

                        <li class="publication-list-items publication-category-3">
                          <a class="link" target="_blank" href="https://www.loksatta.com/abhikalpa-news/communication-in-english-on-mobile-phone-1225111/">अन्योन्यसक्रिय वस्तूंचे स्थानिकीकरण</a> (Localization of Interactive Devices);<a class="link" target="_blank" href="https://www.loksatta.com/"> Loksatta</a>, April 9, 2016.&nbsp;&nbsp;-&nbsp;&nbsp;
                          Joshi, A., Dalvi, G.
                        </li>

                        <li class="publication-list-items publication-category-3">
                          <a class="link" target="_blank" href="https://www.loksatta.com/abhikalpa-news/cheap-housing-designs-1230574/">स्वस्त घरांची अभिकल्पना </a>(The Design of Affordable Houses);  <a class="link" target="_blank" href="https://www.loksatta.com/">Loksatta</a>, April 23, 2016.&nbsp;&nbsp;-&nbsp;&nbsp;
                          Athvankar, U, Dalvi, G., U., Bapat, V.
                        </li>

                        <li class="publication-list-items publication-category-3">
                          <a class="link" target="_blank" href="https://www.loksatta.com/abhikalpa-news/guidelines-for-home-composition-1235992/">घराच्या त्रिमितीय आलेखापलीकडे </a>(Beyond the 3 Dimensions of a House); <a class="link" target="_blank" href="https://www.loksatta.com/">Loksatta</a>, May 7, 2016.&nbsp;&nbsp;-&nbsp;&nbsp;
                          Athvankar, U., Dalvi, G., U., Bapat, V.
                        </li>

                        <li class="publication-list-items publication-category-3">
                          <a class="link" target="_blank" href="https://www.loksatta.com/abhikalpa-news/typing-challenges-in-indian-language-1241049/">भारतीय भाषा टंकलेखनातील आव्हाने </a>(Challenges in the Design of Text Entry Mechanisms for Indian Languages); <a class="link" target="_blank" href="https://www.loksatta.com/">Loksatta</a>, May 21 2016.&nbsp;&nbsp;-&nbsp;&nbsp;
                          Joshi, A., Dalvi, G.
                        </li>

                        <li class="publication-list-items publication-category-3">
                          <a class="link" target="_blank" href="https://www.loksatta.com/abhikalpa-news/vernacular-font-formation-is-time-consuming-process-1252737/">एका अक्षराचे शवपरीक्षण </a>(Autopsy of a Letter); <a class="link" target="_blank" href="https://www.loksatta.com/">Loksatta</a>, June 18, 2016.&nbsp;&nbsp;-&nbsp;&nbsp;
                          Dalvi, G.
                        </li>

                        <li class="publication-list-items publication-category-3">
                          <a class="link" target="_blank" href="https://www.loksatta.com/abhikalpa-news/importance-of-museum-for-next-generation-1268339/">संस्कृतिसापेक्ष अभिकल्प </a>(Culture-sensitive Design); <a class="link" target="_blank" href="https://www.loksatta.com/">Loksatta</a>,July 16, 2016.&nbsp;&nbsp;-&nbsp;&nbsp;
                          Athvankar, U., Dalvi, G.
                        </li>

                        <li class="publication-list-items publication-category-3">
                          <a class="link" target="_blank" href="https://www.loksatta.com/abhikalpa-news/article-on-lord-ganesha-looks-adjective-1283648//lite/">गणपती – शेंदरी, निळे, सावळे की गोरे? </a>(The Colour of Ganapati); <a class="link" target="_blank" href="https://www.loksatta.com/">Loksatta</a>, August 13, 2016.&nbsp;&nbsp;-&nbsp;&nbsp;
                          Dalvi, G.
                        </li>

                        <li class="publication-list-items publication-category-3">
                          <a class="link" target="_blank" href="https://www.loksatta.com/abhikalpa-news/art-and-skill-in-design-1291166//lite/">वस्तूंचे रूप आणि त्यातील सुप्त संदेश </a>(The Semantics of Form); <a class="link" target="_blank" href="https://www.loksatta.com/">Loksatta</a>, August 27, 2016.&nbsp;&nbsp;-&nbsp;&nbsp;
                          Athvankar, U., Dalvi, G.
                        </li>

                        <li class="publication-list-items publication-category-3">
                          <a class="link" target="_blank" href="https://www.loksatta.com/abhikalpa-news/commodity-forms-concept-1307438/">वस्तूंच्या रूपांची संकल्पना </a>(The Conceptualization of Form); <a class="link" target="_blank" href="https://www.loksatta.com/">Loksatta</a>, September 24, 2016.&nbsp;&nbsp;-&nbsp;&nbsp;
                          Athvankar, U., Dalvi, G.
                        </li>

                        <li class="publication-list-items publication-category-3">
                          <a class="link" target="_blank" href="https://www.loksatta.com/abhikalpa-news/new-technology-and-their-issues-1323548/">नवतंत्रज्ञान हे फक्त तरुणांसाठी? </a>(Technology for the Elderly); <a class="link" target="_blank" href="https://www.loksatta.com/">Loksatta</a>, October 22, 2016.&nbsp;&nbsp;-&nbsp;&nbsp;
                          Kulkarni, S., Dalvi, G.
                        </li>

                        <li class="publication-list-items publication-category-3">
                          <a class="link" target="_blank" href="">बौद्धिक कुपोषण आणि कल्पनांचे दारिद्र्य </a>(Intellectual Malnourishment and the Poverty of Imagination); <a class="link" target="_blank" href="https://www.loksatta.com/">Loksatta</a>, December 3, 2016.&nbsp;&nbsp;-&nbsp;&nbsp;
                          Dalvi, G.
                        </li>

                        <li class="publication-list-items publication-category-3">
                          <a class="link" target="_blank" href="https://www.loksatta.com/abhikalpa-news/article-on-memory-drawing-1363960//lite/">अभिकल्प विचार आणि शिक्षण </a>(Design Thinking and Education); <a class="link" target="_blank" href="https://www.loksatta.com/">Loksatta</a>, December 17, 2016.&nbsp;&nbsp;-&nbsp;&nbsp;
                          Athvankar, U., Dalvi, G., U., Bapat, V.
                        </li>

                        <li class="publication-list-items publication-category-3">
                          <a class="link" target="_blank" href="https://www.loksatta.com/abhikalpa-news/loksatta-abhikalpa-1374009/">अभिकल्पकांची विचारसरणी </a>(Design Thinking); <a class="link" target="_blank" href="https://www.loksatta.com/">Loksatta</a>, December 31, 2016.&nbsp;&nbsp;-&nbsp;&nbsp;
                          Joshi, A., Dalvi, G., Athvankar, U., Bapat, V.
                        </li>

                        <li class="publication-list-items publication-category-2">
                          <a class="link" target="_blank" href="https://dl.acm.org/citation.cfm?id=2818696.2808491">“Interaction design for Indian needs lab, IIT Bombay;” </a> <a class="link" target="_blank" href="http://interactions.acm.org/"> Interactions, ACM 2015. </a>&nbsp;&nbsp;-&nbsp;&nbsp;
                          Ahire, S., Dalvi, G., Joshi, M., Joshi, A.
                        </li>

                        <li class="publication-list-items publication-category-2">
                          <a class="link" target="_blank" href="">“Mukdraksharanche Saundaryashastra”</a>, <a class="link" target="_blank" href="http://www.sahityasammelanghuman.org/"> <i> Abhijat Smarnika, 88th Akhil Bharatiya Marathi Sahitya Sammelan </i> </a> , 2015 Ghuman, India, pp 131–135.&nbsp;&nbsp;-&nbsp;&nbsp;
                          Dalvi, Girish.
                        </li>

                        <li class="publication-list-items publication-category-2">
                          <a class="link" target="_blank" href="http://www.idc.iitb.ac.in/resources/dt-jan-2009/Anatomy%20of%20Devanagari.pdf">“Anatomy of Devanagari Typefaces”</a>, <a class="link" target="_blank" href="http://www.idc.iitb.ac.in/resources/design-thoughts.html">Design Thoughts, pp 30–36 2009. </a>&nbsp;&nbsp;-&nbsp;&nbsp;
                          Dalvi, Girish.
                        </li>

                        <li class="publication-list-items publication-category-2">
                          <a class="link" target="_blank" href="http://dl.acm.org/citation.cfm?id=3025944">“Shift+Tap or Tap+LongPress?: The Upper Bound of Typing Speed on InScript.”</a>, <a class="link" target="_blank"href="https://dl.acm.org/citation.cfm?id=3025453&picked=source&CFID=843819062&CFTOKEN=55063656"> Proceedings of the 2017 CHI Conference on Human Factors in Computing Systems (CHI ‘17). ACM, New York, NY, USA, 2059-2063. </a>&nbsp;&nbsp;-&nbsp;&nbsp;
                          Ghosh S., Joshi A., Joshi M, Emmadi N, Dalvi G., et.al.
                        </li>

                        <li class="publication-list-items publication-category-2">
                        <a class="link" target="_blank" href="http://ieeexplore.ieee.org/document/7939261/?reload=true">“An. — An interactive full body exercise experience for patients suffering from Ankylosing Spondylitis,”</a>, <a class="link" target="_blank"href="http://www.segah.org/2017/"> 2017 IEEE 5th International Conference on Serious Games and Applications for Health (SeGAH), Perth, WA, 2017, pp. 1-8. </a>&nbsp;&nbsp;-&nbsp;&nbsp;
                        Bandyopadhyay J., Dalvi G.
                        </li>

                        <li class="publication-list-items publication-category-2">
                        <a class="link" target="_blank" href="http://www.typoday.in/2017/spk_papers/maithili-shingre-typoday-2017.pdf">“Reviving a Manuscript Style: The design process of Jaini”</a>, <a class="link" target="_blank"href="http://typoday.in/2017/">Typography Day 2017,  Department of Integrated Design, University of Moratuwa, Colombo, Sri Lanka 2017.</a>&nbsp;&nbsp;-&nbsp;&nbsp;
                        Shingre M., Dalvi G.
                        </li>

                        <li class="publication-list-items publication-category-2">
                        <a class="link" target="_blank" href="https://link.springer.com/chapter/10.1007/978-981-10-3521-0_20">“Can Interactive Installations Bring About Behaviour Change? Using Interactive Installation to Change Food Waste Behaviours”</a>, <a class="link" target="_blank"href="http://www.springer.com/in/book/9789811035203">Research into Design for Communities, Volume 2. ICoRD 2017. Smart Innovation, Systems and Technologies, vol 66. Springer, Singapore 2017. </a>&nbsp;&nbsp;-&nbsp;&nbsp;
                        Bandyopadhyay J., Dalvi G.
                        </li>

                        <li class="publication-list-items publication-category-2">
                        <a class="link" target="_blank" href="https://dl.acm.org/citation.cfm?id=2935366">“Does prediction really help in Marathi text input?: empirical analysis of a longitudinal study.”</a>, <a class="link" target="_blank"href="https://mobilehci.acm.org/2016/">18th International Conference on Human Computer Interaction with Mobile Devices and Services MobileHCI’16, Florence, Italy</a>&nbsp;&nbsp;-&nbsp;&nbsp;
                        Dalvi, G., et al.
                        </li>

                        <li class="publication-list-items publication-category-2">
                        <a class="link" target="_blank" href="https://dl.acm.org/citation.cfm?id=2835970">“A Protocol to Evaluate Virtual Keyboards for Indian Languages”</a>, <a class="link" target="_blank"href="https://dl.acm.org/citation.cfm?id=2835966&picked=prox">Proceedings of the 7th International Conference on HCI, IndiaHCI 2015, Guwahati, India. </a>&nbsp;&nbsp;-&nbsp;&nbsp;
                        Dalvi, G., et al.
                        </li>

                        <li class="publication-list-items publication-category-2">
                        <a class="link" target="_blank" href="https://www.researchgate.net/publication/291350539_CAN_FUN_AND_PURPOSE_COEXIST_IN_A_LEARNING_GAME_A_CASE_STUDY_OF_A_NOVEL_GEOMETRY_LEARNING_GAME">“Can Fun And Purpose Coexist in a Learning Game? A Case Study Of A Novel Geometry Learning Game”</a>, <a class="link" target="_blank"href="https://library.iated.org/publications/EDULEARN15/start/400"> EDULEARN15 2015, Barcelona, Spain pp. 2839–2848.</a>&nbsp;&nbsp;-&nbsp;&nbsp;
                        Athavale S., Johry A., Dalvi G.
                        </li>

                        <li class="publication-list-items publication-category-2">
                        <a class="link" target="_blank" href="http://www.typoday.in/2015/spk_papers/Pradnya_Naik-Typographyday2015.pdf">“Calligraphic Analysis of the Jain Manuscript Style”</a>, <a class="link" target="_blank"href="http://www.typoday.in/2015/index.html">Typography Day 2015, IDC, IIT Bombay, 2015, Mumbai. </a>&nbsp;&nbsp;-&nbsp;&nbsp;
                        Naik P, Dalvi G.
                        </li>

                        <li class="publication-list-items publication-category-2">
                        <a class="link" target="_blank" href="https://dl.acm.org/citation.cfm?id=2676702.2676705">“Corpus of Marathi Word Frequencies from Touch-Screen Devices Using Swarachakra Android Keyboard,”</a>, <a class="link" target="_blank"href="http://hcibib.org/IndiaHCI14">Proceedings of the India HCI 2014 Conference on Human Computer Interaction IndiaHCI ‘14, 2014, Delhi, India pp 74–79. </a>&nbsp;&nbsp;-&nbsp;&nbsp;
                        Joshi A, Dalvi G, et.al
                        </li>

                        <li class="publication-list-items publication-category-2">
                        <a class="link" target="_blank" href="https://dl.acm.org/citation.cfm?id=2037422">“Design And Evaluation Of Devanagari Virtual Keyboards For Touch Screen Mobile Phones”</a>, <a class="link" target="_blank"href="https://dl.acm.org/citation.cfm?id=2037373&picked=prox">13th International Conference on Human Computer Interaction with Mobile Devices and Services MobileHCI’11 Stockholm, Sweden pp 323–332. </a>&nbsp;&nbsp;-&nbsp;&nbsp;
                        Joshi, A., Dalvi, G., et.al.
                        </li>

                        <li class="publication-list-items publication-category-2">
                        <a class="link" target="_blank" href="http://www.iasdr2009.or.kr/Papers/Orally%20Presented%20Papers/Design%20Method/A%20method%20to%20capture%20categorization%20strategies%20in%20order%20to%20understand%20user%20perception.%20A%20case%20study%20on%20user%20categorization%20strategies%20for%20typefaces.pdf">“A Method to Capture Categorization Strategies in order to Understand User Perception: A case study on User Categorization Strategies for Typefaces.”</a>, <a class="link" target="_blank"href="http://www.iasdr.org/node/15">International Association of Societies of Design Research. Seoul, South Korea 2009, pp 1855–1865.</a>&nbsp;&nbsp;-&nbsp;&nbsp;
                        Dalvi, Girish.
                        </li>

                        <li class="publication-list-items publication-category-2">
                        <a class="link" target="_blank" href="https://link.springer.com/chapter/10.1007/978-3-642-11762-6_12">“Development of Font Selection Menu for Devanagari.”</a>, <a class="link" target="_blank"href=" ">Second IFIP Working Group 13.6 Conference, HWID. Pune, 2009. </a>&nbsp;&nbsp;-&nbsp;&nbsp;
                        Dalvi, Girish.
                        </li>

                        <li class="publication-list-items publication-category-2">
                        <a class="link" target="_blank" href=" ">“Evaluation of Devanagari Typefaces for Onscreen Legibility.”</a>, <a class="link" target="_blank"href=" "> National Workshop on Calligraphy and Typography, CDAC. Pune, 2007. </a>&nbsp;&nbsp;-&nbsp;&nbsp;
                        Dalvi, Girish.
                        </li>


                        <li class="publication-list-items publication-category-2">
                        <a class="link" target="_blank" href="https://www.youtube.com/watch?v=-pMxWn_9clU">“Ek Mukta Font Family”</a>, <a class="link" target="_blank"href="http://www.typoday.in/2015/">Typography Day 2015. Mumbai, 2015. </a>&nbsp;&nbsp;-&nbsp;&nbsp;
                        Dalvi, Girish.
                        </li>

                        <li class="publication-list-items publication-category-2">
                        <a class="link" target="_blank" href="https://www.youtube.com/watch?v=xvT9BPDRSmA">“Devanagari Font Families & Glyph Counts”</a>, <a class="link" target="_blank"href="http://www.typoday.in/2012/">Typography Day 2012. Mumbai, 2012. </a>&nbsp;&nbsp;-&nbsp;&nbsp;
                        Dalvi, Girish.
                        </li>

                        <li class="publication-list-items publication-category-2">
                        <a class="link" target="_blank" href=" ">“Visual Literacy of Devanagari Typography”</a>, <a class="link" target="_blank"href="http://istvc.org/ictvc-conference.html">4th International Conference on Typography and Visual Communication (ICTVC). Nicosia, 2010. </a>&nbsp;&nbsp;-&nbsp;&nbsp;
                        Dalvi, Girish.
                        </li>

                        <li class="publication-list-items publication-category-2">
                        <a class="link" target="_blank" href="http://aksharaya.org/event/aksharsanvad-a-talk-by-girish-dalvi/">“Technological Struggles in Indian Typographic Traditions”</a>, <a class="link" target="_blank"href="http://aksharaya.org/en/landing/">Aksharaya Invited Guest Lecture, Sir JJ Institute of Applied Art, Mumbai 2010. </a>&nbsp;&nbsp;-&nbsp;&nbsp;
                        Dalvi, Girish.
                        </li>

                        <li class="publication-list-items publication-category-2">
                        <a class="link" target="_blank" href=" ">“Problems and Opportunities in Devanagari Typography”</a>, <a class="link" target="_blank"href="http://www.typoday.in/2009/">Typography Day 2009. Pune, 2009. </a>&nbsp;&nbsp;-&nbsp;&nbsp;
                        Dalvi, Girish.
                        </li>

                        <li class="publication-list-items publication-category-2">
                        <a class="link" target="_blank" href=" ">“Classification of Devanagari Typefaces”</a>, <a class="link" target="_blank"href="http://www.typoday.in/2008/">Typography Day 2008. Mumbai, 2008. </a>&nbsp;&nbsp;-&nbsp;&nbsp;
                        Dalvi, Girish.
                        </li>

                    </ul>
                </div>

            </section>
        </div>
    </div>
</div>


<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="script/script.js"></script>

</body>
</html>
