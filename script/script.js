
	$(document).ready( function() {




		//Initializes Variables
		var vHeight = $(window).height();
		var vWidth = $(window).width();
		var resourceSectionNo = 0;

		// Makes square project containers
		var projectContainerWidthSmall = $(".project-container-link-small").width();
        var projectContainerWidthLarge = $(".project-container-link-large").width();
        $(".project-container-link-small").css({"height" : projectContainerWidthSmall});
        $(".project-container-link-large").css({"height" : projectContainerWidthLarge});

        $(".project-name-small-container").css({"margin-top": projectContainerWidthSmall - 30});
        $(".project-name-large-container").css({"margin-top": projectContainerWidthLarge - 30});


        var carouselWidth = $(".scrolling-carousel-thumbnail").outerWidth();
        console.log("Carousel thumbnail outer width: " + carouselWidth);
        console.log("Carousel thumbnail height: " + $(".scrolling-carousel-thumbnail").height());

        if (vWidth < 768) {
            $(".scrolling-carousel-thumbnail").css({"height" : carouselWidth * 0.50});
        } else {
            $(".scrolling-carousel-thumbnail").css({"height" : carouselWidth * 0.30});
        }


        $(".project-container-link").on("mouseenter", function(){

            // $($(this).closest(".project-name")).animate({
            //     marginTop: "-=60"
            // },1000, 'easeInOutCirc');

        });




        $(window).scroll(function(){
            scroll = $(window).scrollTop();
            if (scroll >= 70) {
                console.log("stick");
                $("#research-domain-list").addClass("fixit");
                $(".top-gradient-2").show();
                $(".publication-list").css({"padding-top":"95px"});
            } else {
                $("#research-domain-list").removeClass("fixit");
                $(".top-gradient-2").hide();
                $(".publication-list").css({"padding-top":"0px"});
            }

            console.log(scroll);

            if (scroll > 1200) {
                $("#resource-selector").fadeIn(250);
                if (scroll < 4362) {
                    $("#resource-selector").val("devanagari");
                } else if (scroll < 7337) {
                    $("#resource-selector").val("typography-history");
                } else if (scroll < 10759) {
                    $("#resource-selector").val("historiography");
                } else if (scroll < 11895) {
                    $("#resource-selector").val("books-papers");
                } else  {
                    $("#resource-selector").val("latin-type-design");
                }
            } else {
                $("#resource-selector").val(" --- ");
                $("#resource-selector").fadeOut(250);
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
                    scrollTop: 1220
                },1000, 'easeInOutCirc');

            } else if ($(this).val() == "typography-history") {
                $('html, body').animate({
                    scrollTop: 4362
                },1000, 'easeInOutCirc');

            } else if ($(this).val() == "historiography") {
                $('html, body').animate({
                    scrollTop: 7337
                },1000, 'easeInOutCirc');

            } else if ($(this).val() == "books-papers") {
                $('html, body').animate({
                    scrollTop: 10759
                },1000, 'easeInOutCirc');

            } else if ($(this).val() == "latin-type-design") {
                $('html, body').animate({
                    scrollTop: 11895
                },1000, 'easeInOutCirc');
            }
        });




		//Pre-set elements
		if (vWidth < 768) {
            $("nav").css({"height" : vHeight});
            $("nav").css({"right":vWidth});
        }



        $(".resources-section-link").on("click", function(e){
            e.preventDefault();

            if (vWidth < 768) {
                var top = $('body').find($(this).attr('href')).offset().top - 90;
            } else {
                var top = $('body').find($(this).attr('href')).offset().top - 65;
            }
            console.log(top);

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
                    $("nav").animate({right: vWidth}, 250, 'swing');
                    $("nav").fadeOut();

                } else {
                    this.classList.add("is-active");
                    $("#research-selector").fadeOut(150);
                    $("nav").fadeIn(50);
                    $("nav").animate({right: 0}, 250, 'swing');
                }
            });
        }


        $(".project-resources-link").on("click", function(e){
            e.preventDefault();
            $(".project-resources-link").removeClass("projects-list-active");
            $(this).addClass("projects-list-active");
        });






        $("nav").show();
	});