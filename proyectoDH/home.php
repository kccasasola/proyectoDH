<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Home | Wanderlust</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
  </head>
<body>
  <div class="container-fluid">
  <header class="color-a">
   <nav class="navbar navbar-expand-lg navbar-light bg-light background-nav">
    <img class="logo-img"src="img/logo.png" alt="logo">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item margin-li">
          <a class="nav-link color-a" href="home.php">Home</a>
        </li>
        <li class="nav-item margin-li">
          <a class="nav-link color-a" href="perfil.php">Mi perfil</a>
        </li>
        <li class="nav-item margin-li">
          <a class="nav-link color-a" href="index.php">Log Out</a>
        </li>
    </div>
</nav>
</header>
</div>

<script src="https://www.amcharts.com/lib/3/ammap.js" type="text/javascript"></script>
<script src="https://www.amcharts.com/lib/3/maps/js/worldHigh.js" type="text/javascript"></script>
<script src="https://www.amcharts.com/lib/3/themes/dark.js" type="text/javascript"></script>
<div id="mapdiv" style="width: 1000px; height: 450px;"></div>
<div style="width: 1000px; font-size: 70%; padding: 5px 0; text-align: center; background-color: #FFFFFF; margin-top: 1px; color: #FFFFFF;"><a href="https://www.amcharts.com/visited_countries/" style="color: #FFFFFF;"></a><a href="https://www.amcharts.com/" style="color: #FFFFFF;"></a>.</div>
<script type="text/javascript">
var map = AmCharts.makeChart("mapdiv",{
type: "map",
theme: "dark",
projection: "mercator",
panEventsEnabled : true,
backgroundColor : "#FFFFFF",
backgroundAlpha : 1,
zoomControl: {
zoomControlEnabled : true
},
dataProvider : {
map : "worldHigh",
getAreasFromMap : true,
areas :
[]
},
areasSettings : {
autoZoom : true,
color : "#FFFFFF",
colorSolid : "#d1964c",
selectedColor : "#d1964c",
outlineColor : "#000000",
rollOverColor : "#d1964c",
rollOverOutlineColor : "#000000"
}
});
</script>


</html>