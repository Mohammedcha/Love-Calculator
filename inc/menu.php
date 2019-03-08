<!--
||||================================================||||
||||================================================||||
||||    Love Calculator Script By Mohammed Cha      ||||
||||================================================||||
||||================================================||||
-->

<script>
	function myFunction() {
	  var x = document.getElementById("myTopnav");
	  if (x.className === "topnav") {
		x.className += " responsive";
	  } else {
		x.className = "topnav";
	  }
	}
</script>

<div class="topnav" id="myTopnav">
	<a href="./" class="home"><i class="fas fa-house-damage"></i></a>
	<a href="about.php" class="<?php if (basename($_SERVER['PHP_SELF']) == "about.php") { ?> selected <?php } ?>">About us</a>
	<a href="faqs.php" class="<?php if (basename($_SERVER['PHP_SELF']) == "faqs.php") { ?> selected <?php } ?>">FAQ's</a>	
	<a href="privacy_policy.php" class="<?php if (basename($_SERVER['PHP_SELF']) == "privacy_policy.php") { ?> selected <?php } ?>">Privacy Policy</a>
	<a href="terms_conditions.php" class="<?php if (basename($_SERVER['PHP_SELF']) == "terms_conditions.php") { ?> selected <?php } ?>">Terms of use</a>
	<a href="contact.php" class="<?php if (basename($_SERVER['PHP_SELF']) == "contact.php") { ?> selected <?php } ?>">Contact</a>
	<a href="javascript:void(0);" class="icon" onclick="myFunction()"><i class="fa fa-bars"></i></a>
</div>

<!--
||||================================================||||
||||================================================||||
||||    Love Calculator Script By Mohammed Cha      ||||
||||================================================||||
||||================================================||||
-->