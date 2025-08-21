$(document).ready(function () {
    adjust_main_content_container();
    implement_hero_section_scroll();
    // implement_items_display_scroll();
    implement_all_carousel_scroll_features();
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

function implement_all_carousel_scroll_features() {
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

        function beginScroll(
            directionMultiplier,
            insertMethod,
            targetNode,
            btnNode,
            elementClasses
        ) {
            if (animating) return; // Prevent overlapping animations
            animating = true;

            const transitionDuration = 500; // Duration in milliseconds

            $carousel_container.css({
                transform: `translateX(${
                    Number(directionMultiplier) * Number(itemWidth)
                }px)`,
            });

            $carousel_container.addClass(elementClasses.add?.join(" "));
            $carousel_container.removeClass(elementClasses.remove?.join(" "));

            $carousel_container.one("transitionstart", () => {
                btnNode.removeClass("bg-white cursor-pointer");
                btnNode.addClass("bg-neutral-300 cursor-progress");
            });
            $carousel_container.one("transitionrun", () => {
                insertMethod.call($carousel_container, targetNode.clone());
            });

            $carousel_container.one("transitionend", () => {
                targetNode.remove();
                $carousel_container.css({
                    transition: "none",
                    transform: "translateX(0)",
                });

                setTimeout(() => {
                    $carousel_container.removeAttr("style");
                    btnNode.removeClass("bg-neutral-300 cursor-progress");
                    btnNode.addClass("bg-white cursor-pointer");
                    animating = false;
                }, transitionDuration);
            });
        }

        function scrollNext() {
            beginScroll(
                -1, // Direction: move left
                $carousel_container.append,
                $carousel_container.children().first(),
                $(this),
                {
                    add: ["justify-start"],
                    remove: ["justify-end"],
                }
            );
        }

        function scrollPrev() {
            beginScroll(
                1, // Direction: move right
                $carousel_container.prepend,
                $carousel_container.children().last(),
                $(this),
                {
                    add: ["justify-end"],
                    remove: ["justify-start"],
                }
            );
        }

        function updateSizes() {
            const containerWidth = $carousel_wrapper.width();
            const $items = $carousel_container.children();
            if ($items.length === 0) return [0, false];

            itemWidth = $items.outerWidth(true);
            const visibleCount = Math.floor(containerWidth / itemWidth) || 1;

            return [visibleCount, true];
        }

        $(window).on("resize", () => {
            const [visibleCount, canScroll] = updateSizes();
            if (canScroll) {
                $carousel_container.css({
                    transition: "none",
                    transform: "translateX(0)",
                });
                $carousel_container.removeAttr("style");
                // $carousel_container.addClass("justify-start");
                // $carousel_container.removeClass("justify-end");
            }
        });

        $next_btn.on("click", scrollNext);
        $prev_btn.on("click", scrollPrev);

        // Initial setup
        updateSizes();

        // function enableMouseDragScroll($carousel_container) {
        // $carousel_wrapper.on("mousedown touchstart", function () {
        //     $(this)
        //         .removeClass("overflow-x-hidden overflow-hidden")
        //         .addClass("overflow-x-scroll");
        // });
        // $carousel_wrapper.on("mouseup touchend", function () {
        //     $(this)
        //         .removeClass("overflow-x-scroll")
        //         .addClass("overflow-x-hidden overflow-hidden");
        // });
        // }

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

        // function bindAutoAdjustObserver($container) {
        //     var container = $container.get(0);
        //     var debounceTimeout = null;

        //     // $container.css("overflow-x", "scroll");
        //     $container.removeClass("overflow-x-hidden overflow-hidden");
        //     $container.addClass("overflow-x-scroll");

        //     $container.on("scroll", function () {
        //         // Clear previous debounce timer
        //         if (debounceTimeout) clearTimeout(debounceTimeout);

        //         // $container.css("overflow-x", "scroll");
        //         $container.removeClass("overflow-x-hidden overflow-hidden");
        //         $container.addClass("overflow-x-scroll");

        //         // Set debounce to detect when scrolling stops
        //         debounceTimeout = setTimeout(function () {
        //             // Hide overflow after scrolling ends
        //             // $container.css("overflow-x", "hidden");
        //             // $container.removeAttr("style");
        //             $container.removeClass("overflow-x-scroll");
        //             $container.addClass("overflow-x-hidden overflow-hidden");

        //             var $items = $container.children();
        //             var containerRect = container.getBoundingClientRect();

        //             // Find visible items
        //             var visibleItems = $items.filter(function () {
        //                 var rect = this.getBoundingClientRect();
        //                 return (
        //                     rect.right > containerRect.left &&
        //                     rect.left < containerRect.right
        //                 );
        //             });

        //             if (visibleItems.length === 0) return;

        //             // Find leftmost and rightmost visible items
        //             var leftmost = visibleItems.first();
        //             var rightmost = visibleItems.first();

        //             visibleItems.each(function () {
        //                 var rect = this.getBoundingClientRect();
        //                 var leftRect = leftmost.get(0).getBoundingClientRect();
        //                 var rightRect = rightmost
        //                     .get(0)
        //                     .getBoundingClientRect();

        //                 if (rect.left < leftRect.left) {
        //                     leftmost = $(this);
        //                 }
        //                 if (rect.right > rightRect.right) {
        //                     rightmost = $(this);
        //                 }
        //             });

        //             var containerBounding = container.getBoundingClientRect();
        //             var rightmostBounding = rightmost
        //                 .get(0)
        //                 .getBoundingClientRect();
        //             var leftmostBounding = leftmost
        //                 .get(0)
        //                 .getBoundingClientRect();

        //             // Decide which item to scroll into view
        //             if (
        //                 (rightmostBounding.right - containerBounding.left) /
        //                     containerBounding.width >
        //                 0.45
        //             ) {
        //                 rightmost[0].scrollIntoView({
        //                     behavior: "smooth",
        //                     inline: "start",
        //                 });
        //             } else {
        //                 leftmost[0].scrollIntoView({
        //                     behavior: "smooth",
        //                     inline: "start",
        //                 });
        //             }
        //         }, 200); // debounce delay
        //     });
        // }

        /** */

        // enableMobileDragScroll($carousel_container);
        // enableDragScroll($carousel_container);
        // bindAutoAdjustObserver($carousel_container);
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
