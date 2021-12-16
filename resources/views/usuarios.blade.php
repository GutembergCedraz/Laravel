<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <form action="{{url('/api/cadastrar_usuario')}}" method='post'>
        <label for="">Nome</label><br/>
        <input type="text" name="nome"> <br/>
        <label for="">Email</label><br/>
        <input type="text" name="email"> <br/>
        <label for="">Sexo</label><br/>
        <input type="text" name="sexo"> <br/>
        <label for="">Estado Civil</label><br/>
        <input type="text" name="estadocivil"> <br/>
        <label for="">Profissao</label><br/>
        <input type="text" name="profissao"> <br/>
        <button type="submit">Salvar</button>
    </form>
</body>
</html>
