window.onload = function() {
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

};
