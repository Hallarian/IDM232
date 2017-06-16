<?php require_once 'includes/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
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
  		<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
		<script src="javascript.js"></script>

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
  _____ _         __  __ 
 / ____| |       / _|/ _|
| (___ | |_ __ _| |_| |_ 
 \___ \| __/ _` |  _|  _|
 ____) | || (_| | | | |  
|_____/ \__\__,_|_| |_|
-->
    <?php include 'includes/_staff.php'; ?>

    <div class="blackBox">
<!--
  _____  _                           
 |  __ \| |                          
 | |__) | | __ _ _   _  ___ _ __ ___ 
 |  ___/| |/ _` | | | |/ _ \ '__/ __|
 | |    | | (_| | |_| |  __/ |  \__ \
 |_|    |_|\__,_|\__, |\___|_|  |___/
                  __/ |              
                 |___/
-->
    <?php include 'includes/_otherPlayers.php'; ?>

</div><!-- blackBox END -->

<!--
   ____            _             _   
  / ____|          | |           | |  
 | |     ___  _ __ | |_ ___ _ __ | |_ 
 | |    / _ \| '_ \| __/ _ \ '_ \| __|
 | |___| (_) | | | | ||  __/ | | | |_ 
  \_____\___/|_| |_|\__\___|_| |_|\__|
-->
<div class="whiteArea">
<div class="mainContent">

  <div class="headline"><h3>About WhoDunnit</h3></div><!-- headline END -->
  <div class="content">
    <div class="paragraph">Founded in Massachusetts by writer Ann Waterman and veteran actor-director Joel Hellmann, WhoDunnit was born out of a group that gave an annual charity benefit for the Multiple Sclerosis Society. But when their annual murder mystery started attracting sell-out crowds, they knew they had to take it farther. 
    <p>
    WhoDunnit quickly established a reputation for "Mystery Theater with a Difference.""We do real mysteries, with clues and carefully crafted story lines," says Louisville Executive Producer Niles Welch. And there is an amazing wealth of talent in this group. From the rollicking humor in The Case of the Smokin' Gunn to the fascination of A Well-Timed Murder and the Dr. MacCrimmon mysteries which have become cult classics, the actors and directors always make it a wonderful production, and full of surprises. 
    <p>
    "WhoDunnit likes to give audiences a wide variety of entertainment," says Welch. Offerings have included ghost stories, lively holiday musicals, a new Mystery Cabaret, courtroom dramas, comedies, costumed extravaganzas set in the 1920s and 1930s, and Ye Olde Murder Mysterie, a truly unique tale set in the year 1007, when mystical Druids reigned and people still believed in magic. "We like to keep people guessing," he says, and WhoDunnit shows will do that. 
    <p>
    WhoDunnit is a non-profit, donation-supported organization for the performing arts. If you would like to receive advance notice of upcoming WhoDunnit productions, please sign the guest book at the next show, or call (502) 538-4100. All WhoDunnit shows are also available for private parties.<hr></div><!-- paragraph END-->
    </div>

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

</body>
</html>