
$(document).ready(function () {
							
	$("#startdate").blur(function()
	{	
		var startdate=$($(this)).val();	
		if(startdate=="")  {
			//$("#result").html("Please enter a start date");	
			return;
		}		
		if(startdate!=""&&isValidDate(startdate))
		{
		$.get("process.php", {'sd':startdate},
			function(data)
			{    
				$("#result").html(data);		
			});
		}
		else
			$("#result").html("Please enter start/end date with format of YYYY-MM-dd");	
	});								

function isValidDate(str){
	if(str=="" || str==null){return false;}												
	var m = str.match(/(\d{4})-(\d{2})-(\d{2})/);
	if( m === null || typeof m !== 'object'){return false;}				
	if (typeof m !== 'object' && m !== null && m.size!==3){return false;}
				
	var ret = true; //RETURN VALUE						
	var thisYear = new Date().getFullYear(); 
	var minYear = 1900; 
	
	if( (m[1].length < 4) || m[1] < minYear || m[1] > thisYear){ret = false;}
	if( (m[1].length < 2) || m[2] < 1 || m[2] > 12){ret = false;}
	if( (m[1].length < 2) || m[3] < 1 || m[3] > 31){ret = false;}
	
	return ret;			
}	
});
