<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>S'inscrire</title>
  <style>
    :root {
      --background-color: #f7f9fc; /* Light background color */
      --font-color: #333; /* Dark font color */
      --primary-color: #4CAF50; /* Primary color for buttons */
      --secondary-color: #81c784; /* Secondary color for button hover */
      --input-border-color: #ddd; /* Border color for inputs */
      --input-focus-border-color: #4CAF50; /* Focus border color for inputs */
      --form-background-color: #fff; /* Form background color */
      --box-shadow-color: rgba(0, 0, 0, 0.1); /* Box shadow color */
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
      background-color: var(--form-background-color);
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 0 15px var(--box-shadow-color);
      width: 350px;
      display: flex;
      flex-direction: column;
      align-items: center;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    form:hover {
      transform: translateY(-5px);
      box-shadow: 0 0 20px var(--box-shadow-color);
    }

    .container {
      text-align: center;
    }

    h2 {
      color: var(--font-color);
      margin-bottom: 20px;
      font-size: 24px;
      text-transform: uppercase;
      letter-spacing: 1px;
    }

    .login-container {
      background-color: var(--form-background-color);
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px var(--box-shadow-color);
      width: 100%;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    input {
      width: 100%;
      padding: 12px;
      margin: 10px 0;
      border: 1px solid var(--input-border-color);
      border-radius: 5px;
      box-sizing: border-box;
      font-size: 14px;
      transition: border-color 0.3s ease;
    }

    input:focus {
      border-color: var(--input-focus-border-color);
      outline: none;
    }

    button[type="submit"] {
      background-color: var(--primary-color);
      border: none;
      border-radius: 5px;
      padding: 12px;
      font-size: 16px;
      color: #fff;
      cursor: pointer;
      transition: background-color 0.3s ease;
      margin-top: 20px;
      width: 100%;
      text-transform: uppercase;
      letter-spacing: 1px;
    }

    button[type="submit"]:hover {
      background-color: var(--secondary-color);
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

    .no-border {
      border: none !important;
    }

    .register-form {
      margin-top: 20px;
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
