(function(window, $){

	/**
	 * Create the toast
	 * 
	 * @param type - Type of the toast
	 * @param header - Header of the toast
	 * @param message - the message
	 */
	$.fn.toast = function(type, header, message, options = {}){

		let $options = {
			closeButton: true,
	      	tapToDismiss: false,
	      	rtl: false
		}


		Object.assign($options, options)

		return window.toastr[type](message, header, $options);
	}


	/**
	 * Delete toast instance
	 * 
	 * @param element - The html element
	 */
	$.fn.toast.delete = function(element, options = {}) {
		let $options = {
			force : true
		}

		Object.assign($options, options)

		return window.toastr.clear(element, $options);
	}

})(window, jQuery);