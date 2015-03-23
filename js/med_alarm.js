window.setInterval(function() {
    var d = new Date();
    var weekday = new Array(7);
    weekday[0] = "SUNDAY";
    weekday[1] = "MONDAY";
    weekday[2] = "TUESDAY";
    weekday[3] = "WEDNESDAY";
    weekday[4] = "THURSDAY";
    weekday[5] = "FRIDAY";
    weekday[6] = "SATURDAY";
    var n = weekday[d.getDay()];
    var nhour = d.getHours(),
        nmin = d.getMinutes(),
        ap;
    if (nhour == 0) {
        ap = " AM";
        nhour = 12;
    } else if (nhour < 12) {
        ap = " AM";
    } else if (nhour == 12) {
        ap = " PM";
    } else if (nhour > 12) {
        ap = " PM";
        nhour -= 12;
    }
    if (nmin <= 9) nmin = "0" + nmin;
    var time = "" + nhour + ":" + nmin + ap + "";
    $.ajax({
        url: 'www.sitarahussain.com/lifeSupporter_v3/check_med.php',
        type: 'POST',
        data: {
            'weekday': n,
            'txt_account_no': time
        },
    }).done(function(response) {
		
		var res = response.split("|");
		
		var ab = res[0].substr(0, 1); 
		var ab2 = res[0].substr(1, 2); 		
	
		var detail = res[1].split("<");
		document.getElementById('medName').innerText=detail[0];
		document.getElementById('dos1').innerText=detail[1];
        if (ab.trim() == '1') {   
			
			$("div#dialog").dialog ({
			position: 'top',
			modal: true,
  buttons : {
    "Take Pills" : function ()
    {
		
	$.ajax({url: 'www.sitarahussain.com/lifeSupporter_v3/take.php',
	type: 'Get',
			data: "update="+ab2,
	success: function(result){
        $("#div").html(result);
			
			$.ajax({url: 'www.sitarahussain.com/lifeSupporter_v3/takeFinish.php',
	        type: 'Get',
			data: "update="+ab2,
	        success: function(result){
		
		
	}});		
			
		if(result <= 0 ){
			alert("Refill");
			
		}
		
    }});
      $("div#dialog").dialog ("close");
	  
	  
    },
    "Skip" : function ()
    {
	$("div#dialog").dialog ("close");
    }
  }
}).prev().find(".ui-dialog-titlebar-close").hide (); 	
			
        }
		//else if(response.trim() == ''){
		//}
    }).fail(function() {
        console.log("error");
    }).always(function() {
        console.log("complete");
    });
}, 60000);
