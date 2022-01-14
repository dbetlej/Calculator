<html>
    <body>
        <form action="/register" method="POST">
            @csrf
            <input type="email" name="email" placeholder="e-mail@example.eu" >
            <input type="text" name="login" placeholder="LOGIN" >
            <input type="password" name="password" placeholder="PASSWORD" >
            <input type="password" name="rpassword" placeholder="REPLY PASSWORD" >
            <input type="submit" value="register" >
        </form>
    </body>
</html>