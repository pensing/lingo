<?php
$leider=$_GET["leider"];
switch ($leider) {
    case "robert": $id="x0pyGajV6Es"; break;
    case "francois": $id="hv2wd_bQPrM"; break;
    case "nance": $id="CaBcyaHJAx0"; break;
    case "lucille": $id="WjvgH8yU7Aw"; break;
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <!--meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"-->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <!-- Extra CSS -->
    <link rel="stylesheet" href="lingo.css" />

    <script type="text/javascript" src="lingo.js"></script>

    <title>Lingo</title>
</head>

<body>

    <!-- Kop/header -->
  <div class="video-background">
    <div class="video-foreground">
    <!-- <iframe src="https://www.youtube.com/embed/<?php echo $id; ?>?controls=1&showinfo=0&rel=0&autoplay=1&loop=1&playlist=<?php echo $id; ?>" frameborder="0" allowfullscreen></iframe> -->
    <iframe src="https://www.youtube.com/embed/<?php echo $id; ?>?controls=1&showinfo=0&rel=0&autoplay=1&loop=1&playlist=<?php echo $id; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
  </div>



    <div class="container-fluid align-middle" style="text-align:center;background-color:transparent;height:80vh;">

        <h3 class="display-3 text-white font-weight-bold pt-4" style="color:white !important">spelleider <?php echo ucfirst($leider); ?></h3>

        <button class="btn btn-light mt-2" onclick="nieuwwoord()">Nieuw woord</button>
        <a class="btn btn-light mt-2" href="getalspel.html">Ballen pakken</a>

        <div style="margin:auto;margin-top:50px;width:335px;height:335px;background-color:white;">

            <div style="width:100%">
                <div id="r1k1" class="hokje">.</div>
                <div id="r1k2" class="hokje">.</div>
                <div id="r1k3" class="hokje">.</div>
                <div id="r1k4" class="hokje">.</div>
                <div id="r1k5" class="hokje">.</div>
            </div>

            <div style="width:100%">
                <div id="r2k1" class="hokje">.</div>
                <div id="r2k2" class="hokje">.</div>
                <div id="r2k3" class="hokje">.</div>
                <div id="r2k4" class="hokje">.</div>
                <div id="r2k5" class="hokje">.</div>
            </div>

            <div style="width:100%">
                <div id="r3k1" class="hokje">.</div>
                <div id="r3k2" class="hokje">.</div>
                <div id="r3k3" class="hokje">.</div>
                <div id="r3k4" class="hokje">.</div>
                <div id="r3k5" class="hokje">.</div>
            </div>

            <div style="width:100%">
                <div id="r4k1" class="hokje">.</div>
                <div id="r4k2" class="hokje">.</div>
                <div id="r4k3" class="hokje">.</div>
                <div id="r4k4" class="hokje">.</div>
                <div id="r4k5" class="hokje">.</div>
            </div>

            <div style="width:100%">
                <div id="r5k1" class="hokje">.</div>
                <div id="r5k2" class="hokje">.</div>
                <div id="r5k3" class="hokje">.</div>
                <div id="r5k4" class="hokje">.</div>
                <div id="r5k5" class="hokje">.</div>
            </div>

        </div>

        <div style="margin:auto;margin-top:50px;width:345px;height:auto;">
            <div style="margin-top:0px; width:335px; height: 70px; margin-left:5px; background-color:transparent; color:white; font-size:46px; font-weight:bold">
                <input id="woord" type="text" name="woord" value="" placeholder="....." maxlength="5" style="width:200px; text-transform: uppercase; padding-left: 12px;letter-spacing: 10px; font-weight: bold; font-size: 36px; background-color:#e52d28; color:white;">
                <br>
                <button class="btn btn-light" onclick='checkwoord(document.getElementById("woord").value)'>Controleren</button>
            </div>
        </div>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>