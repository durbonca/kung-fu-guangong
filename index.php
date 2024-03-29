<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <?php include ('mail.php'); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Stylish&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/font/css/all.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css">


    <title>Escuela de artes marciales | kung-fu GuanGong</title>
</head>

<body style="background-color: rgb(36,40,43);" data-gr-c-s-loaded="true" cz-shortcut-listen="true">
    <nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contacto</a>
                </li>
                <!--  <li class="nav-item">
                    <a class="nav-link" href="#about">Historia</a>
                </li> -->
            </ul>
        </div>
                <ul class="form-inline my-2 my-lg-0 ">
                    <h3 class="display-3">
                        <il> <a href="https://wa.me/56951787063"><i id="whatsapp" class="fab fa-whatsapp-square"></i></a></il>
                        <il> <a href="https://www.instagram.com/kungfuguangong/"><i id="instagram" class="fab fa-instagram"></i></a></il>
                        <il> <a href="https://www.facebook.com/kungfulaflorida/"><i id="facebook" class="fab fa-facebook-square"></i></a></il>
                    </h3>
                </ul>
    </nav>

    <section id="hero">


        <header>
            <div class="overlay"></div>
            <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
                  <source src="assets/video/videoHeader.mp4" type="video/mp4">
                </video>
            <div class="container h-100 p-0">
                <div class="d-flex h-100 text-center align-items-center">
                    <div class="w-100 text-white" id="video_container">
                        <div class="flex-container-logo">
                            <div class="fire-logo">
                                <img id="logo" src="assets/img/logo.jpg" alt="" srcset="">
                            </div>
                        </div>
                        <div style="position: relative; bottom: -150px; background-color: black; width: 100%;">
                            <p class="lead mb-0">Escuela de kung-fu</p>
                            <!--  <h1 class="display-3" id="hero_tittle">Guangong Wuxiao</h1> -->

                            <p class="lead mb-0">Millaray 20, La Florida</p>
                            <p> Clases lun-mie-vie / 9:30-20:00-21:00</p>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </section>

    <section id="contact">
        <div class="container">
            <div class="row pt-5">
                <div class="col-md-6 col-md-offset-3 mt-3">
                    <h1 class="text-light text-center">Contacto</h1>
                    <form class="form-horizontal" role="form" method="post" action="index.php">
                        <div class="form-group">
                            <strong class="text-secondary" style="color: rgb(255,255,255);margin: 5px;padding: 5px;">Nombre</strong>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Nombre completo" value=''>
                                <?php echo "<p class='text-danger'>$errName</p>";?>
                            </div>
                        </div>
                        <div class="form-group">
                            <strong class="text-secondary" style="color: rgb(255,255,255);margin: 5px;padding: 5px;">Email</strong>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="email" name="email" placeholder="ejemplo@gmail.com" value=''>
                                <?php echo "<p class='text-danger'>$errEmail</p>";?>
                            </div>
                        </div>
                        <div class="form-group">
                            <strong class="text-secondary" style="color: rgb(255,255,255);margin: 5px;padding: 5px;">Mensaje</strong>
                            <div class="col-sm-10">
                                <textarea class="form-control" rows="4" name="message" value=''></textarea>
                                <?php echo "<p class='text-danger'>$errMessage</p>";?>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-10">
                                <div class="g-recaptcha" data-sitekey="6LfXu6YUAAAAALl_4POI89ZC8soIBgAf_rbG-sV8"></div>
                                <?php echo "<p class='text-danger'>$errCapt</p>";?>
                                </br>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-10 col-sm-offset-2">
                                <input id="submit" name="submit" type="submit" value="Enviar" class="btn btn-primary">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-10 col-sm-offset-2">
                                <?php echo $result; ?>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 col-md-offset-3 mt-3 mb-3">
                    <h1 class="text-light text-center mb-3">Ubicación</h1>
                    <iframe allowfullscreen="" frameborder="0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAz6OJtcaqlTf4Sd3ppY_dmMvz8dCvfRNg&amp;q=millaray+20%2C+la+florida&amp;zoom=14" width="100%" height="400"></iframe>
                </div>
            </div>
        </div>
    </section>


    <!--   <section id="about" style="background-color: rgb(36,40,43);">

        <div class="accordion" id="accordionExample">
            <div class="card ">
                <div class="card-header " id="headingOne ">
                    <h2 class="mb-0 ">
                        <button class="btn btn-link " type="button " data-toggle="collapse " data-target="#collapseOne " aria-expanded="true " aria-controls="collapseOne ">
                    Collapsible Group Item #1
                  </button>
                    </h2>
                </div>

                <div id="collapseOne " class="collapse show " aria-labelledby="headingOne " data-parent="#accordionExample ">
                    <div class="card-body ">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
                        on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                        farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                </div>
            </div>
            <div class="card ">
                <div class="card-header " id="headingTwo ">
                    <h2 class="mb-0 ">
                        <button class="btn btn-link collapsed " type="button " data-toggle="collapse " data-target="#collapseTwo " aria-expanded="false " aria-controls="collapseTwo ">
                    Collapsible Group Item #2
                  </button>
                    </h2>
                </div>
                <div id="collapseTwo " class="collapse " aria-labelledby="headingTwo " data-parent="#accordionExample ">
                    <div class="card-body ">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
                        on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                        farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                </div>
            </div>
            <div class="card ">
                <div class="card-header " id="headingThree ">
                    <h2 class="mb-0 ">
                        <button class="btn btn-link collapsed " type="button " data-toggle="collapse " data-target="#collapseThree " aria-expanded="false " aria-controls="collapseThree ">
                    Collapsible Group Item #3
                  </button>
                    </h2>
                </div>
                <div id="collapseThree " class="collapse " aria-labelledby="headingThree " data-parent="#accordionExample ">
                    <div class="card-body ">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
                        on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                        farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                </div>
            </div>
        </div>

    </section> -->


    <div class="footer col-12 text-white bg-dark mb-0 pb-0 ">
        <div class="row ">
            <div class="col item social text-center mb-3 mt-3 ">
                <h3 class="h3 "><a class="mr-3 " href=" https://www.facebook.com/kungfulaflorida/ "><i class="icon fab fa-facebook text-white "></i></a><a href="https://www.instagram.com/kungfuguangong/ "><i class="fab fa-instagram text-white "></i></a></h3>
            </div>
        </div>
        <hr class="hr mt-0 ">
        <p class="copyright text-center pb-2 mb-0 ">Kung Fu La Florida © 2020</p>
    </div>

    <script type="text/javascript " async=" " src="https://www.gstatic.com/recaptcha/releases/PRkVene3wKrZUWATSylf69ja/recaptcha__es_419.js "></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js " integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo " crossorigin="anonymous "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js " integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1 " crossorigin="anonymous "></script>
    <!-- <script src="assets/js/bootstrap.min.js " integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM " crossorigin="anonymous "></script> -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://www.google.com/recaptcha/api.js " async=" " defer=" "></script>

    <!-- <script>
        var template_params = {
            "name": "name_value",
            "email": "email_value",
            "message": "message_value"
        }

        var service_id = "default_service";
        var template_id = "kungfulaflorida";
        emailjs.send(service_id, template_id, template_params);
    </script> -->


</body>

</html>