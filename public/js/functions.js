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
            $('iframe').attr('src', $('iframe').attr('src'));
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




    // Below is everything for sweetalert


    //The instance of sweet alert
    let toastMixin = Swal.mixin({
        toast: true,
        icon: "warning",
        title: "General Title",
        animation: false,
        position: "top-right",
        showConfirmButton: true,
        timer: 0,
        timerProgressBar: false,
        didOpen: (toast) => {
            toast.addEventListener("mouseenter", Swal.stopTimer);
            toast.addEventListener("mouseleave", Swal.resumeTimer);
        }
    });

    /**
     * function that shows an info message about unidentified categories (needs to be called when there is one)
     */
    let check = () => {
        toastMixin.fire({
            title:
                "One or more items has no category. It is recommended to add a category so that you can filter.",
            icon: "warning"
        });
    };

    //All the elements with the class 'notification'
    let toCheck = document.querySelectorAll('.notification');

    //If the innerHTML of the elements with the class 'notification' are 'Undefined' run the check function
    for (let i = 0; i < toCheck.length; i++) {
        if (toCheck[i].innerHTML == " Undefined ") {
            check();
            break;
        }
    }
});
