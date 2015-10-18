<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

      <title>Scotts Dynamic Web Apps Portfolio CSCIE 15</title>

   </head>
   <body>
      <div class="container" >
         <header class="jumbotron">
            <h1>Dynamic Web Apps Portfolio<br><small>Scott Johnston</small></h1>
         </header>

         <!-- Links to the other projects-->
         <div class="row">
            <div class="center-block ">

               <nav class="navbar navbar-default  " role="navigation">
                <div class="navbar-header">

               <button type="button" class="navbar-toggle " data-toggle="collapse" data-tog="tooltip" title="Links" data-target="#example-navbar-collapse">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>

               </button>


               </div>


               <div class="collapse navbar-collapse" id="example-navbar-collapse">

               <ul class="list-inline nav nav-tabs nav-justified ">
                  <li><a href="http://p1.scottvjohnston.me" data-tog="tooltip" title="Project 1"> Project 1</a></li>
                  <li><a href="https://github.com/scottjohnston/p1" data-tog="tooltip" title="Github P1">Git project 1</a></li>
                  <li><a href="http://p2.scottvjohnston.me" data-tog="tooltip" title="Project 2">Project 2</a></li>
                  <li><a href="https://github.com/scottjohnston/p2" data-tog="tooltip" title="Github P2">git project 2</a></li>
                  <li><a href="http://p3.scottvjohnston.me" data-tog="tooltip" title="Project 3">Project 3</a></li>
                  <li><a href="https://github.com/scottjohnston/p3" data-tog="tooltip" title="Github P3">git project 3</a></li>
                  <li><a href="#" data-tog="tooltip" title="Project 4">Project 4</a></li>
                  <li><a href="#" data-tog="tooltip" title="Github P4">git project 4</a></li>
               </ul>

            </div>
            </nav>



            </div>
         </div>

         <!-- Image -->
         <div class="row">
            <img src="images/scottNorthernThailand.jpg" class="img-rounded img-responsive center-block" data-toggle="tooltip" alt="Scott in a restaraunt in Northern Thailand" title="Scott in a restaraunt in Northern Thailand">
         </div>


         <div class="row">
            <section class="col-md-8 col-md-offset-2 col-xs-12 col-sm-10 coll-sm-offset-1 col-lg-offset-3 col-lg-6">
               <h3>In 2+ sentences describe who you are and what you do </h3>
               <p>
                  I am onair / supervisor technician at the Australian Broadcasting corporation radio + on line + some TV, which is a not for profit broadcaster. Its not that different to the BBC in England or NPR in the US. I work in the News and Current Affairs area.
               </p>
            </section>
         </div>

         <div class="row">
            <section class="col-md-8 col-md-offset-2 col-xs-12 col-sm-10 coll-sm-offset-1 col-lg-offset-3 col-lg-6">
               <h3>Why are you taking this course?</h3>
               <p>
                  I want to learn how to build good interactive web sites. I really like working with the web and all things digital and this course with its PHP server focus looked like the next logical step in that progression.
               </p>
            </section>
         </div>

         <div class="row">
            <section class="col-md-8 col-md-offset-2 col-xs-12 col-sm-10 coll-sm-offset-1 col-lg-offset-3 col-lg-6">
               <h3>What previous experience do you have with programming?</h3>
               <p>
                  I have completed the Harvard Java courses 10a and 10b, databases in E-60 and HTML css in E-12. I have also
                  messed around with C and C++ on and off for quite a few years.
               </p>
            </section>
         </div>

         <div class="row">
            <section class="col-md-8 col-md-offset-2 col-xs-12 col-sm-10 coll-sm-offset-1 col-lg-offset-3 col-lg-6">
               <h3>Are you working on a Mac, PC, or some other platform?</h3>
               <p>
                  I use an older windows 7 PC and run virtual box with Linux and Dos images.
               </p>
            </section>
         </div>
      </div>

      <footer class="text-center">
         <a href="http://dwa15.com/" data-toggle="tooltip" title="Course web site">dwa 15</a>
      </footer>


      <!-- Jquery for the tool tip-->
      <script>
         $(document).ready(function(){
             $('[data-toggle="tooltip"]').tooltip();
         });
      </script>
   </body>
</html>
