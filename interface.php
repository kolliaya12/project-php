<html>
    <head>
        <title>my first page</title>
    </head>
<body>
<style>
    body{
        background:url(hmama.jpg.jpg);
        background-size:cover;
        background-repeat:no-repeat;
        background-attachment:fixed;
    }
    .wrapper{display:flex;
    justify-content:center;
    align-items:center;
    min-height:110vh;
    background:rgba(39,39,39,0.4);
    }
    .nav{
        position:fixed;
        top:0;
        display:flex;
        justify-content:space-around;
        width:100%;
        height:100px;
        line-height:100px;
        background: linear-gradient(rgba(39,39,39,0.6),transparent);
        z-index: 100;
    }
    .nav-pal{
        font-family:italic;
        color:white;
        font-size:40px;
        font-weight:600;

    }
    .nav-menu ul{
        display:flex;}
    .nav-menu ul li{
        font-size:25px;
        font-family:oblique;
        list-style-type:none;
    }
    .nav-menu ul li .link{
        text-decoration:none;
        font-weight:500;
        color:white;
        padding-bottom:15px;
        margin:0 25px;
    }
.link:hover, .active{
    border-bottom:2px solid #fff;
}

</style>
<div class="wrapper">
<nav class="nav">
<div class="nav-pal">
<p>FREE PALESTINE...</p>
</div>
<div class="nav-menu">
<ul>
    <li><a href="#" class="link active" >HOME</a></li>
    <li><a href="index.php" class="link" >SIGN IN</a></li>
    <li><a href="index2.php" class="link">SIGN UP</a></li>
</ul>
</div>
</nav>
</div>
</body>
</html>