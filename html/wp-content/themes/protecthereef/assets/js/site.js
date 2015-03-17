jQuery(document).ready(function($) {

	var Theme = {
		init: function() {
			var $self = this;
    		
    		$self.positionContent();

    		$(window).resize(function(){
	    		$self.positionContent();
    		});        		

    		$("input").focus(function(){
    			$self.focusForm(true);
    		});        		
    		
    		$(".overlay").click(function(){
    			$self.focusForm(false);
    		});

    		$("a[href=#sign]").click(function(){
    			$self.focusForm(true);
    			$("#first_name").focus();
    		});

    		$("a[href=#more]").click(function(){
    			$self.revealSubpage(true);
    		});
    		$(".close").click(function(){
    			$self.revealSubpage(false);
    		});

		},

        focusForm: function(focus) {
        	if(focus){
        		$(".overlay").fadeIn('fast');        		
        	}else{
        		$(".overlay").fadeOut('fast');
        	}
        },

        revealSubpage: function(focus) {
        	if(focus){
        		$(".sub-page").addClass('show');  
        		$(".primary-content").addClass('fade');        		
        	}else{
        		$(".sub-page").removeClass('show');  
        		$(".primary-content").removeClass('fade');
        	}
        },

        positionContent: function(){
        	var offset = $(".absolute-container").height()/2 / $(window).height() * -100 + 50;
        	$(".absolute-container").css("top", offset + "%");
        }

	}

	Theme.init();

	window.Theme = Theme;

});
