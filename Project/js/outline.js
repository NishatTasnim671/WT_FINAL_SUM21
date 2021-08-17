var hasError=false;
function get(id){
	return document.getElementById(id);
}
function searchOutline(e){
	if(e.value == ""){
		get("outline").innerHTML="";
		return;
	}
	var xhr= new XMLHttpRequest();
	xhr.open("GET","search_outline.php?key="+e.value,true);
	xhr.onreadystatechange=function()
	{
		if(this.readyState==4 && this.status == 200)
		{
			get("outline").innerHTML= this.responseText;
		}
	};
	xhr.send();
}

function outlinevalidate(){
				refresh();
				
				if(get("c_id").selectedIndex == 0){
					hasError=true;
					get("err_c_id").innerHTML = "*Course Req";
				}
				if(get("desc").value == ""){
					hasError = true;
					get("err_desc").innerHTML = "*Description Req";
				}
				if(get("goal").value == ""){
					hasError = true;
					get("err_goal").innerHTML = "*Goal Req";
				}
				
				if(get("assess").value==""){
					hasError=true;
					get("err_assess").innerHTML = "*Assessment Req";
				}
				
				
				return !hasError;
				
			}
			function refresh(){
				hasError=false;
				get("err_c_id").innerHTML ="";
				get("err_desc").innerHTML ="";
				get("err_goal").innerHTML ="";
				get("err_assess").innerHTML ="";
				
			}
			function uploadvalidate(){
				refresh2();
				
				if(get("c_id").selectedIndex == 0){
					hasError=true;
					get("err_c_id").innerHTML = "*Course Req";
				}
				if(get("mat").value == ""){
					hasError = true;
					get("err_mat").innerHTML = "*File Req";
				}
				
				
				return !hasError;
				
			}
			function refresh2(){
				hasError=false;
				get("err_c_id").innerHTML ="";
				get("err_mat").innerHTML ="";
				
				
			}