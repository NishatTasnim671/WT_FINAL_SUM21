var hasError=false;
function get(id){
	return document.getElementById(id);
}
function searchCourse(e){
	if(e.value == ""){
		get("course").innerHTML="";
		return;
	}
	var xhr= new XMLHttpRequest();
	xhr.open("GET","search_inscourse.php?key="+e.value,true);
	xhr.onreadystatechange=function()
	{
		if(this.readyState==4 && this.status == 200)
		{
			get("course").innerHTML= this.responseText;
		}
	};
	xhr.send();
}

		function coursevalidate(){
				refresh();
				if(get("name").value == ""){
					hasError = true;
					get("err_name").innerHTML = "*Course Name Req";
				}
				if(get("ca_id").selectedIndex == 0){
					hasError=true;
					get("err_ca_id").innerHTML = "*Category Req";
				}
				if(get("duration").value == ""){
					hasError = true;
					get("err_duration").innerHTML = "*Duration Req";
				}
				
				if(get("price").value==""){
					hasError=true;
					get("err_price").innerHTML = "*Price Req";
				}
				
				
				return !hasError;
				
			}
			function refresh(){
				hasError=false;
				get("err_name").innerHTML ="";
				get("err_ca_id").innerHTML ="";
				get("err_duration").innerHTML ="";
				get("err_price").innerHTML ="";
				
			}