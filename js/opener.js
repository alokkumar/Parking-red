$(function() {
 var startdate = $( ".datestart" ),
      enddate = $( ".dateend" ),
	  vehicle = $(".vehicle"),
	  slot = $(".slot"),
	  sh = $(".sh"),
	  eh = $(".eh"),
	  smin = $(".smin"),
	  emin = $(".emin"),
      allFields = $( [] ).add( startdate ).add( enddate ).add(vehicle).add(slot).add(sh).add(eh).add(smin).add(emin);
    $( "#41" ).dialog({
      autoOpen: false,
	  width : 500,
      show: {
        effect: "blind",
        duration: 1000
		},
      hide: {
        effect: "explode",
        duration: 1000
      },
	  buttons: {
	  Check: function(){ 
						$(".result").html("Processing...");
						$.ajax(
						{
						url:'check.php?date1='+startdate.val()+'&date2='+enddate.val()+'&slot='+slot.val()+'&sh='+sh.val()+'&eh='+eh.val()+'&smin='+smin.val()+'&emin='+emin.val()+'&vehicle='+vehicle.val(),
						type: 'GET',
						success: function(response){$(".result").html(response);
						if(response == "Ok you can proceed!!")
							$(".ui-dialog-buttonpane button:contains('Proceed')").button("enable");
						else
							$(".ui-dialog-buttonpane button:contains('Proceed')").button("disable");
						}
						});
						
						},
		Proceed: function(){$("form").submit();}
	  },
	  modal: true
    }
	);
	$(".ui-dialog-buttonpane button:contains('Proceed')").button("disable");
    $( ".opener4" ).click(function() {
      $( "#41" ).dialog( "open" );
    });
  });
  
  
$(function() {
 var startdate = $( ".datestart" ),
      enddate = $( ".dateend" ),
	  vehicle = $(".vehicle"),
	  slot = $(".slot"),
	  sh = $(".sh"),
	  eh = $(".eh"),
	  smin = $(".smin"),
	  emin = $(".emin"),
      allFields = $( [] ).add( startdate ).add( enddate ).add(vehicle).add(slot).add(sh).add(eh).add(smin).add(emin);
    $( "#21" ).dialog({
      autoOpen: false,
	  width : 500,
      show: {
        effect: "blind",
        duration: 1000
		},
      hide: {
        effect: "explode",
        duration: 1000
      },
	  buttons: {
	  Check: function(){ 
						$(".result").html("Processing...");
						$.ajax(
						{
						url:'check.php?date1='+startdate.val()+'&date2='+enddate.val()+'&slot='+slot.val()+'&sh='+sh.val()+'&eh='+eh.val()+'&smin='+smin.val()+'&emin='+emin.val()+'&vehicle='+vehicle.val(),
						type: 'GET',
						success: function(response){$(".result").html(response);
						if(response == "Ok you can proceed!!")
							$(".ui-dialog-buttonpane button:contains('Proceed')").button("enable");
						else
							$(".ui-dialog-buttonpane button:contains('Proceed')").button("disable");
						}
						});
						
						},
		Proceed: function(){$("form").submit();}
	  },
	  modal: true
    }
	);
	$(".ui-dialog-buttonpane button:contains('Proceed')").button("disable");
    $( ".opener2" ).click(function() {
      $( "#21" ).dialog( "open" );
    });
  }); 