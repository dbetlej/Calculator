<html>
    <body>
        <form action="/login" method="POST">
            @csrf
            <input type="email" name="email" placeholder="e-mail@example.eu" >
            <input type="password" name="password" placeholder="PASSWORD" >
            <input type="submit" value="login" >
        </form>
    </body>
</html>