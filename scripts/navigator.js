window.onload = function() {
	attachLink("speakers_link", "speakers");
	attachLink("timekeeper_link", "timekeeper");
	attachLink("J1_P_link", "judge_1_prepared");
	attachLink("J1_I_link", "judge_1_impromptu");
	attachLink("J2_P_link", "judge_2_prepared");
	attachLink("J2_I_link", "judge_2_impromptu");
	attachLink("J3_P_link", "judge_3_prepared");
	attachLink("J3_I_link", "judge_3_impromptu");
	attachLink("results_link", "results");
	attachLink("event_link", "event");
	showOnly("event");
}
function attachLink(id, target) {
	var link = document.getElementById(id);
		link.addEventListener("click", function(){showOnly(target);});
}
function showOnly(target){
	hideAll();
	var target = document.getElementById(target);
	target.classList.remove("hidden");
}
function hideAll(){
	sections = document.getElementsByTagName("section");
	for(var i = 0; i < sections.length;i++){
		sections[i].classList.add("hidden");
	}
}
