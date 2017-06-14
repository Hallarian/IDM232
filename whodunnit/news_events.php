<?php require_once 'includes/config.php'; ?>
<!DOCTYPE html>
<html>
	<head>
    	<meta charset="utf-8"/>
  		<meta name="viewport" content="width=device-width, initial-scale=1.0">
      	<meta name="viewport" content="initial-scale=1.0, width=device-width"/>
    	<title>WhoDunnit Kentuckiana</title>

<!--
       _  _____    _______  _____ _____ 
      | |/ ____|  / / ____|/ ____/ ____|
      | | (___   / / |    | (___| (___  
  _   | |\___ \ / /| |     \___ \\___ \ 
 | |__| |____) / / | |____ ____) |___) |
  \____/|_____/_/   \_____|_____/_____/
 -->
  		<link rel="stylesheet" type="text/css" href="stylesheet.css">
  		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

	</head>
<body>
	<div id="main">

<!--
  _   _             
 | \ | |            
 |  \| | __ ___   __
 | . ` |/ _` \ \ / /
 | |\  | (_| |\ V / 
 |_| \_|\__,_| \_/  
-->
		<?php include 'includes/_navHead.php'; ?>

<!--
   ____            _             _   
  / ____|          | |           | |  
 | |     ___  _ __ | |_ ___ _ __ | |_ 
 | |    / _ \| '_ \| __/ _ \ '_ \| __|
 | |___| (_) | | | | ||  __/ | | | |_ 
  \_____\___/|_| |_|\__\___|_| |_|\__|
-->
    <div class="blackBox">
      <h2>Now Playing</h2>
      <div class="outerText">
        <div class="imgBox"><a target="_blank" href="imagery/ye_olde_new.jpg"><img src="imagery/ye_olde_new.jpg" alt="ye_olde_new" style="max-width: 760px;"></a></div>
          <div class="desc">Ye Olde Murder Mystery<h6>Saturday Evenings, May 12–June 23</h6>
          </div>
          Step back in time to 1908, the era of the greatest mystery stories ever told! Who killed the evil duke Harry Hollingsworth, and why? Are others in danger? And how does La Curèe, the mysterious masterpiece of art, come into play? Match wits with WhoDunnit’s favorite detective Dr. Angus MacCrimmon, as he returns to solve his newest, most challenging and most intriguing mystery ever!
      </div><!-- outerBox END -->
    </div><!-- blackBox END -->

<div class="whiteArea">
  <div class="mainContent">
    <?php include 'includes/_showList.php'; ?>
    <p>
    <div class="headline">
      <h3>Most public shows at the Bristol Bar &amp; Grille Downtown<br>
      614 West Main Street, Louisville, KY.
      <br>
      Seating at 6:30 / Show starts at 7:00</h3>
    </div><!-- headline END -->

    <div class="content">
      <div class="paragraph">
        Tickets are $48 each for 1-5 guests at a table. Discounted tickets are for 6 or more guests in a party. This price includes meal, show, tax and gratuity. Save $ and get preferred seating with a Season Ticket!
        Discounts for group seating.
        <p>
        Call WhoDunnit at (502) 538-4100.
      </div><!-- paragraph END-->
    </div><!-- content END -->

  </div><!-- mainContent END -->
</div><!-- whiteArea END -->

<!--
   _____                                  
  / ____|                                 
 | (___  _ __   ___  _ __  ___  ___  _ __ 
  \___ \| '_ \ / _ \| '_ \/ __|/ _ \| '__|
  ____) | |_) | (_) | | | \__ \ (_) | |   
 |_____/| .__/ \___/|_| |_|___/\___/|_|   
        | |                               
        |_|
-->
      <?php include 'includes/_sponsors.php'; ?>

  </div><!-- Main END -->

<!--
  ______          _            
 |  ____|        | |           
 | |__ ___   ___ | |_ ___ _ __ 
 |  __/ _ \ / _ \| __/ _ \ '__|
 | | | (_) | (_) | ||  __/ |   
 |_|  \___/ \___/ \__\___|_|
 -->
    <?php include 'includes/_footer.php'; ?>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="javascript.js"></script>

</body>
</html>