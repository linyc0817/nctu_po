<?php
/*
 * Template Name: test
 */
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>horizontal timeline</title>
  
  
  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css'>
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/test.css">

  
</head>

<body>
  <section class="cd-horizontal-timeline">
	<div class="timeline">
		<div class="events-wrapper">
			<div class="events">
				<ol>
					<li><a href="#0" data-date="16/01/2014" class="selected">16 Jan</a></li>
					<li><a href="#0" data-date="28/02/2014">28 Feb</a></li>
					<li><a href="#0" data-date="20/04/2014">20 Mar</a></li>					
				</ol>

				<span class="filling-line" aria-hidden="true"></span>
			</div> <!-- .events -->
		</div> <!-- .events-wrapper -->
			
		
	</div> <!-- .timeline -->

	<div class="events-content">
		<ol>
			<li class="selected" data-date="16/01/2014">
				<h2>Horizontal Timeline</h2>
				<em>January 16th, 2014</em>
				<p>	
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
				</p>
			</li>

			<li data-date="28/02/2014">
				<h2>Event title here</h2>
				<em>February 28th, 2014</em>
				<p>	
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
				</p>
			</li>

			<li data-date="20/04/2014">
				<h2>Event title here</h2>
				<em>March 20th, 2014</em>
				<p>	
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
				</p>
			</li>

			
		</ol>
	</div> <!-- .events-content -->
</section>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-mobile/1.4.5/jquery.mobile.min.js'></script>

    <script src="<?php bloginfo('template_url'); ?>/js/test.js"></script>

    <iframe width="400" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src=http://maps.google.com.tw/maps?f=q&hl=zh-TW&geocode=&q=30010新竹市東區大學路1001號&z=16&output=embed&t=></iframe>

</body>
</html>
