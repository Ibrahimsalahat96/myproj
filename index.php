<?php 
require_once 'data.php';



?>






<!DOCTYPE html>
<html lang="en">
    <head>

  
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>The Secret Books</title>
        <!-- Favicon-->
        <style type="text/css">
            
            h1 {text-align: center; background-color: #edf0f2; background: url("http://i.imgur.com/Kkw7rPC.png?1")
             center center repeat-x #fff;
         }
h1 .text {background-color: #fff; padding: 10px; display: inline-block;}
.s{text-align: center; background-color: #edf0f2; background: url("http://i.imgur.com/Kkw7rPC.png?1") center center repeat-x #edf0f2;}
.s .texts {background-color: #edf0f2; padding: 10px; display: inline-block;}
        </style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet"/>


       
    </head>
    <body id="page-top">
        <!-- Navigation-->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top" ><img src="assets/img/Open_Library_logo.svg" style="height: 40px;s"  alt="..." /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a  class="nav-link" href="#services">Services</a></li>
                        
                        <li class="nav-item"><a class="nav-link" href="#portfolio">Products</a></li>

                        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#team">Team</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
              <li class="nav-item"><a class="nav-link" href="Login.php">Login Admin</a></li>   

                  <li class="nav-item"><a class="nav-link" href="User_form.php">Login User </a></li>
                  <li class="nav-item"><a class="nav-link" href="register.php">register</a></li>
                    </ul>
                </div>
            </div>
        </nav>






        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
              


                <div class="masthead-subheading">Welcome To Our Library!</div>
                <div class="masthead-heading text-uppercase">Reading without meditation is like eating without digestion.</div>
                <a  id="welcome" class="btn btn-primary btn-xl text-uppercase" href="#services">Tell Me More</a>
            </div>
        </header>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                     <h1 class="s"><span class="border"id="service"></span><span class="texts"> Services</span></h1>
                    <h3 class="section-subheading text-muted">.</h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class=""></i>
                            <i class="fa fa-plus"></i>
                        </span>
                        <h4 class="my-3">Circulation Services</h4>
                        <p class="text-muted">Library materials are borrowed and returned at the circulation desk, which is located near the main entrance. Reserved books, audio visual material, periodicals, reference books and CDs / DVDs can be used with in library.
.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fa fa-server"></i>
                            <i class=""></i>
                        </span>
                        <h4 class="my-3">Reference Services</h4>
                        <p class="text-muted">Library provides reference and referral service to its users. Queries are answered using all possible sources..</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fa fa-rss"></i>
                            <i class=""></i>
                        </span>
                        <h4 class="my-3">Online Reservation System</h4>
                        <p class="text-muted">Library users can reserve any book using our online reservation system if it is already issued. Reserved books are not reissued. Library user is automatically informed through email when a reserved book is returned and the same is held at circulation desk for two days.</p>
                    </div>

                     <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class=""></i>
                            <i class="fa fa-sitemap"></i>
                        </span>
                        <h4 class="my-3">Recommend an Item</h4>
                        <p class="text-muted">We welcome faculty, staff, students and other members to recommend any material, which can add value to our library collection.</p>
                    </div>


                     <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fa fa-print"></i>
                            <i class=""></i>
                        </span>
                        <h4 class="my-3">Photocopying / Printing Service</h4>
                        <p class="text-muted">Photocopying and printing facility is available with the library. Users can get the photocopy of required information from reference materials .</p>
                    </div>




                     <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class=""></i>
                            <i class="fa fa-info-circle"></i>
                        </span>
                        <h4 class="my-3">Orientation and Information Sessions</h4>
                        <p class="text-muted">The library's orientation and information program extends the role of library in ensuring that users make the most effective use of library resources.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
            <h1><span class="border"></span><span class="text">Our Product</span></h1>
                    <h3 class="section-subheading text-muted">The book is a friend who does not betray.</h3>
                </div>


















                <div class="row">
    <?php 

                     $sele="SELECT * FROM product limit 6 ";
 $result = mysqli_query($con, $sele);
while($row=mysqli_fetch_assoc($result))
{
?>
                       <div class="col-lg-6 ">
                        <!-- Product item 1-->
                        <div class="portfolio-item">

                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal<?php echo $row['id']; ?>">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fa fa-bars fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" style="width: 350px;height: 350px;" src="<?php echo $row['img']; ?>" alt="..." />
                            </a>
                            <div class="portfolio-caption">

                                <button type="button" class="btn btn-outline-dark col-md-8" ><?php echo $row['name']; ?></button>
                              
                            </div>
                        </div>
                    </div>
                                                                           <?php
}
?>
            </div>
        </section>
        <!-- About-->
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h1 class="s"><span class="border"></span><span class="texts"> About</span></h1>
            
                    <h3 class="section-subheading text-muted">.</h3>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/11.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                      
                                <h4 class="subheading">Our Humble Beginnings</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">online platform created to provide individuals with access to scholarly research and literature.  Scholarly discovery lives barrier-free.</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/as.png" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                               
                                <h4 class="subheading">It'll all make sense</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Arab communication platform open to sharing electronic and paper books, it seeks to make a significant impact in the world of knowledge, enrich Arabic content on the Internet, facilitate authors publish books, avoid large publishing costs, and make it easier for readers to choose the right book in any field by displaying reviews and quotes for books and user`s opinions In every book.</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/22.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                           
                                <h4 class="subheading">Transition to Full Service</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">It also enables  readers to add evaluation and review of books, create a virtual electronic library, communicate with readers and authors around the world, and Arabs in particular, and encourage users to read, write and author.</p></div>
                        </div>
                    </li>
                  
                    <li class="timeline-inverted">
                        <div id="part" class="timeline-image">
                            <h4>
                                Be Part
                                <br />
                                Of Our
                                <br />
                                Story!
                            </h4>
                        </div>
                    </li>
                </ul>
            </div>
        </section>












        <!-- Team-->




        <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                     <h1><span class="border"></span><span class="text"> Our Amazing Team    </span></h1>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/11.jpg" alt="..." />
                            <h4>Ibrahim Salahat</h4>
                            <p class="text-muted">Web Developer</p>
                            <p class="text-muted">Mob:0799478578</p>
                            <a class="btn btn-dark btn-social mx-2" href="https://twitter.com/ibrahimsalahat6"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com/ibrahim.salahat.3367/"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="https://www.linkedin.com/in/ibrahim-salahat-340511192/"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/22.jpg" alt="..." />
                            <h4>Hazem ahmad</h4>
                            <p class="text-muted">Web / Mob Developer</p>
                            <p class="text-muted">Mob:0775941376</p>
                            <a class="btn btn-dark btn-social mx-2" href="https://twitter.com/beprogrammerOrg"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com/beprogrammer.org/?_rdc=1&_rdr"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/33.jpg" alt="..." />
                            <br>
                            <h4>Zyad Majali</h4>
                            <p class="text-muted">Web / Mob Developer</p>
                            <p class="text-muted">Mob:0777763664</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">The most prominent and strongest team in the fields of information technology and business and your opportunity to be with them to develop your life and professionalism.</p></div>
                </div>
            </div>
        </section>





        <!-- Clients-->
        <div class="py-5">
            <div class="container">
                <div class="row align-items-center">
                   
                </div>
            </div>
        </div>
        <!-- Contact-->
        <section class="page-section" id="contact">
     <div class="container">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
                <div class="card-body">
                    <h5 class="card-title text-center">Contact Us</h5>
                  <div class="bottom-left">
        <span class="about">
        
            <span="address">Website Information</span> &mdash; <a href="mailto:ibrahim.salahat96@gmail.com">Contact Us Email</a><br><br><br>
            <span="address">Website Information</span> &mdash; <a href="mailto:info@beprogrammer.org">Contact Us Email</a><br><br><br>
            <span="address">Call Us</span> &mdash; <a href="#\">"0799478578"</a>
        </span>
</div>
                </div>
            </div>
        </div>
    </div>
</div>
        </section>




        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">Copyright &copy; Salahat 2021</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                        <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Portfolio Modals-->
        <!-- Portfolio item 1 modal popup-->
 

  <?php 

                     $sele="SELECT * FROM product limit 6";
 $result = mysqli_query($con, $sele);
while($row=mysqli_fetch_assoc($result))
{
?>
        <div class="portfolio-modal modal fade" id="portfolioModal<?php echo $row['id'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">

                                    <!-- Project details-->
                                    <h3 class="text-uppercase"><?php echo $row['name'] ?></h2>
                                    
                                    <img class="img-fluid d-block mx-auto" style="width: 350px;height: 350px;" src="<?php echo $row['img'] ?>" alt="..." />
                                    <p><?php echo $row['descr'] ?></p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Auther:  <?php echo $row['auther'] ?>:</strong>
                                            
                                        </li>
                                        <li>
                                           
                                             

                                            <strong>Category:  <?php echo $row['category'] ?></strong> <br><br>
                                          <a href="User_form.php" class="btn btn-outline-danger col-md-8" >sign-in</a><br><br>
                                        </li>
                                 <br><br>

 




                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

 
        </div>
                                       <?php
 
 }
 ?>
        <!-- Portfolio item 2 modal popup-->
  
      
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
 <script type="text/javascript">
                $(document).ready(function(){
$("#welcome").click(function(){
alert("Welcome To Our Library!!");
});
});
</script>





