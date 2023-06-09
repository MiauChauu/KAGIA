<?php
include('newheader.php');
?>


	<div class="row">
<div class="container">
	<div class="inner">
    <h1>User: <?php echo strtoupper($_SESSION['user_session']);?></h1>
	<br>
	
<div class="edit-pic">
<a href="" target="_blank" class="fa fa-facebook"></a>
<a href="" target="_blank" class="fa fa-instagram"></a>
<a href="" target="_blank" class="fa fa-twitter"></a>
<a href="" target="_blank" class="fa fa-google"></a>



</div>
<div class="username">
</div>
<script type="text/javascript" charset="utf8" src="libs/edit_profile.js"></script>
<p class="show_edit" style="display: block">&#9660; Edit Profile &#9660;</p>
<p class="hide_edit" style="display: none">&#9650; Edit Profile &#9650;</p>
<div class="edit_profile" style="display: none;">
<table id="profile_picture_choose">
	<p>Select profile picture of your choosing</p>
	<tr><td><img src="https://i.imgur.com/yalihR1.png" alt="One" width="50" height="50" style="vertical-align:middle"></td><td><img src="https://i.imgur.com/yalihR1.png" alt="One" width="50" height="50" style="vertical-align:middle"></td><td><img src="https://i.imgur.com/yalihR1.png" alt="One" width="50" height="50" style="vertical-align:middle"></td><td><img src="https://i.imgur.com/yalihR1.png" alt="One" width="50" height="50" style="vertical-align:middle"></td><td><img src="https://i.imgur.com/yalihR1.png" alt="One" width="50" height="50" style="vertical-align:middle"></td></tr>
</table>
<!--
<table id="profile_background_choose">
	<p>Select profile background of your choosing</p>
	<tr><td><img src="https://i.imgur.com/yalihR1.png" alt="One" width="50" height="50" style="vertical-align:middle"></td><td><img src="https://i.imgur.com/yalihR1.png" alt="One" width="50" height="50" style="vertical-align:middle"></td><td><img src="https://i.imgur.com/yalihR1.png" alt="One" width="50" height="50" style="vertical-align:middle"></td><td><img src="https://i.imgur.com/yalihR1.png" alt="One" width="50" height="50" style="vertical-align:middle"></td><td><img src="https://i.imgur.com/yalihR1.png" alt="One" width="50" height="50" style="vertical-align:middle"></td></tr>
</table>
-->


<p class="submit_profile_change" style="display: none">Submit your choices</p>
</div>
<div id="edit-response">

</div>
			<div class="link"><i class="fa fa-globe"></i><i class="fa fa-chevron-down"></i></div>
	</div>
    
    
    
 </div>
<div id="google_translate_element"></div>		
    
<html class="<?php echo $htmlClass; ?>">
<a title=" Lights ON, OFF. "
   href="javascript:void(0);" onclick="DualFlipClassSwitch('html' , 'dark' , 'white' , 'ColorMode');" 
   style=" color: #111 ; padding: 0.4em 0.1em ; margin: 1px ; text-decoration: none ; float: right ; " 
 >
<button style="background: var(--button-background-color); border: none; cursor: pointer;">
    Motyw
</button>
		
		
</div>
<?php
include('partials/footer.php')
?>