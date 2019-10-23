
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        .boutonmenuprincipal {
            background-color: #e83737;
            color: white;
            border: none;
            cursor: pointer;
            padding:20px;
            margin-top:20px;
            font-size: 30px;
        }
        .boutonmenuprincipal:hover {
            background-color: #ff4444;
        }
        .dropdown {
            position: relative;
            display: inline-block;
        }
        .dropdown-child {
            display: none;
            background-color: #f28c8c;
            min-width: 50px;
        }
        .dropdown-child a {
            color: white;
            padding: 20px;
            text-decoration: none;
            display: block;
        }
        .dropdown:hover .dropdown-child {
            display: block;
        }
    </style>
</head>
<body>
<div class="dropdown">
    <button class="boutonmenuprincipal">Etat civil</button>
    <div class="dropdown-child">
        <a href="http://www.votresite.com/page1.html?etat=celibataire">Celibataire</a>
        <a href="http://www.votresite.com.com/page2.html">Marie</a>
        <a href="http://www.votresite.com.com/page3.html">Divorce</a>
        <a href="http://www.votresite.com.com/page4.html">Veuf(ve)</a>
        <a href="http://www.votresite.com.com/page5.html">Union Libre</a>
    </div>
</div>
<br><br><br><br>
<form action="pub.php" method="post">
    <select name="etat" id="">
        <option value="celibataire">célibataire</option>
        <option value="divorce">divorcé</option>
    </select>
    <input type="submit">
</form>


</body>
</html>
