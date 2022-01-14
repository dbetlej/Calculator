<html>
    <body>
        <form action="/login" method="POST">
            @csrf
            <input type="email" placeholder="e-mail@example.eu" >
            <input type="password" placeholder="PASSWORD" >
            <input type="submit" value="sendDudes" >
        </form>
    </body>
</html>