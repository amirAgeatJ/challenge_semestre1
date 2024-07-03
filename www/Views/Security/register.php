<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>S'inscrire</title>
  <style>
    :root {
      --background-color: #ffffff; /* Default background color */
      --font-color: #000000; /* Default font color */
    }

    body {
      background-color: var(--background-color);
      color: var(--font-color);
      font-family: Arial, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    form {
      background-color: #fff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      width: 300px;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .container {
      text-align: center;
    }

    h2 {
      color: #333;
      margin-bottom: 20px;
    }

    .login-container {
      background-color: #fff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      width: 300px;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .social-login {
      display: flex;
      justify-content: space-around;
      width: 100%;
      margin-bottom: 15px;
    }

    .social-button {
      background-color: #e0e0e0;
      border: none;
      border-radius: 50%;
      width: 40px;
      height: 40px;
      font-size: 18px;
      display: flex;
      justify-content: center;
      align-items: center;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .social-button.facebook {
      color: #3b5998;
    }

    .social-button.google {
      color: #db4a39;
    }

    .social-button.linkedin {
      color: #0077b5;
    }

    .social-login p {
      font-size: 14px;
      color: #666;
      margin-top: 10px;
      text-align: center;
      width: 100%;
    }

    input {
      width: 100%;
      padding: 10px;
      margin: 10px 0;
      border: 1px solid #ddd;
      border-radius: 5px;
      box-sizing: border-box;
      font-size: 14px;
    }

    input:focus {
      border-color: #a5d6a7;
      outline: none;
    }

    button[type="submit"] {
      background-color: #a5d6a7;
      border: none;
      border-radius: 5px;
      padding: 10px;
      font-size: 16px;
      color: #fff;
      cursor: pointer;
      transition: background-color 0.3s ease;
      margin-top: 20px;
      width: 100%;
    }

    button[type="submit"]:hover {
      background-color: #81c784;
    }

    /* Specific styles for user-list-form */
    .user-list-form {
      background-color: transparent;
      padding: 0;
      border-radius: 0;
      box-shadow: none;
      width: auto;
      display: block;
    }

    .user-list-form table {
      width: 100%;
    }

    .user-list-form input {
      width: auto;
      margin: 0;
      border-radius: 0;
      border: none;
      box-shadow: none;
      font-size: 14px;
    }

    .user-list-form button {
      width: auto;
      margin: 0;
      border-radius: 0;
      padding: 5px 10px;
      font-size: 14px;
      border: none;  /* Add this line to remove the border */
    }

    .user-list-form button.btn {
      margin-top: 0;
    }

    /* No border for specific buttons */
    .no-border {
      border: none !important;
    }
  </style>
</head>
<body>
<div class="container">
  <h2>S'inscrire</h2>
  <div class="login-container">
      <?= $form ?>
  </div>
  <form action="/login" method="get" class="register-form">
    <button type="submit">Se connecter</button>
  </form>
</div>
</body>
</html>
