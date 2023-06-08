<?php
session_start();
if (isset($_SESSION['user_session'])) {
    // Session variable is set
    //echo "Session variable is set.";
} else {
    // Session variable is not set
    //echo "Session variable is not set.";
	header("Location: Strona_główna+logowanie.php");
	exit;
	
if (!isset($_SESSION['colorMode'])) {
    $_SESSION['colorMode'] = 'dark'; //domyślny tryb kolorów
}

$htmlClass = $_SESSION['colorMode'];
}
?>
<!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="libs/common.css">-->
<script>
window.onerror = null ;


/*
 Podczas ladowania strony zapamietuje zapisane klasy CSS z localStorage.
  Dziala tylko dla znacznikow HTML, ktore sa juz zaladowane przed uruchomieniem skryptu
  Optymalnie jest to znacznik HTML. Dziala tylko dla pierwszego znacznika danego typu
*/

document.addEventListener( 'DOMContentLoaded' , function() {

  RememberClasses() ;

});


function RememberClasses() {

 const ClassMemory = [
      ["html" , "ColorMode"] ,
      ["html" , "TextSize"] 
   ] ;


 for ( let [ Tag , MemoryName ] of ClassMemory ) {

    let TagNotAlive = !(document.querySelector( Tag )) ;

    let MemoryValue = window.localStorage.getItem( MemoryName ) ;

    /*  W przypadku bledow logicznych pomijana jest jedna petla */

    if ( !MemoryValue || TagNotAlive ) {
       continue ;
     }

    /* W przeciwnym razie zapamietuje i ustawia klasy CSS. */
     else {

        document.querySelector( Tag ).classList.add( MemoryValue );
      }
  }

}



/* W trybie ciemnym, jesli ColorMode nie zostal ustawiony, a godzina jest miedzy 20:00 a 7:00 */

document.addEventListener("DOMContentLoaded", AfterDark() , true ) ;

function AfterDark() {

 let hour = new Date().getHours() ;

 let ColorWasSet = localStorage.getItem( "ColorMode" ) ;

 let DarkWasSet = document.querySelector("html").classList.contains("dark") ;

 if ( ( hour >= 20 || hour < 7 ) && !( ColorWasSet || DarkWasSet ) ) 
  {
      document.querySelector("html").classList.add( "dark" ) ;
   }
}



/*   Przelacznik klasy CSS. Wlacz/Wylacz klase CSS + zapamietaj w localStorage. */


function ClassSwitch( TagName, ClassName, MemoryName ) {


 /* Uzywa Stale zmiennych, aby uniknac bledow logicznych */

 const ClassWasActive = document.querySelector( TagName ).classList.contains( ClassName ) ;

 const OldMemory = window.localStorage.getItem( MemoryName ) ;


 /* Jesli klasa jest nowa i nie jest aktywna, usuwa mozliwa stara klase z pamieci.
   Dokladne wyczyszczenie komorki pamieci.
 */
  
    if ( !ClassWasActive && ( OldMemory !== ClassName ) ) {

       if ( OldMemory ) {
            document.querySelector( TagName ).classList.remove( OldMemory ) ;
            window.localStorage.removeItem( MemoryName ) ;
        }

        document.querySelector( TagName ).classList.add( ClassName ) ;
        window.localStorage.setItem( MemoryName , ClassName ) ;
     }

 /* W przeciwnym razie klasa CSS byla juz aktywna lub pamiec przelacznika nie byla czysta.
   Przelaczamy dana klase. Usuwamy możliwa stara klase z pamieci.
 */
  
     else {

        document.querySelector( TagName ).classList.toggle( ClassName ) ;

         if ( OldMemory ) {
            document.querySelector( TagName ).classList.remove( OldMemory ) ;
            window.localStorage.removeItem( MemoryName ) ;
         }

      }

 return false ;

}


