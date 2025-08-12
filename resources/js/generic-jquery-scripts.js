$(document).ready(function () {
    adjust_main_content_container();
    implement_hero_section_scroll();
    implement_dropdownBtns_translate_offs();
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

function implement_hero_section_scroll() {
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
        showSlide(index);
    };
    prevBtn.onclick = () => {
        index = (index - 1 + slideCount) % slideCount;
        showSlide(index);
    };

    // Auto-scroll every 3 seconds
    setInterval(() => {
        index = (index + 1) % slideCount;
        showSlide(index);
    }, 3000);
}
