var Lock = function () {

    return {
        //main function to initiate the module
        init: function () {

             $.backstretch([
		        $("#base_url").val()+"assets/admin/pages/media/bg/1.jpg",
    		    $("#base_url").val()+"assets/admin/pages/media/bg/2.jpg",
    		    $("#base_url").val()+"assets/admin/pages/media/bg/3.jpg",
    		    $("#base_url").val()+"assets/admin/pages/media/bg/4.jpg"
		        ], {
		          fade: 1000,
		          duration: 8000
		      });
        }

    };

}();