<footer class="footer-bs">
      <div class="container">
        <div class="row">
          <div class="col-xs-6 col-sm-3 footer-brand animated fadeInLeft">
              <img src="img/logo_white.png" class="img-fluid">
                <p>© Fourchon LNG 2018</p>
            </div>
          <div class="col-md-2 col-sm-2 footer-nav">
              <h4>Navigation —</h4>
              <div class="col-md-2 col-sm-2">
                    <ul class="list">
                        <li><a href="project-description.php">Project Description</a></li>
                        <li><a href="project-location.php">Project Location</a></li>
                        <li><a href="about.php">About LNG</a></li>
                        <li><a href="the-ferc-process.php">The FERC Process</a></li>
                    </ul>
                </div>
           </div>
          <div class="col-md-2 col-sm-2 footer-nav">
            <h4> </br> </h4>
              <div class="col-md-2 col-sm-2">
                    <ul class="list">
                        <li><a href="safety-and-environment.php">Safety and the Environment</a></li>
                        <li><a href="community-outreach.php">Community Outreach</a></li>
                        <li><a href="links.php">Links</a></li>
                    </ul>
                </div>
           </div>
          <div class="col-xs-2 col-sm-2 footer-ns animated fadeInRight">
              <h4>Contact Us</h4>
              <address>
                <p><strong>Fourchon LNG LLC.</strong>
                <br>2223 S 25th Street
                <br>Fort Pierce, Florida
                <br>34986, USA
                <br></p>
              </address>
              <address>
                <p><strong>Graham Elliott</strong> <br> Project Director
                <br><a href="mailto:#">grahame@fourchonLNG.net</a>
                <br>
                <br><strong>Chris Pope</strong> <br> Administration and Outreach
                <br><a href="mailto:#">outreach@fourchonLNG.net</a>
              </address>

            </div>
            <div class="col-xs-6 col-sm-3 footer-ns animated fadeInRight">
                <h4>Newsletter</h4>
                  <p>Subscribe to our newsletter.</p>
                  <p>
                    <form action="" method="post">
                      <div class="input-group input-group-sm">
                        <input type="email" id="semail" name="semail" class="form-control" placeholder="Email address" required>
                        <span class="input-group-btn">
                          <!-- <input class="btn btn-default" type="submit" value=""><span class="glyphicon glyphicon-envelope"></span></button> -->
                          <button id="submitTS" class="btn btn-primary btn-sm" type="button" onclick='return getvalues()'></span>Submit</button>
                          <!-- <span id="loading" style="display:none;"> -->
                          <img id="loading" style="display:none;" src="img/check-circle.gif" height="38px" width="35px"  />
                          <!-- </span> -->
                        </span>
                      </div><!-- /input-group -->
                      </form>
                   </p>
              </div>
        </div>
      </div>
      </footer>
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- <script type="text/javascript">
setTimeout(function() {
  document.getElementById("loading").style.display='none'
}, 10000);

    window.onload = function () {
      document.getElementById("submitTS").onclick = function () {
        // show the loading image
        var loading = document.getElementById("loading");
        loading.style.display = "block";
        setTimeout(hide, 5000);
        submitTS.style.display = "none";
        var xhr;
        if (window.XMLHttpRequest) xhr = new XMLHttpRequest();    // all browsers except IE
        else xhr = new ActiveXObject("Microsoft.XMLHTTP");      // for IE
        xhr.open('GET', 'ajax.php', false);
        xhr.onreadystatechange = function () {
          if (xhr.readyState===4 && xhr.status===200) {
            var div = document.getElementById('update');
            div.innerHTML = xhr.responseText;
            // now hide the loading image
            loading.style.display = "none";
          }
        }
        xhr.send();
      }
    }
    </script> -->
    <script>
$( "#submitTS" ).click(function() {
 getvalues();

    var loading = document.getElementById("loading");
    var submitTS = document.getElementById("submitTS");

     show = function(){
       loading.style.display = "block";
       submitTS.style.display = "none";
       setTimeout(hide, 1200); // 5 seconds
     },

     hide = function(){
       submitTS.style.display = "block";
       loading.style.display = "none";
     };


     show();
});
</script>

    <script type="text/javascript">
function getvalues(){
  var semail = document.getElementsByName('semail');
  // var semail = document.getElementById("semail").value;
  var semail1=semail[0];
  var semail2 = semail1.value;

    var dataString  = 'semail2=' + semail2;
     jQuery.ajax({

      type: "POST",
      url: "subscribe.php",
      dataType:"text",
      data:dataString,
      async:false,
      success:function(data){
      }
      });
}
</script>
 
