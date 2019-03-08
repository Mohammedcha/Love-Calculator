<!--
||||================================================||||
||||================================================||||
||||    Love Calculator Script By Mohammed Cha      ||||
||||================================================||||
||||================================================||||
-->

<html>
<?php 
error_reporting(0); 
$resulta = $_GET['resulta']; 
$cnametwo = $_GET['cnametwo']; 
$cnameone = $_GET['cnameone']; 
if (empty ($resulta)) { header("Location: ./");
die();; } else { 
?>
<?php require_once ('inc/head.php')?>
<body>
<?php require_once ('inc/menu.php')?>
	<div class="container">
		<div class="intro">
			<a href="./"><img width="120px" src="assets/love.gif" /></a>
			<h2>Love Calculator results</h2>
				<b>These are the results of the calculations</b>
				<?php if (empty ($small_ads_id)) { } else {?>
					<ins 
						class="adsbygoogle"
						style="display:inline-block;min-width:100%;max-width:970px;width:100%;height:90px"
						data-ad-client="<?php echo $small_ads_id ; ?>"
						data-ad-slot="<?php echo $small_ads_slot ; ?>">
					</ins>
					<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
					<script>(adsbygoogle = window.adsbygoogle || []).push({});</script>	 
				<?php } ?>
				<b class="names"> </br>
					<span><?php echo $cnameone; ?></span> <br> AND <br> <span><?php echo $cnametwo; ?></span>
				</b>
			<h3>
				<i class="fas fa-heart"></i> 
					<?php echo $resulta; ?>% 
				<i class="fas fa-heart"></i> 
			</h3>
		</div>
		<input type="submit" class="share" onclick="javascript:fbshareCurrentPage()" value="Share on Facebook" >
		<script language="javascript">
			function fbshareCurrentPage()
			{window.open("https://www.facebook.com/sharer/sharer.php?u="+escape(window.location.href)+"&t="+document.title, '', 
			'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');
			return false; }
		</script>
		
		<p class="more"><a 
		data-action="share/whatsapp/share"
			href="whatsapp://send?text=
				Love Calculator results for :%0A
                <?php echo $cnameone;?> &#9829; AND &#9829; <?php echo $cnametwo;?>%0A
				Love Compatability score is : <?php echo $resulta;?>% &#9829; %0A %0A
				Check More details from blue link bellow %0A
				<?php echo $site_url;?>/loveshare.php?cnameone=<?php echo $cnameone;?>%26cnametwo=<?php echo $cnametwo;?>%26resulta=<?php echo $resulta;?>
			">
				<span> Share Via Whatsapp </span>
		</a>
		</p>
		<div class="pages">
		<?php if (empty ($big_ads_id)) { } else {?>			
			<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
			<ins 
				class="adsbygoogle" 
				style="display:block" 
				data-ad-client="<?php echo $big_ads_id ; ?>" 
				data-ad-slot="<?php echo $big_ads_slot ; ?>" 
				data-ad-format="auto" 
				data-full-width-responsive="true">
			</ins>
			<script>(adsbygoogle = window.adsbygoogle || []).push({});</script>			
		<?php } ?>	
		</div>
	</div>		
	<?php require_once ('inc/footer.php')?>				
</body>
</html>
<?php
	}
?>		

<!--
||||================================================||||
||||================================================||||
||||    Love Calculator Script By Mohammed Cha      ||||
||||================================================||||
||||================================================||||
-->
