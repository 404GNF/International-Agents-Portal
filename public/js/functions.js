window.addEventListener('load', function() {
    //taking all the thumbnails from the page
    let images = document.querySelectorAll('.thumbnails');

    //opening and closing modals
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
    
    //filter-search with the buttons above the resources
    $( '.filterbutton' ).click(function() {
        $( '.filterbutton' ).removeClass('is-info');
        $(this).addClass('is-info');

        if ($(this).attr('id') != 'All') {
            let $targetclass = '.' + $(this).attr('id');
            $('.is-one-third').each(function() {
                $('.is-one-third').hide();
            })
            $( $targetclass ).show(); 
        } else {
            $( '.filterbutton' ).each(function() {
                $( '.is-one-third' ).show();
            })
        }
    });

    //zooming in and out of images
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

    //zooming in-out and closing modal images with keys
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
