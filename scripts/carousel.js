var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("frontpageslides");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) { myIndex = 1 }
    x[myIndex - 1].style.display = "block";
    setTimeout(carousel, 5000); // Change image every 5 seconds
}
$('ul.nav li.dropdown').hover(function () {
     $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
}, function () {
     $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
});
