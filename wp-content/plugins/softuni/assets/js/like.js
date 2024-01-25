// JavaScript file

jQuery(document).ready(function ($) {
    $(".robots-like").on("click", function (e) {
        e.preventDefault();

        let post_id = jQuery(this).attr("data-post-id");
        jQuery.ajax({
            type: "post",
            dataType: "json",
            url: my_ajax_object.ajax_url,
            data: {
                action: "robots_like",
                post_id: post_id,
            },
            success: function (msg) {
                console.log(msg);
            },
        });
    });
});