/* 
Przelaczanie dwóch klas CSS. ustawia te lub inna klase CSS.
   Przelacza lub zmienia klase CSS miedzy dwoma danymi opcjami.
*/


function DualFlipClassSwitch( TagName , Class1 , Class2 , MemoryName ) {

 const ClassWasActive = document.querySelector( TagName ).classList.contains( Class1 ) ; 

 if ( !ClassWasActive ) { ClassSwitch( TagName , Class1 , MemoryName ) ; }

 else { ClassSwitch( TagName , Class2 , MemoryName ) ; }

 return false ;

}
</script>

<!DOCTYPE HTML>
<html lang="pl">
<head>

	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /> <!--sprawdzić co to-->
	
	<title>Panel</title>
	
	<link rel="stylesheet" type="text/css" href="persona.css">
	<link href="styl_panelu.css" rel="stylesheet" type="text/css" />
	<link href='http://fonts.googleapis.com/css?family=Lato:400,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'> <!tu chyba trzeba coś zmienić>
	<script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.0.3.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
	<script type="text/javascript" src="libs/common.js"></script>

	<!--
	<script type="text/javascript" charset="utf8" src="libs/edit_profile.js"></script>
	-->
	<script type="text/javascript" charset="utf8" src="libs/get_p_pic.js"></script>
	<link href="css/fontello.css" rel="stylesheet" type="text/css" /> <!--sprawdzić co to-->

	
<!--odwołanie się do google translate-->	
		    <meta name="google" content="notranslate">
    <script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({pageLanguage: 'pl', includedLanguages: 'en,pl', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
    }
    </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
	<!--próba ukrycia widgeta ale nie wiem dlaczego nie chce działać poprawnie-->
    <style>
        .google_translate_element {
            display: none;
        }
    </style>
	
</head>

<body>

	<div class="wrapper">
		<div class="nav">
			<ol>
				<li><a href="Strona_główna.php">Strona główna</a></li>
				<li><a href="dodawanie_produktu.php">Dodanie produktu</a></li>
				<li><a href="top10.php">Ranking gier</a></li>
				<li><a href="dashboard.php">Edytuj profil</a></li>
                <li><a href="#">Ustawienia</a></li>
                <li><a href="response.php?action=logout" class="btn btn-default btn-sm">Wyloguj</a></li>
				<div style="float:left;" class="profile_pic_div">
				<a href="p_użytkownika.php" class="btn btn-default btn-sm">
					<img class="profile_pic" alt="profile_pic" style="width:30px;height:30px;" src="https://cdn.shopify.com/s/files/1/2104/4963/articles/Staff_Template.png?v=1680660921&width=1440" border="5px solid white">
				</a>
				</div>
			</ol>
		
		</div>
		
<!--Skrypt do tłumaczenia strony-->
		<script>
    function translatePage(language) {
        var google_translate_element = document.getElementById('google_translate_element');
        var select = google_translate_element.getElementsByTagName('select')[0];
        for(var i=0; i < select.options.length; i++){
            if(select.options[i].value == language){
                select.selectedIndex = i;
                var event = document.createEvent('HTMLEvents');
                event.initEvent('change', true, false);
                select.dispatchEvent(event);
                break;
            }
        }
    }
    </script>
		

	<!--odniesienie do pliku jquery z zewnątrz, potrzebny do tego poniżej-->
	<!--całość po niżej jest po to by pasek był przykleiony do góry krawędzi nawet jak bedzie się przesuwało stronę w dół-->
	<script> 

	$(document).ready(function() {
	var NavY = $('.nav').offset().top;
	 
	var stickyNav = function(){
	var ScrollY = $(window).scrollTop();
		  
	if (ScrollY > NavY) { 
		$('.nav').addClass('sticky');
	} else {
		$('.nav').removeClass('sticky'); 
	}
	};
	 
	stickyNav();
	 
	$(window).scroll(function() {
		stickyNav();
	});
	});
</script>
	
	</div>