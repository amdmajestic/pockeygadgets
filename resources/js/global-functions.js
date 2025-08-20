window.image_toggle = function (currentTarget, imageElement, image_url) {
    function animate_bounce_function(target) {
        target.addClass("animate-pulse");
        setTimeout(() => {
            target.removeClass("animate-pulse");
        }, 1000);
    }

    imageElement.attr("src", image_url);
    animate_bounce_function(imageElement);
};
