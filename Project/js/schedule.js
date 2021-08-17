var hasError=false;
function get(id){
	return document.getElementById(id);
}


		function schedulevalidate(){
				refresh();
				if(get("c_id").selectedIndex == 0){
					hasError=true;
					get("err_c_id").innerHTML = "*Course Req";
				}
				if(get("date").value == ""){
					hasError = true;
					get("err_date").innerHTML = "*Date Req";
				}
				
				if(get("day").selectedIndex == 0){
					hasError=true;
					get("err_day").innerHTML = "*Day Req";
				}
				if(get("time").value == ""){
					hasError = true;
					get("err_time").innerHTML = "*Time Req";
				}
				
				
				
				return !hasError;
				
			}
			function refresh(){
				hasError=false;
				get("err_c_id").innerHTML ="";
				get("err_date").innerHTML ="";
				get("err_day").innerHTML ="";
				get("err_time").innerHTML ="";
				
			}