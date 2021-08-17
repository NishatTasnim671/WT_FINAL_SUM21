var hasError=false;
function get(id){
	return document.getElementById(id);
}
function searchProduct(e){
	if(e.value == ""){
		get("msg").innerHTML="";
		return;
	}
	var xhr= new XMLHttpRequest();
	xhr.open("GET","search_msg.php?key="+e.value,true);
	xhr.onreadystatechange=function()
	{
		if(this.readyState==4 && this.status == 200)
		{
			get("msg").innerHTML= this.responseText;
		}
	};
	xhr.send();
}

function msgvalidate(){
				refresh();
				
				if(get("sender").selectedIndex == 0){
					hasError=true;
					get("sender").innerHTML = "*Sender Req";
				}
				if(get("receiver").selectedIndex == 0){
					hasError=true;
					get("err_receiver").innerHTML = "*Receiver Req";
				}
				if(get("msg").value == ""){
					hasError = true;
					get("err_msg").innerHTML = "*Message Req";
				}
				
				
				return !hasError;
				
			}
			function refresh(){
				hasError=false;
			
				get("err_sender").innerHTML ="";
					get("err_receiver").innerHTML ="";
				get("err_msg").innerHTML ="";
				
				
			}
	

