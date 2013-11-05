(function($) {
	
	$.fn.restrictCharacters = function(restrictedCharacters) {
		
		var restrictedCodes = convertCharactersToCodes(restrictedCharacters);		
		return this.each(function() {
			
			var $this = $(this);
			
			$this.keypress(function(e) {

				return (restrictedCodes.indexOf(e.which) >= 0);
				
			});
			
		});
		
	};
	
	function convertCharactersToCodes(res) {
	
		var codes = [];
		for(var i = 0; i < res.length; i++) {
	
			codes.push(res[i].charCodeAt(0));
			
		}		
		return codes;
	}
	
	function isSpecialCharacter(charCode) {
		
		return !((charCode >= 32 && charCode <= 90) || (charCode >= 96 && charCode <= 111) || (charCode >= 186 && charCode <= 255));
		
	}
	
})(jQuery);
