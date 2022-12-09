<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/register.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css%22/%3E
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Dshape - Login</title>
</head>
<body>
  <div class="container">
      <form action="/auth" method="post">
        @csrf
        <a href="/">Voltar para tela inicial</a>
        <div class="title">Login</div>
          <div class="input-box">
            <input type="email" name="email" placeholder="Digite seu e-mail" required>
            <div class="underline"></div>
          </div>
        <div class="input-box underline">
          <input type="password" name="password" placeholder="Digite sua senha" required>
          <div class="underline"></div>
        </div>
        <div class="input-box button">
          <input type="submit" name="" value="Acessar">
        </div>
        @if ($msg = Session::get('erro'))
        <div class="option">
          {{$msg}}
        </div>
        @endif
      </form>
        <div class="option">
            Não possui uma conta? <a href="/register">Cadastrar-se</a>
        </div>
</div>
</body>
</html>
