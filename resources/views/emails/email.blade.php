<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Notification Laravel</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: Arial, Helvetica, sans-serif;
    }
    .a {
      color: #000;
      text-decoration: none;
    }
    .app-container {
      width: 100%;
      height: 100vh;
      background: #d4d4d4;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    .app-content {
      width: 80%;
      min-height: 450px;
      margin-left: auto;
      margin-right: auto;
      background-color: #fff;
      border-radius: 0.25rem;
      box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
    }
    .app-header {
      background-color: #20a896;
      color: #fff;
      text-align: center;
      text-transform: uppercase;
      padding: 0.5rem;
      border-bottom: 4px solid #a6dbd5;
      margin-bottom: 0.5rem;
    }
    .app-title {
      font-size: 1.25rem;
    }
    .app-body {
      padding: 0.5rem 3rem;
      font-size: 1.2rem;
      line-height: 1.5;
    }
    .app-greet,
    .app-message {
      padding-bottom: 1.5rem;
    }
    .bold {
      font-weight: 700;
    }
    .app-message a {
      text-decoration: none;
      color: #20a896;
    }
    .app-message a:hover {
      text-decoration: underline;
    }
    .app-btn {
      text-decoration: none;
      color: #000;
      background-color: #dbdbdb;
      display: inline-block;
      padding: 0.5rem 1.5rem;
      border-radius: 0.25rem;
      margin: 0.5rem auto;
    }
    .app-btn-primary {
      background-color: #20a896;
      color: #fff;
      font-weight: 400;
      text-align: center;
    }
    .app-btn-primary:hover {
      background-color: #197a6d;
    }
    .app-line {
      display: block;
      width: 100%;
      height: 2px;
      background-color: #f5f5f5;
      margin: 2rem 0;
    }
    .app-chau {
      margin-bottom: 2rem;
    }
  </style>
</head>
<body>
  <div class="app-container">
    <div class="app-content">
      <div class="app-header">
        <h1 class="app-title">{{ config('app.name') }}</h1>
      </div>
      <div class="app-body">
        <p class="app-greet">Buenas, <span class="bold">{{ $user->name }}</span></p>
        <p class="app-message">
          Usted tiene una nueva notificación en nuestra aplicación <a href="{{ route('home') }}">{{ config('app.name') }}</a>
        </p>
        <p class="app-message">Por favor ingrese a la notificación pendiente dando clic en siguiente botón</p>
        <a href="{{ route('messages.show',$msg->id) }}" class="app-btn app-btn-primary app-btn-block">Ir a la notificación</a>
        <div class="app-line"></div>
        <p class="app-chau">Gracias por usar nuestra aplicación, hasta luego, <span class="bold">{{ config('app.name') }}</span></p>
      </div>
    </div>
  </div>
</body>
</html>