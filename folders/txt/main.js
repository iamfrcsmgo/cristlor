// Console
console.log("Il est interdit de copier les codes du site !");

// Accordeon
var acc = document.getElementsByClassName("accordion");
var i;
for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var a = this.nextElementSibling;
        if (a.style.maxHeight) {
            a.style.maxHeight = null
        } else {
            a.style.maxHeight = a.scrollHeight + "px"
        }
    })
}

// Copy link url
function copyToClipboard(a) {
    var b = $("<input>");
    $("body").append(b);
    b.val($(a).attr("link")).select();
    document.execCommand("copy");
    b.remove();
    notif({
        msg: "Lien copiÃ© dans le presse-papiers",
        bgcolor: "#ffa502",
        type: "default",
        fade: 0,
        timeout: 1500
    })
}