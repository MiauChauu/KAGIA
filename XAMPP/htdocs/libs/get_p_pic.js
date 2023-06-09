function getImg() {		
		var data = "some data";
		$.ajax({				
			type : 'POST',
			url  : 'profile_get_changeable.php?action=get_profile_picture',
			data : data,
			beforeSend: function(){	
				
			},
			success : function(response){			
				console.log(response);
				$(".profile_pic").attr('src', response);
				//setTimeout(' window.location.href = "dashboard.php"; ',2000);
			
			}
		});
		return false;
	}
	
	function getBgImg() {		
		var data = "some data";
		$.ajax({				
			type : 'POST',
			url  : 'profile_get_changeable.php?action=get_profile_background',
			data : data,
			beforeSend: function(){	
				
			},
			success : function(response){			
				console.log(response);
				//$(document.body).css("backgroundColor",response);
				document.body.style.backgroundColor = response;
				
				//setTimeout(' window.location.href = "dashboard.php"; ',2000);
			
			}
		});
		return false;
	}
	
$(document).ready(function(){
	getImg();
	getBgImg();
});