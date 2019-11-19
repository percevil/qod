(function () {

    // code goes here

    // 1:get request to grab random post and append to the DOM

    // Add a click evetn for the "Show Me Another" buttin an rthen run the
    //Ajax code below

    $.ajax({
        method:"GET",
        url:// qod_vars.rest_url + /wp/v2/

    }).done(function(data){
        console.log(data);
    }
    //2: post a new quote using the post method
    // Using s form a new quote using

})(jQuery);

// IIFE - immediately invoked function expression.
//Invoked also meams calling a function or just running a function