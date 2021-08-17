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
	xhr.open("GET","search_course.php?key="+e.value,true);
	xhr.onreadystatechange=function()
	{
		if(this.readyState==4 && this.status == 200)
		{
			get("course").innerHTML= this.responseText;
		}
	};
	xhr.send();
}

		