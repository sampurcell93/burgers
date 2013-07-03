$(document).ready(function() {
	if (window.location.hash != "")
		showPage(window.location.hash)
	else
		showPage("#home")

	$("#findus").on("click", function() {
		$(this).toggleClass("expanded");
	})
	$("[rel=#findus]").on("click", function() {
		$("#findus").toggleClass("expanded");
	})
});
var bites = [
	{lo: 6   , hi: 150},
	{lo: 151 , hi: 300},
	{lo: 301 , hi: 450},
	{lo: 451 , hi: 600},
	{lo: 601 , hi: 750},
	{lo: 751, hi: 900},
	{lo: 901, hi: 12000}
]
$(window).scroll(function() {
	// var pos = $(document).scrollTop();
	// for (var i in bites){
	// 	var bite = bites[i];
	// 	if (pos >= bite.lo && pos <= bite.hi)
	// 		$("h1").removeClass().addClass("bite" + i);
	// }
	// var sides = $("#sides-menu");
	// if (sides.length && pos >= sides.offset().top)
	// 	sides.addClass("fixed").removeClass("fr w35");
}).on("hashchange", function() {
	var hash = window.location.hash;
	showPage(hash);
});

function showPage(id) {
	$(".wrap").fadeOut(100);
	$(id).fadeIn(200);
	$("nav").find("[href=" + id + "]").addClass("selected").parent().siblings().children().removeClass("selected");
	$("body").removeClass().addClass(id.toString().substring(1))
}