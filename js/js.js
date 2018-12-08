$( document ).ready(function() {
    //Cath click button Buy now
    $( "body" ).click(function( event ) {
    	if(event.target.classList[2] === "order"){
            //Show popup
    		$('#background').css('display', "block");
            //Name and price goods send to form
    		 var goods = $(event.target).parents()[0];
    		 goods = $(goods).children()[0];
    		 goods = $(goods).text();
    	     $('#goods').val(goods);
    	    var price = $(event.target).parents()[0];
    	    price = $(price).children()[1];
    	    price = $(price).children()[0];
    	    price = $(price).text();
    	    $('#price').val(price);
    	    $('#summa').val(price);
            //Close popup and show main page
    	}else if(event.target.id === "close"){
    		$('#background').css('display', "none");
    	}
   });

});