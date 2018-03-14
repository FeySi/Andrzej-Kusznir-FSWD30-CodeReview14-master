<?php require_once 'actions/db_connect.php'; ?>

 

<!DOCTYPE html>

<html>

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha256-k2WSCIexGzOj3Euiig+TlR8gA0EmPjuc79OEeY5L45g=" crossorigin="anonymous"></script>   
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <title>Event Controller</title>


 

    <style type="text/css">
 
    body{
        background-color: #E8E8E8;
    }

        .manageUser {

            width: 100%;
            margin: auto;
        }

    .parallax {
    /* The image used */
    background-image: url("http://cdn.globaldanceelectronic.com/wp-content/uploads/2016/10/Escape-Insomniac-VIP.jpg");
    box-shadow: 0 5px 5px 0     rgb(144,0,0), 0 10px 10px 0 rgba(0, 0, 0, 0.2);

    /* Set a specific height */
    min-height: 550px; 
    width: 100%;
    margin-top: 10px;

    /* Create the parallax scrolling effect */
    b
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    border-radius: 5px;

}
        table {

            width: 100%;
            height: 100%;
            margin-top: 20px;
            color:grey;
            background: url("img/students_learning_platform.png");
        }

        h1 {
          text-align: center;
          color:silver;
          font-size: 30px;
          margin-bottom: 30px;
          margin-top:30px;
        }
    img {
      width: 100%;
    }

.content{
   flex: 1 0 auto;
   -webkit-flex: 1 0 auto;
   min-height: 200px;
}

#Footer{
   flex: 0 0 auto;
   -webkit-flex: 0 0 auto;
}

#myBtn {
  display: none;
  position: fixed;
  bottom: 25px;
  right: 30px;
  z-index: 99;
  border: 1px solid black
  outline: none;
  background-color: #00ACED;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 10px;
}

#myBtn:hover {
  background-color: #555;
}

#Footer{
    padding-top:32px;
}

#Footer .container{
    text-align: center;
}

#Footer .footer-copyright{
    margin-bottom: 35px;
    text-align: center;
    color: #777;
}

#Footer ul{
    list-style-type: none;
    padding: 0;
    margin-bottom: 18px;
}

#Footer a{
    color: #282b2d;
    font-size: 18px;
}

#Footer li{
    display: inline-block;
    margin: 0px 15px;
    line-height: 2;
}

#Footer .footer-social{
    text-align: center;
    padding-top: 25px;
    padding-bottom: 25px;
    background-color: #00ACED;
}

#Footer .fa{
    font-size: 36px;
    margin-right: 15px;
    margin-left: 20px;
    background-color: white;
    color: #d0d0d0;
    border-radius: 51%;
    padding: 10px;
    height: 60px;
    width: 60px;
    text-align: center;
    line-height: 43px;
    text-decoration: none;
    transition:color 0.2s;
}

#Footer .fa-facebook:hover{
   color: #2b55ff;
}

#Footer .fa-facebook:focus{
    color: #2b55ff; 
}

#Footer .fa-google-plus:hover{
    color:red;
}

#Footer .fa-google-plus:focus{
    color:red;
}

#Footer .fa-twitter:hover{
    color: #00aced;

}

#Footer .fa-twitter:focus{
    color:#00aced;
}
    </style>

 

</head>

<body>
  <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
        <ul>
            
            <a class="btn btn-info" href="create.php" style="margin-top: 7px;">Add Event</a>

        </ul>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <a style="float: right;margin-top: 7px;"" class="btn btn-info" href="logout.php?logout">Sign Out</a>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="parallax">
</div>
 
<div class="container">
<div class="manageUser">
      <h1 class="text-danger">BEST RAVE IN VIENNA</h1 >
        <?php

            $sql = "SELECT image,description,dateandtime,id FROM bige";

            $result = $connect->query($sql);

 
            echo "<div class='row'>";    
            if($result->num_rows > 0) {

                while($row = $result->fetch_assoc()) {

                    echo "
                        <div class='col-md-4'>
                          <div class='thumbnail'>
                              <img src='".$row['image']."' style='width:100%;height:250px;'>
                              <div class='caption'>
                                <p>".$row['description']."</p>
                                <p>".$row['dateandtime']."</p>
                                <a href='update.php?id=".$row['id']."'><button type='button'>Edit</button></a>
                                <a href='delete.php?id=".$row['id']."'><button type='button'>Delete</button></a>
                              </div>
                          </div>
                        </div>
";

                }

            }
            echo "</div>";

            ?>
        
           
      <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

    <footer id="Footer">
        <div class="container">
            <ul>
                <li><a href="#">Company Information</a></li>
                <li><a href="#">Contact us</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Terms of service</a></li>
            </ul>
        <p class="footer-copyright"><h4> Andrzej Kusznir &copy;  CodeFactory 2018</h4></p>
        </div>
        <div class="footer-social">
            <a href="http://www.facebook.com" class="social-icons"><i class="fa fa-facebook"></i></a>
            <a href="https://plus.google.com" class="social-icons"><i class="fa fa-google-plus"></i></a>
            <a href="https://twitter.com" class="social-icons"><i class="fa fa-twitter"></i></a>
        </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<!-- I dont wana creat script.js so put that in your file -->

<script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};
function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}
// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
</script>


             

       

   


</div>



</div>
</body>

</html>

