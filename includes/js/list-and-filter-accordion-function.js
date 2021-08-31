(function($){
		function $listAccordions(){
		$('.cspml_details_title').click(function(event){
			$(this).next('.cspml_details_content').toggle(event).preventDefault();
		});
}
$(document).ready($listAccordions);
$(document).ajaxComplete($listAccordions);
})(jQuery);
