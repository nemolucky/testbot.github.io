# testbot.github.io
<body>
    
<link rel="stylesheet" href="форма.css">
<form action="#" method="post" target="_blank">
    <h1>Авторизация</h1>
          <input type="email" name="mail" placeholder="education email" id="email" required>
          <br>
          <input type="password" name="phone" placeholder="password" id="number" minlength="8" required>
    <div>
      <button type="submit">Войти</button>
      <p></p>
    </div>
  </form>
</body>


body{
    background-color: ECF0F1;
}

h1 {
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
}

form {
    text-align: center;
    margin-bottom: 100px;
    padding: 6rem;
}
input {
    width: 300px;
    height: 30px;
    border-radius: 5px;
    margin-bottom: 10px;
}
input:focus {
    border: 3px solid blue;
    width: 320px;
    height: 35px;
}
button {
    background-color: lightblue;
    width: 300px;
    height: 50px;
    border-radius: 20px;
}
button:hover {
    background-color: lightblue;
    transform: scale(1.05);
}
