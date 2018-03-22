@extends('welcome')
@section('title', 'street')

<!DOCTYPE html>
<html lang="en">

<head>
@section('lib')
  <meta charset="utf-8">
  <title>otlob</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <!-- Place your favicon.ico and apple-touch-icon.png in the template root directory -->
  <link href="favicon.ico" rel="shortcut icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{ asset('lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{ asset('lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ asset('lib/animate-css/animate.min.css') }}" rel="stylesheet">
  

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
 
  <style>

    /* Team Section
--------------------------------*/
.section-title {
  font-size: 32px;
  color: #111;
  text-transform: uppercase;
  text-align: center;
  font-weight: 700;
}

.section-description {
  text-align: center;
  margin-bottom: 40px;
}

.section-title-divider {
  width: 50px;
  height: 3px;
  background: #03C4EB;
  margin: 0 auto;
  margin-bottom: 20px;
}
#team {
  background: #fff;
  padding: 80px 0 60px 0;
}

#team .member {
  text-align: center;
  margin-bottom: 20px;
}

#team .member .pic {
  margin-bottom: 15px;
  overflow: hidden;
  height: 260px;
}

#team .member .pic img {
  max-width: 100%;
}

#team .member h4 {
  font-weight: 700;
  margin-bottom: 2px;
}

#team .member span {
  font-style: italic;
  display: block;
  font-size: 13px;
}

#team .member .social {
  margin-top: 15px;
}

#team .member .social a {
  color: #b3b3b3;
}

#team .member .social a:hover {
  color: #03C4EB;
}

#team .member .social i {
  font-size: 18px;
  margin: 0 2px;
}
    </style>
</head>
@endsection
<body>
  <div id="preloader"></div>
<!--==========================
  Team Section
  ============================-->
  @section('team')
  <section id="team">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Our Team</h3>
          <div class="section-title-divider"></div>
          <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <div class="member">
            <div class="pic"><img src="images/team-2.jpg" alt=""></div>
            <h4>Mora</h4>
            <span>Chief Executive Officer</span>
            <div class="social">
              <a href=""><i class="fa fa-twitter"></i></a>
              <a href=""><i class="fa fa-facebook"></i></a>
              <a href=""><i class="fa fa-google-plus"></i></a>
              <a href=""><i class="fa fa-linkedin"></i></a>
            </div>
          </div>
        </div>

        <div class="col-md-2">
          <div class="member">
            <div class="pic"><img src="images/team-2.jpg" alt=""></div>
            <h4>Sarah</h4>
            <span>Product Manager</span>
            <div class="social">
              <a href=""><i class="fa fa-twitter"></i></a>
              <a href=""><i class="fa fa-facebook"></i></a>
              <a href=""><i class="fa fa-google-plus"></i></a>
              <a href=""><i class="fa fa-linkedin"></i></a>
            </div>
          </div>
        </div>

        <div class="col-md-2">
          <div class="member">
            <div class="pic"><img src="images/team-2.jpg"  alt=""></div>
            <h4>Nesreen</h4>
            <span>CTO</span>
            <div class="social">
              <a href=""><i class="fa fa-twitter"></i></a>
              <a href=""><i class="fa fa-facebook"></i></a>
              <a href=""><i class="fa fa-google-plus"></i></a>
              <a href=""><i class="fa fa-linkedin"></i></a>
            </div>
          </div>
        </div>

        <div class="col-md-2">
          <div class="member">
            <div class="pic"><img src="images/team-4.jpg" alt=""></div>
            <h4>Ester</h4>
            <span>Accountant</span>
            <div class="social">
              <a href=""><i class="fa fa-twitter"></i></a>
              <a href=""><i class="fa fa-facebook"></i></a>
              <a href=""><i class="fa fa-google-plus"></i></a>
              <a href=""><i class="fa fa-linkedin"></i></a>
            </div>
          </div>
        </div>
        <div class="col-md-2">
          <div class="member">
            <div class="pic"><img src="images/team-4.jpg"  alt=""></div>
            <h4>Doaa</h4>
            <span>Accountant</span>
            <div class="social">
              <a href=""><i class="fa fa-twitter"></i></a>
              <a href=""><i class="fa fa-facebook"></i></a>
              <a href=""><i class="fa fa-google-plus"></i></a>
              <a href=""><i class="fa fa-linkedin"></i></a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>


  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  @endsection
  <!-- Required JavaScript Libraries -->
  @section('teamsc')
  <script src="{{ asset('lib/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('lib/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('lib/superfish/hoverIntent.js') }}"></script>
  <script src="{{ asset('lib/superfish/superfish.min.js') }}"></script>
  <script src="{{ asset('lib/morphext/morphext.min.js') }}"></script>
  <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
  <script src="{{ asset('lib/stickyjs/sticky.js') }}"></script>
  <script src="{{ asset('lib/easing/easing.js') }}"></script>
  <!-- Template Specisifc Custom Javascript File -->
  <script src="js/custom.js"></script>
  @endsection

</body>

</html>
