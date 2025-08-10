$(document).ready(function () {
    implement_dropdownBtns_translate_offs();
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
