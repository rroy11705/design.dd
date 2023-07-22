<?php require_once('config.php'); ?>
 <!DOCTYPE html>
<html lang="en" class="" style="height: auto;">
<?php require_once('inc/header.php') ?>
  <body>

   <!-- Header
   ================================================== -->
   <header id="home">
      <?php 
         $u_qry = $conn->query("SELECT * FROM users where id = 1");
         foreach($u_qry->fetch_array() as $k => $v){
            if(!is_numeric($k)){
               $user[$k] = $v;
            }
         }
         $c_qry = $conn->query("SELECT * FROM contacts");
         while($row = $c_qry->fetch_assoc()){
            $contact[$row['meta_field']] = $row['meta_value'];
         }
      ?>
      <nav id="nav-wrap">
         <a class="logo" href="#" title="Hide navigation"><?php echo isset($user) ? ucwords($user['firstname'].' '.$user['lastname']) : ""; ?></a>
         
         <a class="mobile-btn" href="#nav-wrap" title="Show navigation">Show navigation</a>
         <a class="mobile-btn" href="#" title="Hide navigation">Hide navigation</a>

         <ul id="nav" class="nav">
            <li><a href="<?php echo $contact['resume'] ?>" target="_blank">View Resume</a></li>•
            <li class="current"><a class="smoothscroll" href="#home">Home</a></li>•
            <li><a class="smoothscroll" href="#about">Contact</a></li>•
            <li><a class="smoothscroll" href="#featured-works">View Works</a></li>
            <!-- <li><a class="smoothscroll" href="#portfolio">Experience</a></li> -->
         </ul> <!-- end #nav -->

         <div class="contact">
            <a target="_blank" href="mailto:<?php echo $contact['email'] ?>"><?php echo $contact['email'] ?></a>
            <a target="_blank" href="tel:<?php echo $contact['mobile'] ?>"><?php echo $contact['mobile'] ?></a>
         </div>

      </nav> 

      <div class="banner">
         <div class="banner-image">
            <img class="profile" src="<?php echo base_url ?>profile_asset/images/dd-profile.png" alt="dd-profile" />
            <img class="mask" src="<?php echo base_url ?>profile_asset/images/dd-profile-mask.png" alt="dd-profile-mask" />
         </div>
         <div class="banner-text">
            <div class="banner-greetings">
               <p>
                  When you're already here, Say Hello!
               </p>
            </div>
            <div class="banner-skills">
               <ul>
                  <li>Graphic Designer</li>•
                  <li>Visual Artist</li>•
                  <li>UI-UX Designer</li>
               </ul>
               <ul>
                  <li>Design Strategist</li>•
                  <li>Brand Builder</li>
               </ul>
            </div>
         </div>
      </div>


   </header> 
   <!-- Header End -->


   <!-- About Section
   ================================================== -->
   <section id="about">
      <div class="about-header">
         <h2>Who is DD?</h2>
         <div class="call-to-actions">
            <form action="<?php echo $contact['resume'] ?>" target="_blank">
               <button class="call-to-action hover-up">Resume</button>
            </form>
            <form action="<?php echo $contact['linkin'] ?>" target="_blank">
               <button class="call-to-action hover-up">Connect</button>
            </form>
         </div>
      </div>

      <div class="about-content">
         <div>
            <p class="text-descriptor">
               Hover over the text below to know.
            </p>
            <p class="about-short">
               HE IS A <span>CREATIVE DESIGNER</span> WHO HAS AN <span>EXPERTISE IN</span> MULTI-DISCIPLINARY PARTS OF <span>DESIGNING</span>.
            </p>
         </div>
         <div>
            <img src="<?php echo base_url ?>profile_asset/images/star.svg" alt="⭐" />
         </div>
         <div>
            <p class="about-long">
               A lot of people claim to create designs that resonate with the user mentality but I believe <span>every user looks at a design with unique perspective and there's no set pattern.</span>
            </p>
            <br />
            <p class="about-long">
               As a designer with 3+ years of experience <span>Ive observed users of different ages and worked with unique sets of brands.</span> My solution is more of an holistic approach and that is to <span>provide the user exactly what they're here for, nothing less or nothing more.</span>
            </p>
            <br />
            <p class="about-long">
               People have an attention span of less that 5 sec while looking at a design and my goal is to make them explore so that they keep coming for more.
            </p>
         </div>
      </div>

   </section> <!-- About Section End-->


   <!-- Featured Works Section
   ================================================== -->
   <section id="featured-works">
      <div class="featured-works-headers">
         <div class="featured-works-header">
            <h2>Featured Works</h2>
            <div class="arrow move-down">
               <svg width="36" height="36" viewBox="0 0 61 62" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_1514_167)"><path d="M4.49681 27.0813L30.9194 53.5039M57.3406 27.0813L30.918 53.5039M30.917 8.67482L30.917 53.5029" stroke="#FFB800" stroke-width="4"/></g>
                  <defs><clipPath id="clip0_1514_167"><rect width="60.1172" height="60.1172" fill="white" transform="translate(0.859375 0.945312)"/></clipPath></defs>
               </svg>
               <svg width="36" height="36" viewBox="0 0 61 62" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_1514_167)"><path d="M4.49681 27.0813L30.9194 53.5039M57.3406 27.0813L30.918 53.5039M30.917 8.67482L30.917 53.5029" stroke="#D9D9D9" stroke-width="4"/></g>
                  <defs><clipPath id="clip0_1514_167"><rect width="60.1172" height="60.1172" fill="white" transform="translate(0.859375 0.945312)"/></clipPath></defs>
               </svg>
            </div>
         </div>
         <div class="featured-works-header">
            <h2>All Works</h2>
            <div class="arrow move-right">
            <svg width="36" height="36" viewBox="0 0 61 61" fill="none" xmlns="http://www.w3.org/2000/svg">
               <g clip-path="url(#clip0_1539_2924)"><path d="M23.4133 56.4798L49.8359 30.0572M23.4133 3.636L49.8359 30.0586M5.00685 30.0596L49.835 30.0596" stroke="#FFB800" stroke-width="4"/></g>
               <defs><clipPath id="clip0_1539_2924"><rect width="60.1172" height="60.1172" fill="white"/></clipPath></defs>
            </svg>

            <svg width="36" height="36" viewBox="0 0 61 61" fill="none" xmlns="http://www.w3.org/2000/svg">
               <g clip-path="url(#clip0_1539_2924)"><path d="M23.4133 56.4798L49.8359 30.0572M23.4133 3.636L49.8359 30.0586M5.00685 30.0596L49.835 30.0596" stroke="#D9D9D9" stroke-width="4"/></g>
               <defs><clipPath id="clip0_1539_2924"><rect width="60.1172" height="60.1172" fill="white"/></clipPath></defs>
            </svg>

            </div>
         </div>
      </div>

      <!-- featured-works-wrapper -->
      <div id="featured-works-wrapper">
         <?php 
            $p_qry = $conn->query("SELECT * FROM project");
            while($row = $p_qry->fetch_assoc()):
         ?>
            <a href="<?php echo $row['attachment_link'] ? $row['attachment_link'] : '#' ?>" id="featured-work-<?php echo $row['id'] ?>" class="featured-work-item">
               <div class="work-name">
                  <?php echo $row['name'] ?>
               </div>
               <div class="attachment-type">
                  Redirect to <?php echo ucwords($row['attachment_type']) ?>
               </div>
               <div class="work-details">
                  <div><?php echo ucwords($row['summary']) ?></div>
                  <div><?php echo ucwords($row['category']) ?> • <?php echo ucwords($row['year']) ?></div>
               </div>
            </a> <!-- item end -->

         <?php endwhile; ?>

      </div> 
      <!-- featured-works-wrapper end -->
   </section> <!-- Featured Works Section End-->

   <!-- Process Section
   ================================================== -->
   <section id="process">
      <div class="process-header">
         <div class="process-header-container">
            <div class="process-header-details">
               <div>
                  <p>
                  “Good design is actually a lot harder to notice than poor design,
                  </p>
                  <br />
                  <p>
                  in part because good designs fit our needs so well that the design is invisible.”
                  </p>
                  <br />
                  <p class="author">~Donald A. Norman</p>
               </div>
               <div class="arrow move-right">
                  <svg width="314" height="378" viewBox="0 0 314 378" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path d="M124.819 368.007L303.574 189.252M124.819 10.5063L303.574 189.261M0.295079 189.268L303.568 189.268" stroke="#D9D9D9" stroke-width="27.0609"/>
                  </svg>
                  <svg width="314" height="378" viewBox="0 0 314 378" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path d="M124.819 368.007L303.574 189.252M124.819 10.5063L303.574 189.261M0.295079 189.268L303.568 189.268" stroke="#D9D9D9" stroke-width="27.0609"/>
                  </svg>
               </div>
            </div>
            <div class="process-header-details">
               <div>
                  <h4>DESIGNING IS A</h4>
                  <h2>PROCESS</h2>
               </div>
            </div>
         </div>
      </div>

      <div class="process-descriptions">
         <div class="process-description">
            <div class="process-description-header">
               01 . Research & Discovery
            </div>
            <div class="process-description-text">
               <p>
                  First, we start with <span>Discovery</span>; this <span>sets the foundation of</span> the project. Discovery is about developing a <span>clear understanding of the business</span> and the business goals and establishing a clear path forward.
               </p>
               <br />
               <p>
                  It's not all research behind a screen, it's about getting <span>hands-on with workshops and interactive discussions to align our direction forward.</span> 
               </p>
            </div>
         </div>
         <div class="process-description">
            <div class="process-description-header">
               02 . Strategy & Creative Direction
            </div>
            <div class="process-description-text">
               <p>
                  <span>Strategy is</span> the necessary ingredient for exceptional, purposeful work.
               </p>
               <br />
               <p>
                  Using design thinking, we unite and <span>establishment of</span> effective strategy that enables <span>positive transformation with a clear direction.</span> It goes hand in hand with creative direction, where we explore <span>bringing the strategy to life visually.</span>
               </p>
            </div>
         </div>
         <div class="process-description">
            <div class="process-description-header">
               03 . Design Development
            </div>
            <div class="process-description-text">
               <p>
                  This is where the <span>magic</span> happens.
               </p>
               <br />
               <p>
                  We've done all the hard work and now it's time to have some fun and bring the ideas to life.
                  This step will vary depending on what your goals are and the services you require. I offer everything from graphic design and identity to web design. 
               </p>
            </div>
         </div>
         <div class="process-description">
            <div class="process-description-header">
               04 . Submit to Executioner <>
            </div>
            <div class="process-description-text">
               <p>
                  <span class="code-wrapper">
                     <span class="code-text"> There is no Design if there is no Development</span>
                     <span class="angular-bracket-open">< </span>
                  </span>
                  <span class="angular-bracket-close">></span>
               </p>
               <br />
               <p>
                  Preparing all designed frames and assets, I <span>collaborate with the developer providing him a brief understanding of the project needs</span>, the transition, the animation, pretty much all that is a requirement to the project. 
               </p>
            </div>
         </div>
      </div>
   </section>
   <!-- Process Section End-->
  
   <!-- /.content-wrapper -->
   <?php require_once('inc/footer.php') ?>
  </body>
</html>
