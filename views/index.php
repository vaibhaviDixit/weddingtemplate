<!DOCTYPE html>
<html lang="en">
<?php include("views/partials/head.php") ?>
<style>
    #app {
    
        max-height: 100vh !important;
    }
</style>

<body>

    <div id="app" class="">
        <!-- main content here -->

          <!-- Hero start -->
        <section class="container-fluid" id="heroSection">
                <?php require('views/partials/nav.php'); ?>
          <div id="heroCarousel" class="owl-carousel owl-theme">
            <!-- Slide 1 -->
            <div class="item" style="background-image: url('https://images.pexels.com/photos/1444442/pexels-photo-1444442.jpeg');">
              <div class="carousel-caption">
                <p class="text-secondary"><span class="lines">The Wedding Of</span></p>
                <h2 class="text-primary">Rehan & Kavya</h2>
                <div class="d-flex justify-content-center align-items-center text-secondary gap-3">
                    <div>
                        <span class="days">03</span><br>
                        <span class="timerText">Days</span>
                    </div>
                     <div>
                        <span class="hours">05</span><br>
                        <span class="timerText">Hrs</span>
                    </div>
                     <div>
                        <span class="min">15</span><br>
                        <span class="timerText">Mins</span>
                    </div>
                     <div>
                        <span class="sec">57</span><br>
                        <span class="timerText">Sec</span>
                    </div>
                    
                </div>

              </div>
            </div>
            <!-- Slide 2 -->
            <div class="item" style="background-image: url('https://images.pexels.com/photos/1024993/pexels-photo-1024993.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');">
                <div class="carousel-caption">
                <p class="text-secondary"><span class="lines">The Wedding Of</span></p>
                <h2 class="text-primary">Rehan & Kavya</h2>
                <div class="d-flex justify-content-center align-items-center text-secondary gap-3">
                    <div>
                        <span class="days">03</span><br>
                        <span class="timerText">Days</span>
                    </div>
                     <div>
                        <span class="hours">05</span><br>
                        <span class="timerText">Hrs</span>
                    </div>
                     <div>
                        <span class="min">15</span><br>
                        <span class="timerText">Mins</span>
                    </div>
                     <div>
                        <span class="sec">57</span><br>
                        <span class="timerText">Sec</span>
                    </div>
                    
                </div>

              </div>
            </div>
            <!-- Slide 3 -->
            <div class="item" style="background-image: url('https://images.pexels.com/photos/931796/pexels-photo-931796.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');">
                <div class="carousel-caption">
                <p class="text-secondary"><span class="lines">The Wedding Of</span></p>
                <h2 class="text-primary">Rehan & Kavya</h2>
                <div class="d-flex justify-content-center align-items-center text-secondary gap-3">
                    <div>
                        <span class="days">03</span><br>
                        <span class="timerText">Days</span>
                    </div>
                     <div>
                        <span class="hours">05</span><br>
                        <span class="timerText">Hrs</span>
                    </div>
                     <div>
                        <span class="min">15</span><br>
                        <span class="timerText">Mins</span>
                    </div>
                     <div>
                        <span class="sec">57</span><br>
                        <span class="timerText">Sec</span>
                    </div>
                    
                </div>

              </div>
            </div>
           
          </div>
        </section>
        <!-- Hero end -->

        <!-- about start -->
        <section class="container" id="aboutSection">

            <div class="container">
                <div class="row align-items-center justify-content-center text-center gap-2">
                    <!-- First Column - Image -->
                    <div class="col-lg-4 image-column">
                        <img src="https://images.pexels.com/photos/247908/pexels-photo-247908.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="img-fluid" alt="couple">
                        <div class="img-bg"></div>
                    </div>

                    <!-- Second Column - Text -->
                    <div class="col-lg-6 text-center">
                        <p class="small text-secondary text-center">Join us to celebrate <br>The wedding of</p>
                        <h3 class="text-primary text-center">Rehan & Kavya</h3>

                        <!-- Row with three texts separated by vertical line -->
                        <div class="d-flex justify-content-center align-items-center gap-3 mt-2 text-secondary">
                            <div class="">FEB</div>
                            <div class=""><span class="vertical-lines">19</span></div>
                            <div class="">2024</div>
                        </div>

                        <!-- Small Paragraph -->
                        <p class="mt-2 w-50 mx-auto">Fulai Garden, Sadashiv Peth, Pune</p>
                    </div>
                </div>
            </div>


        </section>
        <!-- about ends -->

        <!-- bride groom start -->
        <section class="container" id="coupleSection">

            <h1 class="section-head">Bride & Groom</h1>

            <div class="container mt-5">
                <div class="row">
                    <!-- Column 1 -->
                    <div class="col-lg-6 mb-4">
                        <div class="text-center">
                            <img src="https://images.pexels.com/photos/1130626/pexels-photo-1130626.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Person 1" class="img-fluid brideImg">
                        </div>
                        <h3 class="mt-3 text-center">Kavya</h3>
                        <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>

                    <!-- Column 2 -->
                    <div class="col-lg-6 mb-4">
                        <div class="text-center">
                            <img src="https://images.pexels.com/photos/1043473/pexels-photo-1043473.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Person 2" class="img-fluid groomImg">
                        </div>
                        <h3 class="mt-3 text-center">Rehan</h3>
                        <p class="text-center">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>
            </div>


        </section>
        <!--  bride groom ends -->


 <!-- Our story start -->
        <section class="container" id="ourStorySection">

            <h1 class="section-head">Our Story</h1>

            <div class="container mt-2">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="timeline">
                            <div class="timeline-item">
                                <div class="timeline-content">
                                    <div class="text-secondary">Jan 2022</div>
                                    <h6 class="text-capitalize text-primary">how we meet</h6>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    <div class="timeline-layout"></div>
                                </div>
                            </div>

                            <div class="timeline-item">
                                <div class="timeline-content">
                                    <div class="text-secondary">May 2023</div>
                                    <h6 class="text-capitalize text-primary">we're engaged</h6>
                                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    <div class="timeline-layout"></div>
                                </div>
                            </div>

                            <!-- Add more timeline items as needed -->

                        </div>
                    </div>
                </div>
            </div>


        </section>
        <!--  our story ends -->


    <!-- Events start -->
    <section class="container mt-2" id="eventsSection">

      <h1 class="section-head">Events</h1>


      <div id="eventsCarousel" class="owl-carousel owl-theme mt-5">

        <div class="item ">
          <div class="card pink-border ">
            <img src="https://images.pexels.com/photos/2099021/pexels-photo-2099021.jpeg?auto=compress&cs=tinysrgb&w=800" class="card-img-top" alt="Reception">
            <div class="card-body text-center">
              <h3 class="text-primary">Mehandi</h3>
              <p class="card-text mb-0">Saturday, 28, 2023
              </p>
              <p class="card-text ">02:00 pm-10:00 pm </p>
              <p class="card-text">Sadashiv Peth, Pune</p>
              <button class="btn-sm btn-primary">Location</button>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="card pink-border">
            <img src="https://images.pexels.com/photos/7988006/pexels-photo-7988006.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" class="card-img-top" alt="Reception">
            <div class="card-body text-center">
              <h3  class="text-primary">Haldi</h3>
              <p class="card-text mb-0">Saturday, 28, 2023
              </p>
              <p class="card-text ">02:00 pm-10:00 pm </p>
              <p class="card-text">Sadashiv Peth, Pune</p>
              <button class="btn-sm btn-primary">Location</button>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="card pink-border">
            <img src="https://media.istockphoto.com/id/1479657289/photo/mehandi-ceremony.jpg?s=1024x1024&w=is&k=20&c=UVzyy3N3TUgkqzIKb8rs3ppWXO2-Sb5XVGAvW5kmCuA=" class="card-img-top" alt="Reception">
            <div class="card-body text-center">
              <h3  class="text-primary">Reception</h3>
              <p class="card-text mb-0">Saturday, 28, 2023
              </p>
              <p class="card-text ">02:00 pm-10:00 pm </p>
              <p class="card-text">Sadashiv Peth, Pune</p>
              <button class="btn-sm btn-primary">Location</button>
            </div>
          </div>
        </div>

      </div>


    </section>
    <!-- Events ends -->

    <!-- gallery start -->
    <section class="container mt-2" id="gallerySection">

      <h1 class="section-head">Gallery</h1>

      <div id="galleryCarousel" class="owl-carousel owl-theme mt-5">

        <div class="item ">
          <img src="https://images.pexels.com/photos/18441979/pexels-photo-18441979/free-photo-of-smiling-indian-couple-in-traditional-clothes-near-tree.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" style="border-radius: 40px;">
        </div>
        <div class="item">
          <img src="https://images.pexels.com/photos/12669019/pexels-photo-12669019.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" style="border-radius: 40px;">
        </div>
        <div class="item">
          <img src="https://images.pexels.com/photos/6685153/pexels-photo-6685153.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" style="border-radius: 40px;">
        </div>
        <div class="item">
          <img src="https://images.pexels.com/photos/6543940/pexels-photo-6543940.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" style="border-radius: 40px;">
        </div>


      </div>
    </section>
    <!-- gallery ends -->


 
        <?php include('views/partials/footer.php'); ?> 
    </div>

    <script src="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/owl.carousel.min.js"></script>

    <script>
      document.addEventListener('DOMContentLoaded', function(){
        // Activate Owl Carousel
        $('#heroCarousel').owlCarousel({
          loop: true,
          margin: 10,
          nav: false,
          dots: false,
          items: 1,
          autoplay: true,
          autoplayTimeout: 3000, // Set your preferred autoplay timeout
          autoplayHoverPause: true
        });
      });

       $('#eventsCarousel').owlCarousel({
      loop: false,
      margin: 25,
      nav: false,
      autoplay: false,
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 2
        },
        1000: {
          items: 3
        }
      }
    })
    $('#galleryCarousel').owlCarousel({
      loop: false,
      margin: 15,
      nav: false,
      autoplay: false,
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 2
        },
        1000: {
          items: 4
        }
      }
    })

    </script>

                <script>
                  // Set the end time for the countdown (year, month (0-indexed), day, hour, minute, second)
                  var endTime = new Date("2024-02-10T12:00:00Z").getTime();

                  // Update the countdown every second
                  var x = setInterval(function() {
                    // Get the current time
                    var now = new Date().getTime();

                    // Calculate the time difference
                    var timeDifference = endTime - now;

                    // Calculate days, hours, minutes, and seconds
                    var days = Math.floor(timeDifference / (1000 * 60 * 60 * 24));
                    var hours = Math.floor((timeDifference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    var minutes = Math.floor((timeDifference % (1000 * 60 * 60)) / (1000 * 60));
                    var seconds = Math.floor((timeDifference % (1000 * 60)) / 1000);

                    if(days<10){
                        days="0"+days;
                    }
                     if(hours<10){
                        hours="0"+hours;
                    }
                     if(minutes<10){
                        minutes="0"+minutes;
                    }
                     if(seconds<10){
                        seconds="0"+seconds;
                    }

                    // Display the countdown
                   let daysselcted= document.querySelectorAll(".days");
                      for (var i = 0; i < daysselcted.length; i++) {
                          daysselcted[i].innerHTML = days;
                      }

                    let hoursselected=document.querySelectorAll(".hours");
                    for (var i = 0; i < hoursselected.length; i++) {
                          hoursselected[i].innerHTML = hours;
                      }

                    let minselected=document.querySelectorAll(".min");
                    for (var i = 0; i < minselected.length; i++) {
                          minselected[i].innerHTML = minutes;
                      }

                    let secselected= document.querySelectorAll(".sec");
                    for (var i = 0; i < secselected.length; i++) {
                          secselected[i].innerHTML = seconds;
                      }

                    // If the countdown is over, display a message
                    if (timeDifference < 0) {
                      clearInterval(x);
                      document.getElementById("countdown").innerHTML = "EXPIRED";
                    }
                  }, 1000);


                </script>

</body>

</html>


