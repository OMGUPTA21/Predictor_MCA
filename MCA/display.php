
<?php

session_start();

$username = "root";
$password = "";
$database = "collage";
$mysqli = new mysqli("localhost", $username, $password, $database);

if ($mysqli->connect_error) {
    die("Error : (' . $mysqli->connect_errno . ') " . $mysqli->connect_error);
}
else {
    //echo "connected.";
}
?>


<!doctype html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Piazzolla:wght@400;600&display=swap" rel="stylesheet">
    <link href="asset/Logo.png" rel="icon">
    <script src="js/modernizr/modernizr.min.js"></script>
    <style type="text/css">

.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 40%;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
  padding: 2px 16px;
}
@media(max-width: 767px;)
{

.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 40%;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container1{
  padding: 2px 8px;
  color: white;
}
}
@media (max-width: 767px) {
   .copyright
   {
    color: white;
   }
}

        .a {
            outline-style: solid;
            outline-color: coral;
            padding-right: 10px;
            padding-left: 10px;
        }

        #videoBG {
            position: fixed;
            z-index: -1;
        }

        @media (min-aspect-ratio: 16/9) {
            #videoBG {
                width: 100%;
                height: auto;
            }
        }

        @media (max-aspect-ratio: 16/9) {
            #videoBG {
                width: auto;
                height: 100%;
            }
        }

        @media (max-width: 767px) {
            #videoBG {
                display: none;
            }

            body {
              
                background: url('https://assets.crowncommercial.gov.uk/wp-content/uploads/shutterstock_678583375-scaled-e1584434182289.jpg');
                background-size: cover;
               
            }
        }

        * {
            box-sizing: border-box;
            
        }

        input[type=text],
        select,
        textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
        }

        label {
            padding: 30px;
            display: inline-block;
        }

        
        button {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float: right;
        }

        .butt{
            text-align: center;
        }

        button:hover {
            background-color: #45a049;
        }

        .data {
            background-color: rgba(255, 230, 200,0.7);
            font-family: "Sansita Swashed", cursive;
    
        }

        .intro{
            font-family: 'Piazzolla', serif;
            text-align: center;
            font-size: 22px;
        }

        .intro span{
            font-weight: 600;
        }
        .col-25 {
            text-align: center;
            float: left;
            width: 25%;
            margin-top: 6px;
        }

        .col-100{
            width: 100%;
        }
        
        .data-row{
            font-family: 'Piazzolla', serif;
            font-size: 110%;
        }
        .title{
            font-size: 180%;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 600px) {

            .col-25{
                width: 100%;
                margin-top: 0;
            }
        }
    </style>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <title>MCA WEST BENGAL COLLAGE PREDICTOR</title>

    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/coming-sssoon.css" rel="stylesheet" />

    <!--     Fonts     -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Grand+Hotel' rel='stylesheet' type='text/css'>

</head>

