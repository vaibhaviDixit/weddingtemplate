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
                <p class="text-secondary">The Wedding Of</p>
                <h2 class="text-primary">Rehan & Kavya</h2>
                <div class="d-flex justify-content-between align-items-center text-secondary">
                    <div>
                        <span class="days">03</span><br>
                        <span class="timerText">Days</span>
                    </div>
                     <div>
                        <span class="hours">05</span><br>
                        <span class="timerText">Hours</span>
                    </div>
                     <div>
                        <span class="min">15</span><br>
                        <span class="timerText">Minutes</span>
                    </div>
                     <div>
                        <span class="sec">57</span><br>
                        <span class="timerText">Seconds</span>
                    </div>
                    
                </div>

              </div>
            </div>
            <!-- Slide 2 -->
            <div class="item" style="background-image: url('https://images.pexels.com/photos/1024993/pexels-photo-1024993.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');">
                <div class="carousel-caption">
                <p class="text-secondary">The Wedding Of</p>
                <h2 class="text-primary">Rehan & Kavya</h2>
                <div class="d-flex justify-content-between align-items-center text-secondary">
                    <div>
                        <span class="days">03</span><br>
                        <span class="timerText">Days</span>
                    </div>
                     <div>
                        <span class="hours">05</span><br>
                        <span class="timerText">Hours</span>
                    </div>
                     <div>
                        <span class="min">15</span><br>
                        <span class="timerText">Minutes</span>
                    </div>
                     <div>
                        <span class="sec">57</span><br>
                        <span class="timerText">Seconds</span>
                    </div>
                    
                </div>

              </div>
            </div>
            <!-- Slide 3 -->
            <div class="item" style="background-image: url('https://images.pexels.com/photos/931796/pexels-photo-931796.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');">
                <div class="carousel-caption">
                <p class="text-secondary">The Wedding Of</p>
                <h2 class="text-primary">Rehan & Kavya</h2>
                <div class="d-flex justify-content-between  align-items-center text-secondary">
                    <div>
                        <span class="days">03</span><br>
                        <span class="timerText">Days</span>
                    </div>
                     <div>
                        <span class="hours">05</span><br>
                        <span class="timerText">Hours</span>
                    </div>
                     <div>
                        <span class="min">15</span><br>
                        <span class="timerText">Minutes</span>
                    </div>
                     <div>
                        <span class="sec">57</span><br>
                        <span class="timerText">Seconds</span>
                    </div>
                    
                </div>

              </div>
            </div>
           
          </div>
        </section>
        <!-- Hero end -->

        <!-- about start -->
        <section class="container" id="aboutSection">

            <h1 class="section-head">Bride & Groom</h1>

            <div>
                section content here
            </div>

        </section>
        <!-- about ends -->





 
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


