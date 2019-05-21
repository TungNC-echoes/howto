<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TABS</title>
    <link rel="stylesheet" href="../css/Menus/tabs.css">
</head>
<body>
<div class="tab">
    <button class="tablinks" onclick="openCity(event, 'Hanoi')">Ha Noi</button>
    <button class="tablinks" onclick="openCity(event, 'Hadong')">Ha Dong</button>
    <button class="tablinks" onclick="openCity(event, 'Hatay')">Ha Tay</button>
</div>

<div id="Hanoi" class="tabcontent">
    <h3>Ha Noi</h3>
    <p>Ha Noi is big city in Viet Nam.</p>
</div>

<div id="Hadong" class="tabcontent">
    <h3>Ha Dong</h3>
    <p>Ha Dong ngay sat Ha Noi</p>
</div>

<div id="Hatay" class="tabcontent">
    <h3>Ha Tay</h3>
    <p>Ha Tay dep tuyet voi</p>
</div>
<script src="../js/Menus/tabs.js"></script>
</body>
</html>