<body>
    <nav class="navbar navbar-transparent navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="dropdown">

                </ul>
                </li>

                </ul>
                <ul class="nav navbar-nav navbar-right">
                   
                </ul>

            </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
    </nav>
    <div class="main">


        <video id="videoBG" poster="https://assets.crowncommercial.gov.uk/wp-content/uploads/shutterstock_678583375-scaled-e1584434182289.jpg" autoplay muted loop>
            <source src="Untitled 1_1440p.mp4" type="video/mp4">
        </video>

        <!-- Customerly Live Chat Snippet Code -->
        <script>
            ! function() {
                var e = window,
                    i = document,
                    t = "customerly",
                    n = "queue",
                    o = "load",
                    r = "settings",
                    u = e[t] = e[t] || [];
                if (u.t) {
                    return void u.i("[customerly] SDK already initialized. Snippet included twice.")
                }
                u.t = !0;
                u.loaded = !1;
                u.o = ["event", "attribute", "update", "show", "hide", "open", "close"];
                u[n] = [];
                u.i = function(t) {
                    e.console && !u.debug && console.error && console.error(t)
                };
                u.u = function(e) {
                    return function() {
                        var t = Array.prototype.slice.call(arguments);
                        return t.unshift(e), u[n].push(t), u
                    }
                };
                u[o] = function(t) {
                    u[r] = t || {};
                    if (u.loaded) {
                        return void u.i("[customerly] SDK already loaded. Use customerly.update to change settings.")
                    }
                    u.loaded = !0;
                    var e = i.createElement("script");
                    e.type = "text/javascript", e.async = !0, e.src = "https://messenger.customerly.io/launcher.js";
                    var n = i.getElementsByTagName("script")[0];
                    n.parentNode.insertBefore(e, n)
                };
                u.o.forEach(function(t) {
                    u[t] = u.u(t)
                })
            }();

            customerly.load({
                "app_id": "b58e7c2d"
            });
        </script>
        <!-- End of Customerly Live Chat Snippet Code -->

        <!--   You can change the black color for the filter with those colors: blue, green, red, orange       -->

        <div class="container" id="divToPrint">
            <h1 class="logo cursive" style="color:aqua">
            <center><img src="asset/Logo.png" height="120" width="120"></center><br>
                <center>West Bengal MCA College Predictor</center>
            </h1>
            <p class="intro" style=" background-color: rgba(255, 230, 200,0.7); color:#45a049;">Congratulations <span><?php echo $_POST['fname'].' '.$_POST['lname']; ?></span> for getting <span><?php echo $_POST['rank']; ?></span> rank
       .We have some Colleges  for you based on 2022 Cut-offs.
        </p>
 
            <div class="container data">
               

                <?php
                
                $rank =  $_POST['rank'];
                $branch = $_POST['branch'];
                $institute = $_POST['institute'];
                
                
                if($rank == '0'){
                    echo 'Sorry, You are give wrong rank please try again';
                }
                else{

                if($branch == 'MCA'){
                $query = "SELECT * FROM collage WHERE CRank > ($rank-1) && institute='$institute'";
                echo '<div class="row data-row">
                  <table>
                <tr>
                    <th>Institute </th>
                    <th> Stream</th>
                    <th>OR</th>
                    <th>CR</th>
                 

                </tr>
            </table></div>';
                }
                

               

                if ($result = $mysqli->query($query)) {
                    while ($row = $result->fetch_assoc()) {
                        $field0name = $row["Sl no"];
                        $field1name = $row["College"];
                        $field2name = $row["Branch"];
                        $field3name = $row["ORank"];
                        $field4name = $row["CRank"];
                      
                     
                        
                       
                        echo '<div class="card">
                      <div class="row data-row">
                        <div class="col-25">
                        <center><div><h6> ' . $field1name . ' </h6> </div>
                        </div></center>
                        <br>
                            <div class="col-25">
                        <div>' . $field2name . '</div>
                        </div>
                            <div class="col-25">
                        <div>' . $field3name . '</div>
                        </div>
                            <div class="col-25">
                        <div>' . $field4name . '</div>
                        </div>
                       
                      </div> </div>';
                    }
                   
                    $result->free();
                }
            }

                ?>
                <div colspan="3" align="center" style="color:purle"><i class="fa fa-print fa-2x" aria-hidden="true" style="cursor:pointer;color:blue"  onclick="PrintDiv();">PRINT</i></td>
        </div>
                
            </div><br><br>
            <div class="butt">
                <a href="503.php"><button>Exit</button></a>
            </div>
            </div>
<div class="team members" >
    <center>
        <div class="row">
            <div class="jumbotron"><h4 style="color:green">MCA WEST BENGAL COLLAGE PREDICTOR</h4></div>
         <div class="column" style="padding-left: 20px;">
        <div class="card" style="    background-color: rgba(255, 230, 200,0.7);">
<br>
<img src="asset/Logo.png" height="120" width="120"><br>
  <div class="container1">
    <h4 style="color:brown"><b>COLLAGE PREDICTOR</b></h4> 
    <p style="color:brown">2023</p> 
  </div>
</div>


</div>
    </center>

    <br>
</div>


             <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                   <center> <p class="p-small" style="color: green;"><b>Copyright All Rights Reserved<br>© MCA WEST BENGAL COLLAGE PREDICTOR</b></p></center>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div>
        
</body>
<script src="js/jquery-1.10.2.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<!-- /.main-wrapper -->

        <!-- ========== COMMON JS FILES ========== -->
        <script src="js/jquery/jquery-2.2.4.min.js"></script>
        <script src="js/bootstrap/bootstrap.min.js"></script>
        <script src="js/pace/pace.min.js"></script>
        <script src="js/lobipanel/lobipanel.min.js"></script>
        <script src="js/iscroll/iscroll.js"></script>

        <!-- ========== PAGE JS FILES ========== -->
        <script src="js/prism.js"></script>

        <!-- ========== THEME JS ========== -->
        <script src="js/main.js"></script>
        <script type="text/javascript">     
    function PrintDiv() {    
       var divToPrint = document.getElementById('divToPrint');
       var popupWin = window.open('', '_blank', 'width=800,height=900,toolbar=0,scrollbars=0,status=0');
       popupWin.document.open();
       popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
        popupWin.document.close();
            }
 </script>

</html>