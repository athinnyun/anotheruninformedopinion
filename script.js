$(document).ready(function(){
		// let activePage = document.querySelector(".active")
    // $(".blog-nav-item, .page_item").click(function(){
    //     $("*").removeClass("active");
    //     let activePage = event.target;
    // });
		$(function() {
			let pathname = window.location.pathname
			if (pathname === "/") {
				$('nav li a[href="/"]').addClass('active');
			} else {
				$('nav li a[href^="http://localhost:81' + pathname + '"]').addClass('active');
			}
		});
});