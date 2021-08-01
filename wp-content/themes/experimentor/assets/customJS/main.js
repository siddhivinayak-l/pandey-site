function navFunction() {
	var hamburger_id = document.getElementById("hamburger");
	if (hamburger_id.classList.contains("active")) {
		hamburger_id.classList.remove("active");
		document.getElementById("menu-header").style.display = "none";
	} else {
		hamburger_id.classList.add("active");
		document.getElementById("menu-header").style.display = "flex";
		document.getElementById("menu-header").style.left = "0";
		document.getElementById("menu-header").style.zIndex = "1";
		document.getElementById("menu-header").style.width = "100%";
		document.getElementById("menu-header").style.textAlign = "center";
	}
}
