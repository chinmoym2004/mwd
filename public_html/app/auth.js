function error_handle(jqxhr, textStatus, error)
{
	switch (jqxhr.status) {
        case 412:
             // Take action, referencing xhr.responseText as needed.
             var message = $.parseJSON(jqxhr.responseText);
             console.log(message['message']);
             $.each(message['message'],function(i,v){
             	notification(message['status'],v);
             	console.log(v);
             	//alert(v);
             });
             break;
        case 404:
             // Take action, referencing xhr.responseText as needed.
             break;
        case 500:
             // Take action, referencing xhr.responseText as needed.
             //alert("Something went wrong");
             notification('error',"Whoops ! Something went wrong . Please try refreshing");
             break;
        default:


    }
    var err = textStatus + ", " + error;
    console.log( "Request Failed: " + err );
    console.log( jqxhr );
}
/*$(document).on("submit","#loginform",function(event){
	event.preventDefault();
	
	$.post(apppath+'/auth/login',$(this).serialize(), function(response) {
	    // Do something with the request

	},'json').done(function( json ) 
	{
	    console.log( "JSON Data: " + json.users[ 3 ].name );
	})
	.fail(function( jqxhr, textStatus, error )
	{
	    error_handle(jqxhr, textStatus, error);
	});
});*/

/*$(document).on("submit","#register",function(event){
	event.preventDefault();
	
	$.post(apppath+'/auth/register',$(this).serialize(), function(response) {
	    // Do something with the request

	},'json').done(function( json ) 
	{
	    console.log( "JSON Data: " + json.users[ 3 ].name );
	})
	.fail(function( jqxhr, textStatus, error )
	{
	    error_handle(jqxhr, textStatus, error);
	});
});*/