function get(id){
	return document.getElementById(id);
}
function searchStudent(e){
	if(e.value == ""){
		get("student").innerHTML="";
		return;
	}
	var xhr= new XMLHttpRequest();
	xhr.open("GET","search_student.php?key="+e.value,true);
	xhr.onreadystatechange=function()
	{
		if(this.readyState==4 && this.status == 200)
		{
			get("student").innerHTML= this.responseText;
		}
	};
	xhr.send();
}