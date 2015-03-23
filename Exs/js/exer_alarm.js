
window.setInterval(function(){
	var d=new Date();
	var nhour=d.getHours(),nmin=d.getMinutes(),ap;
	     if(nhour==0){ap=" AM";nhour=12;}
	else if(nhour<12){ap=" AM";}
	else if(nhour==12){ap=" PM";}
	else if(nhour>12){ap=" PM";nhour-=12;}

	if(nmin<=9) nmin="0"+nmin;
	var time=""+nhour+":"+nmin+ap+"";
	//alert(time);
	 
	  $.ajax({
			url: 'https://sitarahussain.com/check_exs.php?txt_account_no='+time,
			 type: 'POST',
		 success: function (response) {
			 if(response.trim() == '1'){
				 alert("Its time for excercise.");
			 }
			 //document.getElementById('showHtml').innerHTML = response;
                
		    },
			error: function (xhr, status) {
               
            }
                 
			
		})
	}, 5000);
	     