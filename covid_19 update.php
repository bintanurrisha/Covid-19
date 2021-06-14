
<!DOCTYPE html>
<html lang="en.US">

<head>
  <meta charset="UTF-8" />
  <title>Covid 19 Website</title>

  <!--pavicon-->
    <link href="css/uikit.min.css" rel="stylesheet">
  <link href="css/font/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!--font-awesome-->

  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!--bootstrap.css-->

  <!--style.css-->
  <link href="css/style.css" rel="stylesheet">
  <!--style.css-->
<link rel="shortcut icon" type="image/x-icon" href="images/coronafaviconico.jpg">

</head>

<body onload="fetch()">
  <!--navbar section-->
 <nav class="navbar navbar-dark  navbar-expand-md " uk-sticky="top: 200; animation: uk-animation-slide-top; bottom: #sticky-on-scroll-up" >
    <div class="container">
      <a href="#" class="navbar-brand">
        Covid-19
      </a>
      <button class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item ">
            <a href="index.php" class="nav-link ">Home</a>
          </li>
          <li class="nav-item ">
            <a href="about.php" class="nav-link">About Corona</a>
          </li>
          <li class="nav-item active">
            <a href="covid_19 update.php" class="nav-link">Covid-19 Update</a>
          </li>

          <li class="nav-item ">
            <a href="contuct.php" class="nav-link">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<!--header section-->
  <!--covid bg section-->
  <section>
  <div class="about text-center text-light ">
    <h1 class="text-danger display-4 font-weight-bold ">COVID-19</h1>
    <p class="lead text-dark">Information and update of covid 19</p>
  </div>
</section>
  
<!--api key-->
 
         <section class="corona_update container-fluid">
              <div class="mb-3">
                  <h3 class="text-center text-uppercase">Covid 19 updates</h3>
              </div>

              <div class="table-responsive">
<table class=" table table-bordered table-striped text-center" id="tablevalue">
  <tr>
    <th>location</th>
    <th>Total Confirmed</th>
    <th>Total Deaths</th>
    <th>Total Recovered</th>
    <th>Date</th>
  </tr>
</table>
              </div>
        </section>
  <!--copy right section-->
  <section id="copyright" class="text-center py-3 ">
    <div class="container">
      <div class="row">
        <div class="col">
          <p class="lead mb-0">Copyright 2021 &copy; Risha</p>
        </div>
      </div>
    </div>
  </section>

  <!--bootstrap.js-->

  <!--custom.js-->
  <script src="js/proper.min.js"></script>

  <!--navbar.js-->
  <script src="js/jqury.js"></script>
  <!--jquary.js-->
  <script src="js/bootstrap.min.js"></script>
  <script src="js/uikit.min.js"></script>
  <script src="js/uikit-icons.min.js"></script>


  <script>
    function fetch(){
      $.get("https://api.covid19api.com/summary",
      function (data){
        //console.log(data['Countries'].length);
        var tablevalue = document.getElementById('tablevalue');
        for(var i=1;i<(data['Countries'].length); i++){
          var x=tablevalue.insertRow();
          x.insertCell(0);
          tablevalue.rows[i].cells[0].innerHTML= data['Countries'][i-1]['Country'];
          x.insertCell(1);
          tablevalue.rows[i].cells[1].innerHTML= data['Countries'][i-1]['TotalConfirmed'];
          x.insertCell(2);
          tablevalue.rows[i].cells[2].innerHTML= data['Countries'][i-1]['TotalDeaths'];
          x.insertCell(3);
          tablevalue.rows[i].cells[3].innerHTML= data['Countries'][i-1]['TotalRecovered'];
          x.insertCell(4);
          tablevalue.rows[i].cells[4].innerHTML= data['Countries'][i-1]['Date'];

        }
      }
     )

    }
</script>
</body>

</html>
