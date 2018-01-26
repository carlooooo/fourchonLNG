<?php   $name = $_GET['name']; ?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Fourchon LNG</title>
    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="120x120" href="favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicons/favicon-16x16.png">
    <link rel="manifest" href="favicons/manifest.json">
    <link rel="mask-icon" href="favicons/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="theme-color" content="#ffffff">
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles fot this -->
    <link href="css/style.css" rel="stylesheet">
    <script type="text/javascript">
      document.onkeyup=function(e){
          var e = e || window.event;
      if(e.altKey && e.which == 65) {
           window.open("admin/login.php");
      }
    }
    </script>
</head>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <div class="container">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav m2-auto">
        <li class="nav-item">
          <a class="nav-link" href="<?php echo $name; ?>">Home
            <!--<span class="sr-only">(current)</span>-->
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Project</a>
          <div class="dropdown-menu" aria-labelledby="dropdown01">
            <a class="dropdown-item" href="project-description.php?name=<?php echo $name; ?>">Project Description</a>
            <a class="dropdown-item" href="project-location.php?name=<?php echo $name; ?>">Project Location</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php?name=<?php echo $name; ?>">About LNG</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="the-ferc-process.php?name=<?php echo $name; ?>">The FERC Process</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="safety-and-environment.php?name=<?php echo $name; ?>">Safety and the Environment</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="community-outreach.php?name=<?php echo $name; ?>">Community Outreach</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="links.php?name=<?php echo $name; ?>">Links</a>
        </li>
      </ul>
    </div>
    <a class="navbar-brand" href="index.php?name=<?php echo $name; ?>"><img src="img/logo.png"></a>
  </div>
</nav>
<!--<div class="container" style="padding-top:20px">
<img src="img/logo.png" class="img-fluid">
</div>-->
