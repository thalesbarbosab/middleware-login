<form action="/produtos" method="post">
    @csrf
    @method('POST')
    <input type="text" placeholder="nome de usuario" name="user"><br>
    <input type="password" name="passwd"><br>
    <button type="submit">Enviar</button>
</form>
