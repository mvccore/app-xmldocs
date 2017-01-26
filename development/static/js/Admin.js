Class.Define('Admin', {
	Extend: Module,
	Constructor: function () {
		this.parent();
		// run any modules if exist here:
		
	}
});

// run all declared javascripts after <body>, after all elements are declared
window.admin = new Admin();