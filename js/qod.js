(function () {

    // code goes here


    // 1: get request to grab random post and append to the DOM

    // add a click event for the "Show Me Another" btn and then run the AJAX code below
    $.ajax({
        method: "GET",
        url: // qod_vars.rest_url + /wp/v2/posts?filter[orderby]=rand&filter[posts_per_page]=1
    }).done(function (data) {
        console.log(data);
        // append the quote to the DOM
    }).fail(function (error) {
        console.log("an error occurred", error);
    });
})(jQuery);

// IIFE - immediately invoked function expression.
//Invoked also meams calling a function or just running a function