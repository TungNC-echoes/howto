<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VERTICAL TABS</title>
    <style>
        * {
            box-sizing: border-box;
        }

        .tab {
            float: left;
            border: 1px solid #ccc;
            background-color: #f1f1f1;
            width: 30%;
            height: 300px;
        }

        .tab button {
            display: block;
            background-color: inherit;
            color: black;
            padding: 22px 16px;
            width: 100%;
            border: none;
            outline: none;
            text-align: left;
            cursor: pointer;
            transition: 0.3s;
            font-size: 17px;
        }

        .tab button:hover {
            background-color: #ddd;
        }

        .tab button.active {
            background-color: #ccc;
        }

        .tabcontent {
            float: left;
            padding: 0px 12px;
            border: 1px solid #ccc;
            width: 70%;
            border-left: none;
            height: 300px;
        }
    </style>
</head>
<body>

<h2>Vertical Tabs</h2>
<p>Click on the buttons inside the tabbed menu:</p>

<div class="tab">
    <button class="tablinks" onclick="openCity(event, 'Hanoi')" id="defaultOpen">Ha Noi</button>
    <button class="tablinks" onclick="openCity(event, 'Hadong')">Ha Dong</button>
    <button class="tablinks" onclick="openCity(event, 'Hatay')">Ha Tay</button>
</div>

<div id="Hanoi" class="tabcontent">
    <h3>Ha Noi</h3>
    <p>Ha Noi is big city in VN</p>
</div>

<div id="Hadong" class="tabcontent">
    <h3>Ha Dong</h3>
    <p>Ha Dong is in front of Ha Noi</p>
</div>

<div id="Hatay" class="tabcontent">
    <h3>Ha Tay</h3>
    <p>Ha Tay is include Ha Dong</p>
</div>

<script>
    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;

        tabcontent = document.getElementsByClassName("tabcontent");

        for (i=0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }

        tablinks = document.getElementsByClassName("tablinks");

        for (i=0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "")
        }

        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active"
    }
    document.getElementById("defaultOpen").click();
</script>
</body>
</html>
