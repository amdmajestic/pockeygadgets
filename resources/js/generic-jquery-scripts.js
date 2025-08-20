$(document).ready(function () {
    adjust_main_content_container();
    implement_hero_section_scroll();
    // implement_items_display_scroll();
    implement_all_carousel_scroll_buttons();
    implement_dropdownBtns_translate_offs();
    implement_all_image_toggles();
});

$(window).resize(function () {
    adjust_main_content_container();
});

function implement_dropdownBtns_translate_offs() {
    const dropdownBtns = ["consent-box-toggle"];
    dropdownBtns.forEach((dropdownBtn_id) => {
        $(document).on("click", function (e) {
            const dropdownBtn = document.querySelector(`#${dropdownBtn_id}`);
            if (dropdownBtn.checked) {
                if (!$(e.target).closest(dropdownBtn.parentNode).length) {
                    dropdownBtn.checked = false;
                }
            }
        });
    });
}

function adjust_main_content_container() {
    const fitnessHeightInc = 25;
    if (
        parseInt($("main").css("padding-top")) !==
        $("header").outerHeight() + fitnessHeightInc
    ) {
        $("main").css(
            "padding-top",
            $("header").outerHeight() + fitnessHeightInc
        );
        // $("main").addClass(`pt-[${parseInt($("header").css("height")) + 100}px]`);
    }
}

/** HOME-PAGE */
function implement_hero_section_scroll() {
    let skipInterval = false;
    const slides = document.getElementById("carouselSlides");
    const prevBtn = document.getElementById("prevBtn");
    const nextBtn = document.getElementById("nextBtn");
    let index = 0;
    const slideCount = document.querySelectorAll(
        "#carouselSlides > div"
    ).length;

    function showSlide(i) {
        slides.style.transform = `translateX(-${i * 100}%)`;
    }

    nextBtn.onclick = () => {
        index = (index + 1) % slideCount;
        skipInterval = true;
        showSlide(index);
    };
    prevBtn.onclick = () => {
        index = (index - 1 + slideCount) % slideCount;
        skipInterval = true;
        showSlide(index);
    };

    // Auto-scroll every 3 seconds
    setInterval(() => {
        if (skipInterval) {
            skipInterval = false;
            return;
        }
        index = (index + 1) % slideCount;
        showSlide(index);
    }, 3000);
}
// function implement_items_display_scroll() {
//     const $carousel = $("#items-display-carousel");
//     const itemWidth = 275 + 16; // 275px + 1rem (16px gap)
//     let currentIndex = 0;

//     function scrollCarousel(direction) {
//         const maxScroll =
//             $carousel[0].scrollWidth - $carousel.parent().outerWidth();
//         currentIndex += direction;

//         const maxIndex = Math.floor(maxScroll / itemWidth);
//         if (currentIndex < 0) currentIndex = 0;
//         if (currentIndex > maxIndex) currentIndex = maxIndex;

//         $carousel.animate(
//             {
//                 scrollLeft: currentIndex * itemWidth,
//             },
//             400
//         );
//     }

//     $carousel
//         .closest(".carousel-wrapper")
//         .find(".nextBtn")
//         .click(() => scrollCarousel(1));
//     // .click(() => console.log("n"));
//     $carousel
//         .closest(".carousel-wrapper")
//         .find(".prevBtn")
//         .click(() => scrollCarousel(-1));
//     // .click(() => console.log("p"));
// }

// function implement_items_display_scroll() {
//     $(function () {
//         const $carousel = $("#items-display-carousel");
//         const $wrapper = $carousel.parent();
//         let itemWidth = 0;
//         let visibleCount = 0;
//         let animating = false;

//         function updateSizes() {
//             const containerWidth = $wrapper.width();
//             const $items = $carousel.children();
//             if ($items.length === 0) return;

//             itemWidth = $items.outerWidth(true);
//             visibleCount = Math.floor(containerWidth / itemWidth) || 1;

