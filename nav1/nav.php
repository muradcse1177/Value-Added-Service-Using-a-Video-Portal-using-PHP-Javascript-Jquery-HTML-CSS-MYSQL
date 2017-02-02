<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Path Nav</title>
    <link href="/static/s.css" rel="stylesheet" />
    <link href="menu.css" rel="stylesheet" />
</head>
<body>

<nav id="menu" class="path-nav path-nav-bottom-left">
    <a href="#menu" class="path-nav-expander">
        <!-- This cross markup is mandatory since only firefox support animation on pseudo content -->
        <div class="cross">
            <div class="cross-h"></div>
            <div class="cross-v"></div>
        </div>
    </a>
    <a href="#" class="path-nav-close"></a>
    <ul>
        <li><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li><a href="#">6</a></li>
    </ul>
</nav>

<nav id="menu2" class="path-nav path-nav-top-right">
    <a href="#menu2" class="path-nav-expander">
      
        <div class="cross">
            <div class="cross-h"></div>
            <div class="cross-v"></div>
        </div>
    </a>
    <a href="#" class="path-nav-close"></a>
    <ul>
        <li><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
    </ul>
</nav>
<script src="/static/3rd-party.js"></script>
</body>
</html>