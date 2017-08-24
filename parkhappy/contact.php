<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <title>Park Happy</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" media="all">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet" media="all">
  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
</head>

<body>
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"> <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span> 
        </button>
        <a href="./">
          <img id="logo" src="images/logo.png">
        </a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="./">Home</a>
          </li>
          <li><a href="services-list">Products & Services</a>
          </li>
          <li><a href="aboutus">About Us</a>
          </li>
          <li><a href="blog">Blog</a>
          </li>
          <li class="active"><a href="contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div align="center" class="services-list">
    <div class="services-list1">
      <h2 style="text-align: center;font-size: 38.05px;line-height: 57.075px;">Contact Park Happy</h2>
      <h4 style="margin:15px;font-weight: 300;text-align: center; color: #fff;"><a href="mailto:info@parkhappy.com">contact@parkhappyonline.com</a></h4>
      <h4 style="margin:15px;font-weight: 300;text-align: center; color: #fff;">Email: <a href="mailto:info@parkhappy.com">info@parkhappy.com</a></h4>
      <h4 style="margin:15px;font-weight: 300;text-align: center; color: #fff;">Park Happy inc.</h4>
      <h4 style="margin:15px;font-weight: 300;text-align: center; color: #fff;">100 Consilium Place, Suite 200, Scarborough, Ontario M1H 3E3</h4>
    </div>
  </div>
  <div align="center" class="eaze-parking">
    <form action="#" method="POST">
      <input class="contact-input form-control" type="text" placeholder="Your Name">
      <input class="contact-input form-control" type="email" placeholder="Emaill Address">
      <input class="contact-input form-control" type="number" placeholder="Phone Number">
      <input class="contact-input form-control" type="text" placeholder="Subject">
      <textarea class="contact-textarea form-control " rows="5" placeholder="Type your Message"></textarea>
      <input type="submit" style="margin: 20px;" class="btn btn-round btn-primary" value="SEND MESSAGE" />
    </form>
  </div>
  <div class="clearfix"></div>
  <?php include 'footer.php' ?>
</body>

</html>