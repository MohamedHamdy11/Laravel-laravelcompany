<!doctype html>
<html>
    <head>
        <title>{{$title}}</title>
    </head>
    
    <body>
        <h1>All Clients</h1>
    	<ul>
    		@foreach($customers as $client)
    			<li><a href="#">{{$client->name}}</a></li>
			@endforeach
    	</ul> 
        <a href="customers/add">Add New Client</a>
    </body>
</html>
