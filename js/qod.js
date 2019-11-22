(function ($) {

    let lastPage = '';


    ////GET LOOP///////


    $("#new-quote-button").on('click', function (event) {
        event.preventDefault();
        lastPage = document.URL;
        console.log(lastPage);

        $.ajax({
            method: "GET",
            url: qod_vars.rest_url + '/wp/v2/posts?filter[orderby]=rand& filter[posts_per_page]=1'

        }).done(function (data) {
            const post = data[0];
            console.log("post in ajax", post);
            history.pushState(null, null, qod_vars.home_url + '/' + post.slug);
            $('.post').empty();
            $('.post').append(post.content.rendered);

            ////POST LOOP///////

        }).fail(function (error) {
            console.log("an error occurred", error);
        });

        //page update when clicking the forward and backward buttons
        $(window).on('popstate', function () {
            //update the url
            window.location.replace(lastPage);
        });

    });

    $("#quote-submission-form").on('submit', function (event) {
        event.preventDefault();
        $.ajax({
            method: "POST",
            url: window.qod_vars.rest_url + "/wp/v2/posts",
            data: {
                title: document.getElementById("quote-author").value,
                content: document.getElementById("quote-content").value,
                _qod_quote_source: document.getElementById("quote-source").value,
                _qod_quote_source_url: document.getElementById("quote-source-url").value
            },

            beforeSend: function (xhr) {
                xhr.setRequestHeader('X-WP-Nonce', window.qod_vars.wpapi_nonce);
            },
        }).done(function (data) {
            alert('Your Submission was Accepted !');
            console.log(data);
            // append the quote to the DOM
        }).fail(function (error) {
            console.log("an error occurred", error);
        });

    });
})(jQuery);

// IIFE - immediately invoked function expression.
//Invoked also meams calling a function or just running a function