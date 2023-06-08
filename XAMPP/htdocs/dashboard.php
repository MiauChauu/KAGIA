<?php
include('newheader.php');
?>


	<div class="row">
<div class="container">
	<div class="inner">
    <h1>User: <?php echo strtoupper($_SESSION['user_session']);?></h1>
	<br>
	<h2>Well Hello There</h2>
	<!-- Contenedor -->
	
<div class="edit-pic">
<a href="" target="_blank" class="fa fa-facebook"></a>
<a href="" target="_blank" class="fa fa-instagram"></a>
<a href="" target="_blank" class="fa fa-twitter"></a>
<a href="" target="_blank" class="fa fa-google"></a>



</div>
<div class="username">
	<!--
	<small><i class="fa fa-map-marker"></i> India </small>
    <p><i class="fa fa-briefcase"></i> Web Design and Development.</p>
    
    <a href="https://web.facebook.com/iamgurdeeposahan" target="_blank" class="btn-o"> <i class="fa fa-user-plus"></i> Add Friend </a>
    <a href="https://www.instagram.com/gurdeeposahan/" target="_blank"  class="btn-o"> <i class="fa fa-plus"></i> Follow </a>
    
    
     <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-ellipsis-v pull-right"></span></a>
          <ul class="dropdown-menu pull-right">
            <li><a href="#">Video Call <i class="fa fa-video-camera"></i></a></li>
            <li><a href="#">Poke <i class="fa fa-hand-o-right"></i></a></li>
            <li><a href="#">Report <i class="fa fa-bug"></i></a></li>
            <li><a href="#">Block <i class="fa fa-lock"></i></a></li>
          </ul>
        </li>
      </ul>
-->   
</div>
<script type="text/javascript" charset="utf8" src="libs/edit_profile.js"></script>
<p class="show_edit" style="display: block">&#9660; Edit Profile &#9660;</p>
<p class="hide_edit" style="display: none">&#9650; Edit Profile and Refresh Site &#9650;</p>
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
			
		
		<!--
		<li class="default open">
			<div class="link"><i class="fa fa-code"></i>Professional Skills<i class="fa fa-chevron-down"></i></div>
			<ul class="submenu">
				<li><a href="#"><span class="tags">Adobe Photoshop</span> <span class="tags">Corel Draw</span> <span class="tags">CSS</span> <span class="tags">Css 3</span> 
                <span class="tags">Graphic Design</span> <span class="tags">HTML</span> <span class="tags">HTML5</span> <span class="tags">JavaScript</span> 
                <span class="tags">Twitter bootstrap</span> <span class="tags">bootstrap</span> <span class="tags">User Interface Design</span> <span class="tags">Wordpress</span></li></a>
			</ul>
		</li>
		<li>
			<div class="link"><i class="fa fa-picture-o"></i>Photos <small>1,120</small><i class="fa fa-chevron-down"></i></div>
			<ul class="submenu">
				<li class="photosgurdeep"><a href="#"><img class="img-responsive iamgurdeeposahan" alt="iamgurdeeposahan" src="http://www.webncc.in/images/gurdeeposahan.jpg">                 
				</a>
                <a href="#"><img class="img-responsive iamgurdeeposahan" alt="iamgurdeeposahan" src="http://www.webncc.in/images/gurdeeposahan.jpg">                 
    			</a>
                <a href="#"><img class="img-responsive iamgurdeeposahan" alt="iamgurdeeposahan" src="http://www.webncc.in/images/gurdeeposahan.jpg">                 
    			</a>
                <a href="#"><img class="img-responsive iamgurdeeposahan" alt="iamgurdeeposahan" src="http://www.webncc.in/images/gurdeeposahan.jpg">                 
    			</a>
               
                <a class="view-all" href="https://web.facebook.com/iamgurdeeposahan" target="_blank" >15+
        		</a>
    			    
				</li>
			</ul>
		</li>
		<li><div class="link"><i class="fa fa-users"></i>Friends <small>1,053</small><i class="fa fa-chevron-down"></i></div>
			<ul class="submenu">
    			<li class="photosgurdeep"><a href="#"><img class="img-responsive iamgurdeeposahan" alt="iamgurdeeposahan" src="http://www.webncc.in/images/gurdeeposahan.jpg">                 
				</a>
                <a href="#"><img class="img-responsive iamgurdeeposahan" alt="iamgurdeeposahan" src="http://www.webncc.in/images/gurdeeposahan.jpg">                 
    			</a>
                <a href="#"><img class="img-responsive iamgurdeeposahan" alt="iamgurdeeposahan" src="http://www.webncc.in/images/gurdeeposahan.jpg">                 
    			</a>
                <a href="#"><img class="img-responsive iamgurdeeposahan" alt="iamgurdeeposahan" src="http://www.webncc.in/images/gurdeeposahan.jpg">                 
    			</a>
                <a href="#"><img class="img-responsive iamgurdeeposahan" alt="iamgurdeeposahan" src="http://www.webncc.in/images/gurdeeposahan.jpg">                 
        		</a>
                <a href="#"><img class="img-responsive iamgurdeeposahan" alt="iamgurdeeposahan" src="http://www.webncc.in/images/gurdeeposahan.jpg">                 
    			</a>
                <a href="#"><img class="img-responsive iamgurdeeposahan" alt="iamgurdeeposahan" src="http://www.webncc.in/images/gurdeeposahan.jpg">                 
    			</a>
                <a href="#"><img class="img-responsive iamgurdeeposahan" alt="iamgurdeeposahan" src="http://www.webncc.in/images/gurdeeposahan.jpg">                 
        		</a>
                <a href="#"><img class="img-responsive iamgurdeeposahan" alt="iamgurdeeposahan" src="http://www.webncc.in/images/gurdeeposahan.jpg">                 
    			</a>
               
                <a class="view-all" href="https://web.facebook.com/iamgurdeeposahan" target="_blank">50+
        		</a>
    			    
				</li>
			</ul>
		</li>
		-->
	</div>
    
    
    
 </div>
    
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