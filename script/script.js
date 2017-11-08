
	$(document).ready( function() {

		//Initializes Variables
		var vHeight = $(window).height();
		var vWidth = $(window).width();
		var resourceSectionNo = 0;

		var scrollHeight = 0;

		// Makes square project containers
		var projectContainerWidthSmall = $(".project-container-link").width();
        var projectContainerWidthLarge = $(".project-container-link").width();
        $(".project-container-link").css({"height" : projectContainerWidthSmall});
        $(".project-container-link").css({"height" : projectContainerWidthLarge});

        $(".project-name-small-container").css({"margin-top": projectContainerWidthSmall - 30});
        $(".project-name-large-container").css({"margin-top": projectContainerWidthLarge - 30});

        // $(".page").fadeIn(350);

        var carouselWidth = $(".scrolling-carousel-thumbnail").outerWidth();

        if (vWidth < 768) {
            $(".scrolling-carousel-thumbnail").css({"height" : carouselWidth * 0.50});
        } else {
            $(".scrolling-carousel-thumbnail").css({"height" : carouselWidth * 0.30});
        }


        $(".project-container-link").on("click", function(e){
            e.preventDefault();
            $("#project-img-master-container").html("");
            $("#project-content-project-name").html("");
            $("#project-content-project-desc").html("");



            var projectID = $(this).attr("id");

            $("nav").fadeOut(150);
            $(".page").fadeOut( 150, function (){
                $("#project-modal-container").fadeIn(150);
            });

            populateProject(projectID);
        });


        function populateProject(projectID) {

            $.getJSON('project-resources/projects-db.json', function(data) {

                $.each(data, function( index, project){

                    if (project.projectID == projectID) {

                        var buffPicMarkup = "";

                        $("#project-content-project-name").html(project.projectName);
                        $("#project-content-project-desc").html(project.projectDetails.projectDesc);

                        $.each( project.projectDetails.projectPicsFilenames,function( index, projectPics){
                            buffPicMarkup = buffPicMarkup + '<div class="project-img-container"> <img src="' + projectPics + '" class="project-images"/> </div>';
                        });
                        window.scrollTop = 0;
                        $("#project-img-master-container").html(buffPicMarkup);
                    }
                });
            });
        }


        $("#project-modal-close").on("click", function(e){
           e.preventDefault();
            $("#project-content-project-name").html("");
            $("#project-content-project-desc").html("");
            $("#project-img-master-container").html("");
            $("#project-modal-container").fadeOut(150, function(){
                $("nav").fadeIn(250);
                $(".page").fadeIn(250);
            });


        });

        $(document).keyup(function(e) {
            if (e.keyCode === 27) {
                $("#project-content-project-name").html("");
                $("#project-content-project-desc").html("");
                $("#project-img-master-container").html("");
                $("#project-modal-container").fadeOut(150, function(){
                    $("nav").fadeIn(250);
                    $(".page").fadeIn(250);
                    $("#projects-container").filterizr(projectFilterOptions);
                });
            }
        });


        $(window).scroll(function(){
            scroll = $(window).scrollTop();
            if (scroll >= 70) {

                $("#research-domain-list").addClass("fixit");
                $("#projects-list").addClass("fixit");

                $(".top-gradient-2").show();
                $(".top-gradient-3").show();

                if (vWidth < 768) {
                    $(".publication-list").css({"padding-top":"0px"});
                    $("#projects-container").css({"padding-top":"0px"});
                } else {
                    $(".publication-list").css({"padding-top":"95px"});
                    $("#projects-container").css({"padding-top":"95px"});
                }
            } else {
                $("#research-domain-list").removeClass("fixit");
                $(".top-gradient-2").hide();
                $(".publication-list").css({"padding-top":"0px"});

                $("#projects-list").removeClass("fixit");
                $(".top-gradient-3").hide();
                $("#projects-container").css({"padding-top":"0px"});
            }
        });


        $("#research-selector").change(function(){
            if ($(this).val()!='') {
                window.location.href=$(this).val();
            } else {
                alert("There seems to be an error. Please send an email to me.");
            }
        });

        $("#resource-selector").change(function(e){
            e.preventDefault();
            if ($(this).val() == "devanagari") {
                $('html, body').animate({
                    scrollTop: devnagriSectionHeight
                },1000, 'easeInOutCirc');

            } else if ($(this).val() == "typography-history") {
                $('html, body').animate({
                    scrollTop: typographySectionHeight
                },1000, 'easeInOutCirc');

            } else if ($(this).val() == "historiography") {
                $('html, body').animate({
                    scrollTop: historiographySectionHeight
                },1000, 'easeInOutCirc');

            } else if ($(this).val() == "books-papers") {
                $('html, body').animate({
                    scrollTop: bookspapersSectionHeight
                },1000, 'easeInOutCirc');

            } else if ($(this).val() == "latin-type-design") {
                $('html, body').animate({
                    scrollTop: latintypeSectionHeight
                },1000, 'easeInOutCirc');
            }
        });




		//Pre-set elements
		if (vWidth < 768) {
            $("nav").css({"height" : "100vh"});
            $("nav").css({"right":vWidth});
        }



        $(".resources-section-link").on("click", function(e){
            e.preventDefault();

            if (vWidth < 768) {
                var top = $('body').find($(this).attr('href')).offset().top - 90;
            } else {
                var top = $('body').find($(this).attr('href')).offset().top - 65;
            }


            $('html, body').animate({
                scrollTop: top
            },1000, 'easeInOutCirc');


        });


        var menuSlide = 0;

        var toggles = $(".c-hamburger");
        for (var i = toggles.length - 1; i >= 0; i--) {
            var toggle = toggles[i];
            toggleHandler(toggle);
        };



        function toggleHandler(toggle) {
            toggle.addEventListener( "click", function(e) {
                e.preventDefault();

                if (this.classList.contains("is-active") === true) {
                    this.classList.remove("is-active");
                    $("#research-selector").fadeIn(150);
                    if ($(window).scrollTop() > 1200) {
                        $("#resource-selector").fadeIn(150);
                    }
                    $("nav").animate({right: vWidth}, 250, 'swing');
                    $("nav").fadeOut();
                    window.scrollTo(0,scrollHeight);
                    $("body").css({"overflow":"auto"});
                } else {
                    this.classList.add("is-active");
                    $("#research-selector").fadeOut(250);
                    $("#resource-selector").fadeOut(250);
                    $("nav").fadeIn(50);
                    $("nav").animate({right: 0}, 250, 'swing');
                    scrollHeight = $(window).scrollTop();
                    $("body").css({"overflow":"hidden"});
                }
            });
        }









        $("nav").show();


        var projectFilterOptions = {
            animationDuration: 0.5, //in seconds
            filter: 'all', //Initial filter
            callbacks: {
                onFilteringStart: function() { },
                onFilteringEnd: function() { },
                onShufflingStart: function() { },
                onShufflingEnd: function() { },
                onSortingStart: function() { },
                onSortingEnd: function() { }
            },
            delay: 0, //Transition delay in ms
            delayMode: 'progressive', //'progressive' or 'alternate'
            easing: 'ease-out',
            filterOutCss: { //Filtering out animation
                opacity: 0,
                transform: 'scale(0.5)',
                "z-index": -9999999
            },
            filterInCss: { //Filtering in animation
                opacity: 1,
                transform: 'scale(1)',
                "z-index": 0
            },
            layout: 'sameSize', //See layouts
            selector: '#projects-container',
            setupControls: true
        }


        $(".projects-link").on("click", function(e){
            e.preventDefault();

            $(".projects-link").removeClass("projects-list-active");
            $(this).addClass("projects-list-active");

            var projectCategory = $(this).data("category");
            projectFilterOptions.filter = projectCategory;
            $("#projects-container").filterizr(projectFilterOptions);
        });

	});