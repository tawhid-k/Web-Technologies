function get (i) {
   return document.getElementById(i);
}
function validate() {
   username = get("uname").value;
   password = get("pass").value;
   if (username == "" || password == "") {
   	 return false;
   }
   else {
   	 return true;
   }
}