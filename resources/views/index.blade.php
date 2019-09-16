@include('site-header')
        <!--/.nav-collapse -->
      </div>
    </div>
  </div>

  <!-- ==== HEADERWRAP ==== -->
  <!-- <div id="home"></div>
  <div id="headerwrap" name="home">
    <header class="clearfix">
      <h1><span class="icon icon-shield"></span></h1>
      <h3>Carousel start here</h3>
    </header>
  </div> -->
  <div class="carousel-slide" id="carousel-banner">
        <div class="carousel-inner">
        @foreach($carousels as $carousel)
          <div class="carousel-item {{ $loop->first ? 'active':'' }}">
              <img class="img-fluid" src="{{$carousel->image}}" alt="{{$carousel->title}}">
              <div class="carousel-caption">
                <h1>{{$carousel->title}}</h1>
                <p>{{$carousel->description}}</p>
              </div>
          </div>  
        @endforeach  
    </div>
    <a class="carousel-control-prev" href="#carousel-banner" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-banner" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <!-- /headerwrap -->
  <!-- ==== ABOUT ==== -->
  <div class="container" id="about" name="about">
    <div class="row white">
      <br>
      <h1 class="centered">A LITTLE ABOUT OUR AGENCY</h1>
      <hr>

      <div class="col-lg-6">
        <p>We believe ideas come from everyone, everywhere. In fact, at TemplateMag, everyone within our agency walls is a designer in their own right. And there are a few principles we believe—and we believe everyone should believe—about our design craft.
          These truths drive us, motivate us, and ultimately help us redefine the power of design. We’re big believers in doing right by our neighbors. After all, we grew up in the Twin Cities and we believe this place has much to offer. So we do what
          we can to support the community we love.</p>
      </div>
      <!-- col-lg-6 -->

      <div class="col-lg-6">
        <p>Over the past four years, we’ve provided more than $1 million in combined cash and pro bono support to Way to Grow, an early childhood education and nonprofit organization. Other community giving involvement throughout our agency history includes
          pro bono work for more than 13 organizations, direct giving, a scholarship program through the Minneapolis College of Art & Design, board memberships, and ongoing participation in the Keystone Club, which gives five percent of our company’s
          earnings back to the community each year.</p>
      </div>
      <!-- col-lg-6 -->
    </div>
    <!-- row -->
  </div>
  <!-- container -->

  <!-- ==== SECTION DIVIDER1 -->
  <section class="section-divider textdivider divider1">
    <div class="container">
      <h1>DESIGN EXPAND BOUNDARIES</h1>
      <hr>
      <p>To achieve real change, we have to expand boundaries. Because the Wild West of what-could-be is unexplored but rife with opportunity.</p>
    </div>
    <!-- container -->
  </section>
  <!-- section -->


  <!-- ==== SERVICES ==== -->
  <div class="container" id="services" name="services">
    <br>
    <br>
    <div class="row">
      <h2 class="centered">ONE BRAND, ONE VOICE.</h2>
      <hr>
      <br>
      <div class="col-lg-offset-2 col-lg-8">
        <p>Employees and consumers. Two halves of a brand’s entirety, the whole of a brand’s audience. Sometimes these two halves have very different viewpoints, creating a weak spot in the brand story. Weakness tarnishes credibility. Brands that aren’t
          credible aren’t viable.
        </p>
        <p>We squash weakness by designing the whole brand story. It’s crafted around the truism held by employees and consumers to create an experience that connects from the inside out.</p>
        <p>By being true to the brand we represent, we elevate the audiences’ relationship to it. Like becomes love becomes a passion. Passion becomes advocacy. And we see the brand blossom from within, creating a whole story the audience embraces. That’s
          when the brand can truly flex its muscles.</p>
      </div>
      <!-- col-lg -->
    </div>
    <!-- row -->

    <div class="row">
      <h2 class="centered">MOBILE FIRST THINKING, ALWAYS.</h2>
      <hr>
      <br>
      <div class="col-lg-offset-2 col-lg-8">
        <img class="img-responsive" src="img/iphone.png" alt="">
      </div>
      <!-- col -->
    </div>
    <!-- row -->
  </div>
  <!-- container -->


  <!-- ==== SECTION DIVIDER2 -->
  <section class="section-divider textdivider divider2">
    <div class="container">
      <h1>DESIGN IS AN INTERACTION</h1>
      <hr>
      <p>To develop a deeper and more meaningful connection with consumers, we believe design must invite them to take part in the conversation.</p>
    </div>
    <!-- container -->
  </section>
  <!-- section -->

  <!-- ==== TEAM MEMBERS ==== -->
  <div class="container" id="team" name="team">
    <br>
    <div class="row white centered">
      <h1 class="centered">MEET OUR AWESOME TEAM</h1>
      <hr>
      <br>
      <br>
      @foreach($teams as $team)
      <div class="col-lg-3 centered">
        <img class="img img-circle" src="{{$team->image}}" height="120px" width="120px" alt="">
        <br>
        <h4><b>{{$team->name}}</b></h4>
        <a href="#" class="icon icon-twitter"></a>
        <a href="#" class="icon icon-facebook"></a>
        <a href="#" class="icon icon-flickr"></a>
        <p>{{$team->desc}}</p>
      </div>
      @endforeach 
      <!-- col-lg-3 -->

      
      

    </div>
    <!-- row -->
  </div>
  <!-- container -->

  <!-- ==== GREYWRAP ==== -->
  <div id="greywrap">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 centered">
          <img class="img-responsive" src="{{asset('image/2.jpg')}}" >
        </div>
        <div class="col-lg-4">
          <h2>We Are Hiring!</h2>
          <p>Do you want to be one of use? Sure you want, because we are an awesome team!. Here we work hard every day to craft pixel perfect sites.</p>
          <p><a href="#contact" class="btn btn-success">Contact Us</a></p>
        </div>
      </div>
      <!-- row -->
    </div>
    <br>
    <br>
  </div>
  <!-- greywrap -->

  <!-- ==== SECTION DIVIDER3 -->
  <section class="section-divider textdivider divider3">
    <div class="container">
      <h1>DESIGN SOLVE PROBLEMS</h1>
      <hr>
      <p>From the purely practical to the richly philosophical, design is the solution to a host of challenges.</p>
    </div>
    <!-- container -->
  </section>
  <!-- section -->

  <!-- ==== PORTFOLIO ==== -->
  <div class="container" id="portfolio" name="portfolio">
    <br>
    <div class="row">
      <br>
      <h1 class="centered">WE CREATE COOL STUFF</h1>
      <hr>
      <br>
      <br>
    </div>
    <!-- /row -->
    <div class="container">
      <div class="row">

        <!-- PORTFOLIO IMAGE 1 -->
        <div class="col-md-4 ">
          <div class="grid mask">
            <figure>
              <img class="img-responsive" src="img/portfolio/folio01.jpg" alt="">
              <figcaption>
                <h5>DASHBOARD</h5>
                <a data-toggle="modal" href="#myModal" class="btn btn-primary btn-lg">Take a Look</a>
              </figcaption>
              <!-- /figcaption -->
            </figure>
            <!-- /figure -->
          </div>
          <!-- /grid-mask -->
        </div>
        <!-- /col -->


        <!-- MODAL SHOW THE PORTFOLIO IMAGE. In this demo, all links point to this modal. You should create
						      a modal for each of your projects. -->

        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Project Title</h4>
              </div>
              <div class="modal-body">
                <p><img class="img-responsive" src="img/portfolio/folio01.jpg" alt=""></p>
                <p>This project was crafted for Some Name corp. Detail here a little about your job requirements and the tools used. Tell about the challenges faced and what you and your team did to solve it.</p>
                <p><b><a href="#">Visit Site</a></b></p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->


        <!-- PORTFOLIO IMAGE 2 -->
        <div class="col-md-4">
          <div class="grid mask">
            <figure>
              <img class="img-responsive" src="img/portfolio/folio02.jpg" alt="">
              <figcaption>
                <h5>UI DESIGN</h5>
                <a data-toggle="modal" href="#myModal" class="btn btn-primary btn-lg">Take a Look</a>
              </figcaption>
              <!-- /figcaption -->
            </figure>
            <!-- /figure -->
          </div>
          <!-- /grid-mask -->
        </div>
        <!-- /col -->

        <!-- PORTFOLIO IMAGE 3 -->
        <div class="col-md-4">
          <div class="grid mask">
            <figure>
              <img class="img-responsive" src="img/portfolio/folio03.jpg" alt="">
              <figcaption>
                <h5>ANDROID PAGE</h5>
                <a data-toggle="modal" href="#myModal" class="btn btn-primary btn-lg">Take a Look</a>
              </figcaption>
              <!-- /figcaption -->
            </figure>
            <!-- /figure -->
          </div>
          <!-- /grid-mask -->
        </div>
        <!-- /col -->
      </div>
      <!-- /row -->

      <!-- PORTFOLIO IMAGE 4 -->
      <div class="row">
        <div class="col-md-4 ">
          <div class="grid mask">
            <figure>
              <img class="img-responsive" src="img/portfolio/folio04.jpg" alt="">
              <figcaption>
                <h5>PROFILE</h5>
                <a data-toggle="modal" href="#myModal" class="btn btn-primary btn-lg">Take a Look</a>
              </figcaption>
              <!-- /figcaption -->
            </figure>
            <!-- /figure -->
          </div>
          <!-- /grid-mask -->
        </div>
        <!-- /col -->

        <!-- PORTFOLIO IMAGE 5 -->
        <div class="col-md-4">
          <div class="grid mask">
            <figure>
              <img class="img-responsive" src="img/portfolio/folio05.jpg" alt="">
              <figcaption>
                <h5>TWITTER STATUS</h5>
                <a data-toggle="modal" href="#myModal" class="btn btn-primary btn-lg">Take a Look</a>
              </figcaption>
              <!-- /figcaption -->
            </figure>
            <!-- /figure -->
          </div>
          <!-- /grid-mask -->
        </div>
        <!-- /col -->

        <!-- PORTFOLIO IMAGE 6 -->
        <div class="col-md-4">
          <div class="grid mask">
            <figure>
              <img class="img-responsive" src="img/portfolio/folio06.jpg" alt="">
              <figcaption>
                <h5>PHONE MOCKUP</h5>
                <a data-toggle="modal" href="#myModal" class="btn btn-primary btn-lg">Take a Look</a>
              </figcaption>
              <!-- /figcaption -->
            </figure>
            <!-- /figure -->
          </div>
          <!-- /grid-mask -->
        </div>
        <!-- /col -->
      </div>
      <!-- /row -->
      <br>
      <br>
    </div>
    <!-- /row -->
  </div>
  <!-- /container -->

  <!-- ==== SECTION DIVIDER4 ==== -->
  <section class="section-divider textdivider divider4">
    <div class="container">
      <h1>DESIGN CREATES EMOTIONAL CONNECTION</h1>
      <hr>
      <p>There’s more to design than meets the eye. It’s when it meets the heart that design creates a meaningful, lasting connection with the audience.</p>
    </div>
    <!-- container -->
  </section>
  <!-- section -->

  <!-- ==== BLOG ==== -->
  <div class="container" id="blog" name="blog">
    <br>
    <div class="row">
      <br>
      <h1 class="centered">WE ARE STORYTELLERS</h1>
      <hr>
      <br>
      <br>
    </div>
    <!-- /row -->

    <div class="row">
    @foreach($blogs as $blog)
      <div class="col-lg-6 blog-bg">
        <div class="col-lg-4 centered">
          <br>
          <p><img class="img img-circle" src="{{$blog->image}}" width="60px" height="60px"></p>
          <h4>{{$blog->name}}</h4>
        </div>
        <div class="col-lg-8 blog-content">
          <h2>{{$blog->title}}</h2>
          <p>{{$blog->desc}}</p>
          
          <br>
        </div>
      </div>
     @endforeach 
      <!-- /col -->

     
      <!-- /col -->
    </div>
    <!-- /row -->
    <br>
    <br>
  </div>
  <!-- /container -->


  <!-- ==== SECTION DIVIDER6 ==== -->
  <section class="section-divider textdivider divider6" style="background-image:url('image/autobot1.jpg')">
    <div class="container">
      <h1>AutoBot Nepal</h1>
      <hr>
      <p>Kathmandu,Nepal</p>
      <p>+977 9861612909</p>
      <p><a class="icon icon-twitter" href="#"></a> | <a class="icon icon-facebook" href="#"></a></p>
    </div>
    <!-- container -->
  </section>
  <!-- section -->

  <div class="container" id="contact" name="contact">
    <div class="row">
      <br>
      <h1 class="centered">THANKS FOR VISITING US</h1>
      <hr>
      <br>
      <br>

      <div class="col-lg-4">
        <h3>About Us</h3>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
       
      </div>
      <!-- col -->

      <div class="col-lg-3">
        <h3>Contact Information</h3>
        <p><span class="icon icon-home"></span> Kathmandu, Nepal<br/>
          <span class="icon icon-phone"></span> +977 9861612909 <br/>
          <span class="icon icon-mobile"></span> +977 9861612909  <br/>
          <span class="icon icon-envelop"></span> <a href="#">kamal12neupae@gmail.com</a> <br/>
          <span class="icon icon-twitter"></span> <a href="#"> @kamlneupane12 </a> <br/>
          <span class="icon icon-facebook"></span> <a href="#"> kamal12neupae </a> <br/>
        </p>
      </div>
      <!-- col -->

      <div class="col-lg-5">
        <h3>Contact Form</h3>
        <p>You can send message filling the below form.</p>
        <form action="{{ route('contact.store') }}" method="POST">
            {{ csrf_field() }}
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" class="form-control">
              </div>
              <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" name="subject" class="form-control">
              </div>
              <div class="form-group">
                <label for="message">Message</label>
                <textarea name="message" rows="4" class="form-control"></textarea>
              </div>
              <div class="text-center">
                <input type="submit" value="Send message" class="btn btn-success">
              </div>
        </form>
      </div>
      <!-- col -->

    </div>
    <!-- row -->

  </div>
  
      </div>
    </div>
  </div>
  <!-- container -->
@include('site-footer')


