<html>
<head>
<title>Timeline</title>
<link rel="stylesheet" href="./style.css">
<meta charset="utf-8">
</head>
<body>
<div class="navbar">
<img id="settings" src="./Icons/settings.png" onclick="myFun()">
<img class="profile" src="./Icons/profile.png">
<img class="noti" src="./Icons/noti.png">
<input class="sbar" type="text" placeholder="Pretraži...">
<img class="logo" src="./logo/tclogo111.png">
</div>
<div class="timeline1">
    <h3>Naslov 1</h3>
    <p class="text">text</p><br>
    <h3>Naslov 2</h3>
    <p class="text">text</p><br>
</div>
<div class="timeline2">
    <h3>Naslov 1</h3>
    <p class="text">text</p><br>
    <h3>Naslov 2</h3>
    <p class="text">text</p><br>
</div>
<div class="hotnews">
    <h4>Naslov 1</h4>
    <p class="text">text</p>
    <h4>Naslov 2</h4>
    <p class="text">text</p>
    <h4>Naslov 3</h4>
    <p class="text">text</p>
    <h4>Naslov 4</h4>
    <p class="text">text</p>
</div>
<div id="settings1">
    text
</div>
<script>
    function myFun() {
        var idk = document.getElementById("settings1");
        idk.style.display = "block";
    }
</script>
</body>
</html>