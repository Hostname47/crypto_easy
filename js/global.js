$(".button-with-suboption").click(function() {
    if($(this).parent().find(".suboptions-container").css("display") == "none") {
        $(".suboptions-container").css("display", "none");
        $(this).parent().find(".suboptions-container").css("display", "block");
        console.log("to block");
    } else {
        $(this).parent().find(".suboptions-container").css("display", "none");
        console.log("to none");
    }

    return false;
})

$("body").click(function() {
    $(".suboptions-container").css("display", "none");
})

$(".suboptions-container").click(function(event) {
    event.stopPropagation();
})