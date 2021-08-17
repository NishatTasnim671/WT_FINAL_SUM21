var hasError=false;
			function get(id){
				return document.getElementById(id);
			}
			
			function Regvalidate(){
				refresh();
				if(get("name").value == ""){
					hasError = true;
					get("err_name").innerHTML = "*Name Req";
				}
				else if(get("name").value.length <=2){
					hasError = true;
					get("err_name").innerHTML = "*Name must be > 2 char";
				}
				if(get("uname").value==""){
					hasError=true;
					get("err_uname").innerHTML = "*Username Req";
				}
				if(get("pass").value==""){
					hasError=true;
					get("err_pass").innerHTML = "*Password Req";
				}
				if(get("confirmpass").value==""){
					hasError=true;
					get("err_confirmpass").innerHTML = "*Confirm Password Req";
				}
				if(get("email").value==""){
					hasError=true;
					get("err_email").innerHTML = "*Email Req";
				}
				if(get("prof").selectedIndex == 0){
					hasError=true;
					get("err_prof").innerHTML = "*Profession Req";
				}
				if(get("street").value==""){
					hasError=true;
					get("err_street").innerHTML = "*Street Req";
				}
				if(get("city").value==""){
					hasError=true;
					get("err_city").innerHTML = "*City Req";
				}
				if(get("postal").value==""){
					hasError=true;
					get("err_postal").innerHTML = "*Postal Req";
				}
					return !hasError;
				
			}
			function refresh(){
				hasError=false;
				get("err_name").innerHTML ="";
				get("err_uname").innerHTML ="";
				get("err_pass").innerHTML ="";
				get("err_confirmpass").innerHTML ="";
				get("err_prof").innerHTML ="";
				get("err_street").innerHTML ="";
				get("err_city").innerHTML ="";
				get("err_postal").innerHTML = "";
			}
			
			