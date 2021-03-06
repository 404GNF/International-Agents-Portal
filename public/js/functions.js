window.addEventListener("load", function () {
    // const defaultOrderedItems = $(".is-one-third");
    const defaultOrderedItems = $(".resource");

    enableFilter(defaultOrderedItems);
    enableSearchBar(defaultOrderedItems);

    enablePreview();

    //filter-search with the buttons above the resources
    $(".filterbutton").click(function () {
        $(".filterbutton").removeClass("is-info");
        $(this).addClass("is-info");

        if ($(this).attr("id") != "All") {
            let $targetclass = "." + $(this).attr("id");
            $(".is-one-third").each(function () {
                $(".is-one-third").hide();
            });
            $($targetclass).show();
        } else {
            $(".filterbutton").each(function () {
                $(".is-one-third").show();
            });
        }
    });

    //zooming in and out of images
    var zoom = 1;

    $(".zoom").on("click", function () {
        zoom += 0.1;
        $(".target").css("zoom", zoom);
    });
    $(".zoom-init").on("click", function () {
        zoom = 1;
        $(".target").css("zoom", zoom);
    });
    $(".zoom-out").on("click", function () {
        zoom -= 0.1;
        $(".target").css("zoom", zoom);
    });

    //zooming in-out and closing modal images with keys
    $(document).keyup(function (e) {
        if (e.key === "Escape") {
            $(".modal").removeClass("is-active");
        }
        if (e.key === "+") {
            zoom += 0.1;
            $(".target").css("zoom", zoom);
        }
        if (e.key === "-") {
            zoom -= 0.1;
            $(".target").css("zoom", zoom);
        }
    });
});

function enablePreview(){
    //taking all the previewButtons from the page
    const previewButtons = document.querySelectorAll("#previewButton");
    // console.log(previewButtons);

    //opening and closing modals
    let modals = document.querySelectorAll(".modal");
    let xbuttons = document.querySelectorAll(".modal-close");

    for (let i = 0; i < previewButtons.length; i++) {
        previewButtons[i].addEventListener("click", function () {
            modals[i].classList.add("is-active");
        });

        xbuttons[i].addEventListener("click", function () {
            modals[i].classList.remove("is-active");
            $("iframe").attr("src", $("iframe").attr("src"));
        });
    }
}

/**
 * Function that enables the filter functions of the Resources page.
 * These filter are: file format, alphabetical and date
 *
 * @param defaultOrderedItems List of item when no filter is applied
 */
function enableFilter(defaultOrderedItems) {
    const fileFormatSelect = document.getElementById("file-formats");
    const sortSelect = document.getElementById("sort-select");

    // Logic for the file format/type selector
    fileFormatSelect.addEventListener("change", () => {
        const value = fileFormatSelect.value;

        if (value != "0") {
            let $targetclass = "." + value;
            $(".is-one-third").each(function () {
                $(".is-one-third").hide();
            });
            $($targetclass).show();
        } else {
            $(".is-one-third").each(function () {
                $(".is-one-third").show();
            });
        }
    });

    // EventListener attached to the select HTML element
    sortSelect.addEventListener("change", () => {

        // Gets the selected value
        const value = sortSelect.value;

        // A to Z filter
        if (value == "a-z") {
            // Selects all the item, sort them and "rewrite" them to the DOM
            $(".is-one-third")
                .sort(function (a, b) {
                    // Gets the Item(HTML element)'s titles (names) for the sorting
                    let c = a.children[0].children[1].children[0].children[0];
                    let d = b.children[0].children[1].children[0].children[0];

                    if (c.textContent < d.textContent) {
                        return -1;
                    } else {
                        return 1;
                    }
                })
                .appendTo("#itemContainer");
        }
        // Z to A filter
        else if (value == "z-a") {
            // Selects all the item, sort them and "rewrite" them to the DOM
            $(".is-one-third")
                .sort(function (a, b) {
                    // Gets the Item(HTML element)'s titles (names) for the sorting
                    let c = a.children[0].children[1].children[0].children[0];
                    let d = b.children[0].children[1].children[0].children[0];

                    if (c.textContent > d.textContent) {
                        return -1;
                    } else {
                        return 1;
                    }
                })
                .appendTo("#itemContainer");
        }
        // Oldest to Newest filter
        else if (value == "old-new") {
            // Selects all the item, sort them and "rewrite" them to the DOM
            $(".is-one-third")
                .sort(function (a, b) {
                    if (a.children[1].id < b.children[1].id) {
                        return -1;
                    } else {
                        return 1;
                    }
                })
                .appendTo("#itemContainer");
        }
        // Newest to Oldes filter
        else if (value == "new-old") {
            // Selects all the item, sort them and "rewrite" them to the DOM
            $(".is-one-third")
                .sort(function (a, b) {
                    if (a.children[1].id > b.children[1].id) {
                        return -1;
                    } else {
                        return 1;
                    }
                })
                .appendTo("#itemContainer");
        }
        // No filter
        else {
            // Reverts back to the orginal item order
            defaultOrderedItems.appendTo("#itemContainer");
        }
    });
}

/**
 * Function that enables the Resources page's search bar .
 * The search bar only search for the titles/names of the items
 *
 * @param defaultOrderedItems List of item when no filter is applied
 */
function enableSearchBar(defaultOrderedItems) {
    // Gets the search bar element
    const searchbar = document.getElementById("searchbar");

    // EventListener: everytime a key is pressed
    searchbar.addEventListener("keyup", () => {
        // Filter text is upper case to simplify the search
        const filter = searchbar.value.toUpperCase();

        // Get the default list of items
        const items = defaultOrderedItems;

        // Empty jQuery list that will contain the filtered item
        let filteredItems= $();

        // Loops through every items
        for (i = 0; i < items.length; i++) {
            // Gets the "detail" section of the item(div)
            const itemDetails = items[i].children[0].children[0].children[1].children[0];
            
            // Gets the item's title
            const itemTitle = itemDetails.children[0].textContent;

            // Checks if the title contains the filter
            if (itemTitle.toUpperCase().indexOf(filter) > -1) {
                // Add the item to the filtered items
                filteredItems.push(items[i]);
            }
        }

        // If there is no item found, a text message will display.
        if (filteredItems.length === 0) {
            // The Message for no Items
            const message = "Sorry, there are no resources to be found.";
            // Container for Message
            const messageContainer = document.getElementById("itemContainer");
            // Element for the Message
            const messageHTMLElement = document.createElement("h3");

            // Add the text to the HTML Element
            messageHTMLElement.innerText = message;

            // Clears/empties the message container
            messageContainer.innerHTML = "";

            // Appends the message to the container
            messageContainer.appendChild(messageHTMLElement);

        } else {
            // Clears/empties the item's container
            $("#itemContainer").empty();
            // Appends the filtered items to the container
            filteredItems.appendTo("#itemContainer");

        }
    });
}
