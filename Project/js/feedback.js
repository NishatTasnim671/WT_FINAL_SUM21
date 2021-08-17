
var hasError=false;
function get(id){
	return document.getElementById(id);
}
function validatePerformance(){
				var pf = document.querySelector('input[name="per"]:checked');
				if(pf == null){
					return false;
				}
				return true;
			}
function validateEffort(){
				var eff = document.querySelector('input[name="effort"]:checked');
				if(eff ==null){
					return false;
				}
				return true;
			}
function feedbackvalidate(){
				refresh();
				
				if(get("u_id").selectedIndex == 0){
					hasError=true;
					get("err_u_id").innerHTML = "*Student name Req";
				}
				if(!validatePerformance()){
					hasError=true;
					get("err_per").innerHTML = "*Performance Req";
				}
				if(!validateEffort()){
					hasError=true;
					get("err_effort").innerHTML = "*Effort Req";
				}
				if(get("tell").value==""){
					hasError=true;
					get("err_tell").innerHTML = "*Tell Req";
				}
				
				
				return !hasError;
				
			}
			function refresh(){
				hasError=false;
				get("err_u_id").innerHTML ="";
				get("err_per").innerHTML ="";
				get("err_effort").innerHTML ="";
				get("err_tell").innerHTML ="";
				
			}
function validateInstructor(){
				var ins = document.querySelector('input[name="ins"]:checked');
				if(ins ==null){
					return false;
				}
				return true;
			}
function validateCurri(){
				var cu = document.querySelector('input[name="curr"]:checked');
				if(cu ==null){
					return false;
				}
				return true;
			}
function reviewvalidate(){
				refresh2();
				
				if(get("c_id").selectedIndex == 0){
					hasError=true;
					get("err_c_id").innerHTML = "*Course Req";
				}
				if(!validateInstructor()){
					hasError=true;
					get("err_ins").innerHTML = "*Instructor Req";
				}
				if(!validateCurri()){
					hasError=true;
					get("err_curr").innerHTML = "*Curriculum Req";
				}
				if(get("com").value==""){
					hasError=true;
					get("err_comment").innerHTML = "*Comment Req";
				}
				
				
				return !hasError;
				
			}
			function refresh2(){
				hasError=false;
				get("err_c_id").innerHTML ="";
				get("err_ins").innerHTML ="";
				get("err_curr").innerHTML ="";
				get("err_comment").innerHTML ="";
				
			}
			