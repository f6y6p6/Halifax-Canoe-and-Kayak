$(function() {
	var openBtn = $('#menu-btn'),
		slideMenu = $('.menu');
	openBtn.on("click", function() {
		if (slideMenu.is(':hidden')) {
			slideMenu.slideDown(300);
		} else {
			slideMenu.slideUp(300);
		}
	});
});


document.getElementById("cards").onmousemove = e => {
    for(const card of document.getElementsByClassName("card")) {
      const rect = card.getBoundingClientRect(),
            x = e.clientX - rect.left,
            y = e.clientY - rect.top;
  
      card.style.setProperty("--mouse-x", `${x}px`);
      card.style.setProperty("--mouse-y", `${y}px`);
    };
}