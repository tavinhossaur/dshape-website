<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/register.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css%22/%3E
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Dshape - Cadastrar</title>
</head>
<body>
<div class="container">
      <form action="#">
        @csrf
        <a href="/">Voltar para tela inicial</a>
        <div class="title">Cadastrar-se</div>
        <div class="input-box underline">
            <input type="type" placeholder="Digite seu nome" required>
            <div class="underline"></div>
          </div>
          <div class="input-box">
            <input type="email" placeholder="Digite seu e-mail" required>
            <div class="underline"></div>
          </div>
        <div class="input-box underline">
          <input type="password" placeholder="Digite sua senha" required>
          <div class="underline"></div>
        </div>
        <div class="input-box">
          <input type="password" placeholder="Confirme a sua senha" required>
          <div class="underline"></div>
        </div>
        <div class="input-box button">
          <input type="submit" name="" value="Cadastrar">
        </div>
      </form>

        <div class="option">
            Já possui uma conta? <a href="/login">Logar</a>
        </div>
</div>
</body>
</html>