//             if ($(window).width() < 640) {
//                 $(".prevBtn, .nextBtn").hide();
//                 $carousel.css({
//                     transform: "none",
//                     transition: "none",
//                     "flex-direction": "column",
//                 });
//                 return false;
//             } else {
//                 $(".prevBtn, .nextBtn").show();
//                 $carousel.css({
//                     "flex-direction": "row",
//                     transition: "transform 0.5s ease-in-out",
//                 });
//                 return true;
//             }
//         }

//         function scrollNext() {
//             if (animating) return;
//             animating = true;

//             // Animate transform to left by itemWidth
//             $carousel.css({
//                 transition: "transform 0.5s ease-in-out",
//                 transform: `translateX(${-itemWidth}px)`,
//             });

//             // After animation ends, move first item to end and reset transform
//             $carousel.one("transitionend", () => {
//                 $carousel.append($carousel.children().first());
//                 $carousel.css({
//                     transition: "none",
//                     transform: "translateX(0)",
//                 });
//                 // Allow next animation
//                 animating = false;
//             });
//         }

//         function scrollPrev() {
//             if (animating) return;
//             animating = true;

//             // Move last item to front immediately
//             $carousel.prepend($carousel.children().last());
//             // Set transform to left by itemWidth instantly (no transition)
//             $carousel.css({
//                 transition: "none",
//                 transform: `translateX(${-itemWidth}px)`,
//             });

//             // Animate transform back to 0 (slide right)
//             setTimeout(() => {
//                 $carousel.css({
//                     transition: "transform 0.5s ease-in-out",
//                     transform: "translateX(0)",
//                 });
//             }, 20);

//             // After animation ends, allow next animation
//             $carousel.one("transitionend", () => {
//                 animating = false;
//             });
//         }

//         $carousel
//             .closest(".carousel-wrapper")
//             .find(".nextBtn")
//             .click(() => {
//                 if ($(window).width() >= 640) scrollNext();
//             });
//         $carousel
//             .closest(".carousel-wrapper")
//             .find(".prevBtn")
//             .click(() => {
//                 if ($(window).width() >= 640) scrollPrev();
//             });

//         $(window).on("resize", () => {
//             if (updateSizes()) {
//                 // Reset carousel to default position
//                 $carousel.css({
//                     transition: "none",
//                     transform: "translateX(0)",
//                 });
//             }
//         });

//         // Init
//         updateSizes();
//     });
// }

