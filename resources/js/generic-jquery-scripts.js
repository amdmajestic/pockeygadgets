$(document).ready(function () {
    adjust_main_content_container();
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
    const fitnessHeightInc = 25
    if (
        parseInt($("main").css("padding-top")) !==
        $("header").outerHeight() + fitnessHeightInc
    ) {
        $("main").css("padding-top", $("header").outerHeight() + fitnessHeightInc);
        // $("main").addClass(`pt-[${parseInt($("header").css("height")) + 100}px]`);
    }
}
