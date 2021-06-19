window.addEventListener("load", function () {

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
        },
    });

    /**
     * function that shows an info message about unidentified categories (needs to be called when there is one)
     */
    let check = () => {
        toastMixin.fire({
            title:
                "One or more items has no category. It is recommended to add a category so that you can filter.",
            icon: "warning",
        });
    };

    //All the elements with the class 'notification'
    let toCheck = document.querySelectorAll(".notif");

    //If the innerHTML of the elements with the class 'notification' are 'Undefined' run the check function
    for (let i = 0; i < toCheck.length; i++) {
        if (toCheck[i].innerHTML == "Undefined") {
            check();
            break;
        }
    }
});