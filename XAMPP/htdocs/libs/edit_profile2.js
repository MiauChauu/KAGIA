$(document).ready(function(){
	getImg();
	getBgImg();
	//alert("fugma");
	//Jeżeli chcesz to wprowadz tu więcej linków do obrazków i ich alty ale musisz też dodać odpowiednią ilość pustych kolumn puste kolumny w tabeli w dashboard
	var picturestable=["https://i.imgur.com/yalihR1.png","https://i.imgur.com/KNpRCnN.png","https://i.imgur.com/ensThzk.png","https://i.imgur.com/bukpRNX.png","https://i.imgur.com/0P8YDaP.png","https://cdn.shopify.com/s/files/1/2104/4963/articles/Staff_Template.png?v=1680660921&width=1440","Shinya","Yusuke","Tae","Sae","Sojiro","Temp"];
	var backgroundstable=["#C49D43","#934ECF","#4EA8CF","#001F4D","#00FF00"];
	//Profile pic generator
	var idx1;
	var count1 = picturestable.length/2;
	//console.log(count1);
	var entirerow1='';		
	var td_id1;
	for (let i = 0; i < count1; i++)
	{
		td_id1='';
		td_id1=td_id1.concat("image_",i+1);
		entirerow1=entirerow1.concat('<td id="',td_id1,'" style="border:5px solid white;"><img src="', picturestable[i], '" alt="',picturestable[count1+i] ,'" width="100" height="100" style="vertical-align:middle;"></td>');
	}
	console.log(entirerow1);
	document.getElementById("profile_picture_choose").rows[0].innerHTML=entirerow1;
	//background pic generator
	var idx2;
	var count2 = backgroundstable.length;
	//console.log(count1);
	var entirerow2='';		
	var td_id2;
	for (let i = 0; i < count2; i++)
	{
		td_id2='';
		td_id2=td_id2.concat("background_",i+1);
		entirerow2=entirerow2.concat('<td id="',td_id2,'" bgcolor="',backgroundstable[i],'" style="width:100px; height:100px; border:5px solid white;"></td>');
	}
	console.log(entirerow2);
	document.getElementById("profile_background_choose").rows[0].innerHTML=entirerow2;
	$(".show_edit").click(function() {
		$(".show_edit").css("display", "none");
		$(".hide_edit").css("display", "block");
		$(".edit_profile").css("display", "block");
		//profile pic choose
		for (let i = 0; i < count1; i++)
		{
			td_id1='#';
			td_id1=td_id1.concat("image_",i+1);
			$(td_id1).click(function() {
				for (let j=0; j<count1; j++)
				{
					td_id1='#';
					td_id1=td_id1.concat("image_",j+1);
					$(td_id1).css("border","5px solid white");
				}
				$(this).css("border", "5px solid red");
				var s = $(this).attr("id");
				var r = /\d+/;
				idx1 = s.match(r)[0]-1;
				console.log(idx1);
				$(".submit_profile_change").css("display", "block");
			});
		}
		//background pic choose
		for (let i = 0; i < count2; i++)
		{
			td_id2='#';
			td_id2=td_id2.concat("background_",i+1);
			$(td_id2).click(function() {
				for (let j=0; j<count2; j++)
				{
					td_id2='#';
					td_id2=td_id2.concat("background_",j+1);
					$(td_id2).css("border","5px solid white");
				}
				$(this).css("border", "5px solid red");
				var s = $(this).attr("id");
				var r = /\d+/;
				idx2 = s.match(r)[0]-1;
				console.log(idx2);
				$(".submit_profile_change").css("display", "block");
			});
		}
	});
	
	$(".hide_edit").click(function() {
		$(".show_edit").css("display", "block");
		$(".hide_edit").css("display", "none");
		$(".edit_profile").css("display", "none");
		setTimeout(' window.location.href = "dashboard.php"; ',2000);
		$("#edit-response").html('Refreshing...');
	});
	
	$(".submit_profile_change").click(function(){
		console.log(backgroundstable[idx2])
		setImgs(picturestable[idx1],backgroundstable[idx2]);
	});
	
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
				$(document.body).css("backgroundColor",response);
				//setTimeout(' window.location.href = "dashboard.php"; ',2000);
			
			}
		});
		return false;
	}
	
	function setImgs(profile_pic, profile_bg) {		
		var data = [profile_pic,profile_bg];
		$.ajax({				
			type : 'POST',
			url  : 'profile_set_changeable.php?action=set_everything',
			data : { p_pic : profile_pic , p_bg : profile_bg },
			beforeSend: function(){	
				
			},
			success : function(response){			
				console.log(response);
				//$(".profile_pic").attr('src', response);
				$("#edit-response").html('Changes will be implemented after user manually hide edit profile section');
				//setTimeout(' window.location.href = "dashboard.php"; ',2000);
			
			}
		});
		return false;
	}
	
});