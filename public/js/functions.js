window.addEventListener('load', function() {
    //taking all the thumbnails from the page
    let images = document.querySelectorAll('.thumbnails');
    let modals = document.querySelectorAll('.modal');
    let xbuttons = document.querySelectorAll('.modal-close');
    
    for (let i = 0; i < images.length; i++) {
        images[i].addEventListener("click", function() {
            modals[i].classList.add("is-active");
        });

        xbuttons[i].addEventListener("click", function() {
            modals[i].classList.remove("is-active");
        })
    }

    $('#tag').on('change', function() {
        if ($(this).val()==="Video"){
            $("#inCaseVideo").show();
            $("#upload").hide();
        }
        else{
            $("#inCaseVideo").hide();
            $("#upload").show();
        }
    });

    $('#All').click(function() {
        $(".Brochure").show();
        $(".Leaflet").show();
        $(".Roll-up").show();
        $(".Poster").show();
        $(".Video").show();
        $(".Pictures-for-agencies").show();

        $('#All').addClass("is-info");
        $('#Leaflets').removeClass("is-info");
        $('#Roll-ups').removeClass("is-info");
        $('#Posters').removeClass("is-info");
        $('#Videos').removeClass("is-info");
        $('#Brochures').removeClass("is-info");
        $("#Pictures-for-agencies").removeClass("is-info");
    });

    $('#Brochures').click(function() {
        $(".Brochure").show();
        $(".Leaflet").hide();
        $(".Roll-up").hide();
        $(".Poster").hide();
        $(".Video").hide();
        $(".Pictures-for-agencies").hide();

        $('#All').removeClass("is-info");
        $('#Leaflets').removeClass("is-info");
        $('#Roll-ups').removeClass("is-info");
        $('#Posters').removeClass("is-info");
        $('#Videos').removeClass("is-info");
        $('#Brochures').addClass("is-info");
        $("#Pictures-for-agencies").removeClass("is-info");
    });

    $('#Leaflets').click(function() {
        $(".Brochure").hide();
        $(".Leaflet").show();
        $(".Roll-up").hide();
        $(".Poster").hide();
        $(".Video").hide();
        $(".Pictures-for-agencies").hide();

        $('#All').removeClass("is-info");
        $('#Leaflets').addClass("is-info");
        $('#Roll-ups').removeClass("is-info");
        $('#Posters').removeClass("is-info");
        $('#Videos').removeClass("is-info");
        $('#Brochures').removeClass("is-info");
        $("#Pictures-for-agencies").removeClass("is-info");
    });

    $('#Roll-ups').click(function() {
        $(".Brochure").hide();
        $(".Leaflet").hide();
        $(".Roll-up").show();
        $(".Poster").hide();
        $(".Video").hide();
        $(".Pictures-for-agencies").hide();

        $('#All').removeClass("is-info");
        $('#Leaflets').removeClass("is-info");
        $('#Roll-ups').addClass("is-info");
        $('#Posters').removeClass("is-info");
        $('#Videos').removeClass("is-info");
        $('#Brochures').removeClass("is-info");
        $("#Pictures-for-agencies").removeClass("is-info");
    });

    $('#Posters').click(function() {
        $(".Brochure").hide();
        $(".Leaflet").hide();
        $(".Roll-up").hide();
        $(".Poster").show();
        $(".Video").hide();
        $(".Pictures-for-agencies").hide();

        $('#All').removeClass("is-info");
        $('#Leaflets').removeClass("is-info");
        $('#Roll-ups').removeClass("is-info");
        $('#Posters').addClass("is-info");
        $('#Videos').removeClass("is-info");
        $('#Brochures').removeClass("is-info");
        $("#Pictures-for-agencies").removeClass("is-info");
    });

    $('#Videos').click(function() {
        $(".Brochure").hide();
        $(".Leaflet").hide();
        $(".Roll-up").hide();
        $(".Poster").hide();
        $(".Video").show();
        $(".Pictures-for-agencies").hide();

        $('#All').removeClass("is-info");
        $('#Leaflets').removeClass("is-info");
        $('#Roll-ups').removeClass("is-info");
        $('#Posters').removeClass("is-info");
        $('#Videos').addClass("is-info");
        $('#Brochures').removeClass("is-info");
        $("#Pictures-for-agencies").removeClass("is-info");
    });

    $('#Pictures-for-agencies').click(function() {
        $(".Brochure").hide();
        $(".Leaflet").hide();
        $(".Roll-up").hide();
        $(".Poster").hide();
        $(".Video").hide();
        $(".Pictures-for-agencies").show();

        $('#All').removeClass("is-info");
        $('#Leaflets').removeClass("is-info");
        $('#Roll-ups').removeClass("is-info");
        $('#Posters').removeClass("is-info");
        $('#Videos').removeClass("is-info");
        $('#Brochures').removeClass("is-info");
        $("#Pictures-for-agencies").addClass("is-info");
    });

    var zoom = 1;
		
    $('.zoom').on('click', function(){
        zoom += 0.1;
        $('.target').css('zoom', zoom);
    });
    $('.zoom-init').on('click', function(){
        zoom = 1;
        $('.target').css('zoom', zoom);
    });
    $('.zoom-out').on('click', function(){
        zoom -= 0.1;
        $('.target').css('zoom', zoom);
    });

    $(document).keyup(function(e) {
        if (e.key === "Escape") { 
            $('.modal').removeClass("is-active");
        }
        if (e.key === "+") {
            zoom += 0.1;
            $('.target').css('zoom', zoom);
        }
        if (e.key === "-") {
            zoom -= 0.1;
            $('.target').css('zoom', zoom);
        }
   });
});
