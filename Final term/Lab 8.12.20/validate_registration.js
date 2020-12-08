function get (i) {
   return document.getElementById(i);
}
function validate() {
    var has_error = false;
    var name = get("name").value;
    var uname = get("uname").value;
    var email = get("mail").value;
    var phn = get("phone").value;
    var pass = get("pass").value;
    //debugger;
    for (i = 0; i < name.length; i++) {
       if (name[i] >= '0' || name[i] <= '9') {
       	  has_error = true;
       }
    }
    var email_format = false;
    for (i = 0; i < email.length - 1; i++) {
    	if (email[i] == '@') {
    	   for (j = i + 1; j < email.length; j++) {
    	   	  if (email[j] == '.') {
    	   	  	 email_format = true;
    	   	  }
    	   }
    	}
    }
    has_error = email_format;
    for (i = 0; i < uname.length; i++) {
    	if (uname[i] == ' ') {
    	   has_error = true;
    	   break;
    	}
    }
    for (i = 0; i < phn.length; i++) {
       if (phn[i] < '0' || phn[i] > '9') {
       	 has_error = true;
       	 break;
       }
    }
    if (uname.length < 6) has_error = true;
    if (pass.length < 8) has_error = true;
    if (phn.length != 11) has_error = true;
    if (has_error) {
      get("test").innerHTML = "There is an error";
    }
    return !has_error;
}