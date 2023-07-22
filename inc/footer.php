<?php if($_settings->chk_flashdata('success')): ?>
<script>
	alert_toast("<?php echo $_settings->flashdata('success') ?>",'success')
</script>
<?php endif;?>
<?php 
	$qry = $conn->query("SELECT * from contacts ");
	while($row = $qry->fetch_assoc()){
		$meta[$row['meta_field']] = $row['meta_value'];
	}
?>

<footer>

   <div class="footer-top">
      <div class="links-wrapper">
         <div class="links">
            <div>Explore</div>
            <div>
               <?php if (isset($meta['resume']))  { ?>
                  <a href="<?php echo isset($meta['resume']) ? $meta['resume'] : '' ?>" target="_blank">Resume.pdf</a>
               <?php } ?>
               <a class="smoothscroll" href="#about">Contact</a>
               <a class="smoothscroll" href="#featured-works">View Works</a>
            </div>
         </div>
         <div class="links">
            <div>Social</div>
            <div>
               <?php if (isset($meta['linkin']))  { ?>
                  <a href="<?php echo isset($meta['linkin']) ? $meta['linkin'] : '' ?>" target="_blank">LinkedIn</a>
               <?php } ?>
               <?php if (isset($meta['behance']))  { ?>
                  <a href="<?php echo isset($meta['behance']) ? $meta['behance'] : '' ?>" target="_blank">Behance</a>
               <?php } ?>
               <?php if (isset($meta['instagram']))  { ?>
                  <a href="<?php echo isset($meta['instagram']) ? $meta['instagram'] : '' ?>" target="_blank">Instagram</a>
               <?php } ?>
               <?php if (isset($meta['facebook']))  { ?>
                  <a href="<?php echo isset($meta['facebook']) ? $meta['facebook'] : '' ?>" target="_blank">Facebook</a>
               <?php } ?>
            </div>
         </div>
      </div>
      <div class="accent-wrapper">
         <div>SAY <span>‘HELLO’</span></div>
         <?php if (isset($meta['email']))  { ?>
            <a href="mailto:<?php echo isset($meta['email']) ? $meta['email'] : '' ?>" target="_blank"><?php echo $meta['email'] ?></a>
         <?php } ?>
      </div>
   </div>
   <div class="footer-middle">
      <div>
         <p style="text-align: left;">P.S.~ Coming from an Architectural Background, every planning problem has been unique. No solution could fit into as a another problem’s solution.</p>
      </div>
      <div style="margin: auto;">
         <p style="text-align: left;">Currently, my experience and expertise believes that every 100,000 Digital & Visual problems can be solved uniquely so that it would blend with our needs.</p>
      </div>
   </div>
   <div class="footer-bottom">
      <div>
         <p>DD always handles with love & care 💛</p>
      </div>
      <div style="display: flex; flex-direction: row; gap: 20px;">
         <?php if (isset($meta['instagram']))  { ?>
            <a href="mailto:<?php echo isset($meta['instagram']) ? $meta['instagram'] : '' ?>" target="_blank">
               <img src="<?php echo base_url ?>profile_asset/images/instagram.svg" alt="instagram" />
            </a>
         <?php } ?>
         <?php if (isset($meta['whatsapp']))  { ?>
            <a href="https://wa.me/<?php echo isset($meta['whatsapp']) ? $meta['whatsapp'] : '' ?>" target="_blank">
               <img src="<?php echo base_url ?>profile_asset/images/whatsapp.svg" alt="whatsapp" />
            </a>
         <?php } ?>
      </div>
      <div>
         <p><span style="color: #FFB800">All copyrights reserved (c) 2023 by</span> desgndd.in</p>
      </div>
   </div>

</footer> <!-- Footer End-->

<!-- Java Script
================================================== -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php echo base_url ?>profile_asset/js/jquery-1.10.2.min.js"><\/script>')</script>
<script type="text/javascript" src="<?php echo base_url ?>profile_asset/js/jquery-migrate-1.2.1.min.js"></script>

<script src="<?php echo base_url ?>profile_asset/js/jquery.flexslider.js"></script>
<script src="<?php echo base_url ?>profile_asset/js/waypoints.js"></script>
<script src="<?php echo base_url ?>profile_asset/js/jquery.fittext.js"></script>
<script src="<?php echo base_url ?>profile_asset/js/magnific-popup.js"></script>
<script src="<?php echo base_url ?>profile_asset/js/init.js"></script>