function implement_all_carousel_scroll_buttons() {
    const $carousel_wrappers = $(".carousel-wrapper");

    $carousel_wrappers.each(function (index, carousel_wrapper) {
        const $carousel_wrapper = $(carousel_wrapper);
        const $prev_btn = $carousel_wrapper.parent().find(".prevBtn");
        const $next_btn = $carousel_wrapper.parent().find(".nextBtn");
        const $carousel_container = $carousel_wrapper.find(
            ".carousel-container"
        );

        let itemWidth = 0;
        let animating = false;

        function scrollNext() {
            if (animating) return;
            animating = true;

            $carousel_container.css({
                transition: "transform 0.5s ease-in-out",
                transform: `translateX(${-itemWidth}px)`,
            });

            $carousel_container.one("transitionend", () => {
                $carousel_container.append(
                    $carousel_container.children().first()
                );
                $carousel_container.css({
                    transition: "none",
                    transform: "translateX(0)",
                });
                animating = false;
            });
        }

        function scrollPrev() {
            if (animating) return;
            animating = true;

            $carousel_container.prepend($carousel_container.children().last());
            $carousel_container.css({
                transition: "none",
                transform: `translateX(${-itemWidth}px)`,
            });

            setTimeout(() => {
                $carousel_container.css({
                    transition: "transform 0.5s ease-in-out",
                    transform: "translateX(0)",
                });
            }, 20);

            $carousel_container.one("transitionend", () => {
                animating = false;
            });
        }

        // function enableDragScroll($carousel_container) {
        //     let isDragging = false;
        //     let startX, scrollLeft;

        //     // Mouse down event to start dragging
        //     $carousel_container.on("mousedown", function (e) {
        //         isDragging = true;
        //         startX = e.pageX - $carousel_container.offset().left; // Get the starting X position
        //         scrollLeft = $carousel_container.scrollLeft(); // Get the current scroll position
        //         $carousel_container.css("cursor", "grabbing"); // Change cursor to grabbing
        //     });

        //     // Mouse move event to handle dragging
        //     $carousel_container.on("mousemove", function (e) {
        //         if (!isDragging) return;
        //         e.preventDefault(); // Prevent text selection and other unwanted behaviors
        //         const x = e.pageX - $carousel_container.offset().left; // Get the current X position
        //         const walk = (x - startX) * 3; // Adjust scroll speed (e.g., 3x faster)
        //         $carousel_container.scrollLeft(scrollLeft - walk); // Scroll based on the movement
        //     });

        //     // Mouse up event to stop dragging
        //     $carousel_container.on("mouseup", function () {
        //         isDragging = false;
        //         $carousel_container.css("cursor", "grab"); // Reset the cursor to grab
        //     });

        //     // Mouse leave event to stop dragging if the cursor leaves the element
        //     $carousel_container.on("mouseleave", function () {
        //         if (isDragging) {
        //             isDragging = false;
        //             $carousel_container.css("cursor", "grab");
        //         }
        //     });
        // }

        /** */
        
        // function bindAutoAdjustObserver($carousel_container) {
        //     // Set up the IntersectionObserver to detect when the first item is visible
        //     const observer = new IntersectionObserver(
        //         (entries, observer) => {
        //             entries.forEach((entry) => {
        //                 if (entry.isIntersecting && entry.target === items[0]) {
        //                     // Automatically scroll the first item into view
        //                     entry.target.scrollIntoView({
        //                         behavior: "smooth",
        //                         block: "nearest",
        //                         inline: "start",
        //                     });
        //                     observer.disconnect(); // Stop observing after the first element is in view
        //                 }
        //             });
        //         },
        //         { threshold: 0.5 }
        //     ); // Trigger when 50% of the element is in view

        //     // Start observing the first item
        //     $carousel_container.children().each(function () {
        //         observer.observe($(this));
        //     });
        // }

        function updateSizes() {
            const containerWidth = $carousel_wrapper.width();
            const $items = $carousel_container.children();
            if ($items.length === 0) return [0, false];

            itemWidth = $items.outerWidth(true);
            const visibleCount = Math.floor(containerWidth / itemWidth) || 1;

            // if ($(window).width() < 640) {
            //     $carousel_wrapper.parent().find(".prevBtn, .nextBtn").hide();
            //     $carousel_container.css({
            //         transform: "none",
            //         transition: "none",
            //         "flex-direction": "column",
            //     });
            //     return [visibleCount, false];
            // } else {
            //     $carousel_wrapper.parent().find(".prevBtn, .nextBtn").show();
            //     $carousel_container.css({
            //         "flex-direction": "row",
            //         transition: "transform 0.5s ease-in-out",
            //     });
            //     return [visibleCount, true];
            // }

            return [visibleCount, true];
        }

        $(window).on("resize", () => {
            const [visibleCount, canScroll] = updateSizes();
            if (canScroll) {
                $carousel_container.css({
                    transition: "none",
                    transform: "translateX(0)",
                });
            }
        });

        $next_btn.on("click", scrollNext);
        $prev_btn.on("click", scrollPrev);

        $carousel_wrapper.on("mousedown touchstart", function () {
            $(this)
                .removeClass("overflow-x-hidden")
                .addClass("overflow-x-scroll");
        });
        $carousel_wrapper.on("mouseup touchend", function () {
            $(this)
                .removeClass("overflow-x-scroll")
                .addClass("overflow-x-hidden");
        });

        // enableDragScroll($carousel_container);
        // bindAutoAdjustObserver($carousel_container);

        // Initial setup
        updateSizes();
    });
}

function implement_all_image_toggles() {
    const $toggleTriggers = $(".image-toggle-trigger");
    $toggleTriggers.each(function () {
        const targetImageElement = $(this).siblings("img");
        const prevImage = targetImageElement.attr("src");
        $(this).on("mouseover", function () {
            image_toggle(
                $(this),
                targetImageElement,
                targetImageElement.data("hover-image")
            );
        });
        $(this).on("mouseout", function () {
            image_toggle($(this), targetImageElement, prevImage);
        });
    });
}
