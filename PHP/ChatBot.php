<?php
    // Page ChatBot
?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>ChatBot IA</title>
<link rel="stylesheet" href="../CSS/chatbot.css">
</head>
<body>

<div class="chat-container">
    <div class="chat-header">Assistant IA</div>

    <div class="chat-box" id="chat-box"></div>

    <div class="chat-input">
        <input type="text" id="user-input" placeholder="Écrire un message...">
        <button onclick="sendMessage()">Envoyer</button>
    </div>
</div>

<script src="../JavaScript/ChatBot.js"></script>
</body>
</html>


  