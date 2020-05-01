<!doctype html>
<html>
    <head>
        <title>{{$title}}</title>
    </head>
    
    <body>
        <h1>Add Client</h1>
        <form action="{{url('customers/add')}}" method="post">

            Name : <input type="text" name="name"/><br/>
            Email : <input type="email" name="email"/><br/>
            City : <input type="text" name="city"/><br/>
            Phon : <input type="text" name="phone"/><br/>
            <input type="hidden" name="_token" value="{{csrf_token()}}"/><br/>
            <button type="submit">Add Customer</button>
        </form>

    </body>
</html>
