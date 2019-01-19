<!doctype html>
<html>
    <head>
        <title>

        </title>
    </head>
    <body>
        <center>
            <h1>Laravel</h1>
            <form action="sumbitdata" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <span>Name: </span><input id="name_id" name="testname"><br> <br>
                <button type="submit">Submit</button>
            </form>
        </cetner>
    </body>
</html>