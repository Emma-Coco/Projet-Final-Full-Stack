<!DOCTYPE html>
<html>
<head>
  <title>Centre d'assistance</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      margin: 0;
      padding: 0;
    }
    
    #bloc1 {
      background-color: #333;
      color: #fff;
      padding: 20px;
      text-align: center;
      width: 80%;
      margin: 0 auto;
    }
    
    #bloc1 h1 {
      margin: 0;
    }
    
    #bloc2 {
      background-color: #fff;
      padding: 20px;
      margin: 20px auto;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      width: 80%;
    }
    
    #bloc2 h2 {
      color: #333;
    }
    
    #bloc2 p {
      color: #777;
    }
    
    form {
      margin-top: 20px;
    }
    
    textarea {
      width: 6d0%;
      height: 120px;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      resize: none;
      margin-bottom: 10px;
    }
    
    input[type="submit"] {
      background-color: #333;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      margin-top: 10px;
    }
    
    input[type="submit"]:hover {
      background-color: #555;
    }
  </style>
</head>
<body>
  <div id="bloc1">
    <h1>Assistance</h1>
  </div>
  
  <div id="bloc2">
    <h2>Bienvenue sur le centre d'aide</h2>
    <p>Le service est ouvert 24h sur 24.</p>
    
    <form action="/envoyer_message" method="post">
      <textarea name="message" placeholder="Écrivez votre message"></textarea>
      <br>
      <input type="submit" value="Envoyer">
    </form>
  </div>
</body>
</html>