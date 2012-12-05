    $(function() {
	
        function updateTips( t ) {
            tips
                .text( t )
                .addClass( "ui-state-highlight" );
            setTimeout(function() {
                tips.removeClass( "ui-state-highlight", 1500 );
            }, 500 );
        }

			$("#feedBackButton").button().click(function(){
				$(this).next().toggle("slow", "linear");

			});		
    });