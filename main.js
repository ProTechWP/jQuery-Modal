/* function to open modals when clicked */
function openModal() {
	$(".modal").on("change", function() {
			    if ($(this).find("input.modal-state[id^=modal-]").is(":checked")) {
			      $("body").addClass("modal-open");
			    } else {
			      $("body").removeClass("modal-open");
			    }
	});
}
/* function to close modals when clicked on CROSS or any besides the modal */
function closeModal() {
	$(".modal-fade-screen, .modal-close").on("click", function() {
		$(".modal-state:checked").prop("checked", false).change();
	});
}

/* function to prevent any events from bubbling up the DOM tree */
function modalStopProp() {
	$(".modal-inner").on("click", function(e) {
		e.stopPropagation();
	});
}