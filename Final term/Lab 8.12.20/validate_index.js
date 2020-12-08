function get (i) {
   return document.getElementById(i);
}
function validate() {
   var name = get("uname").value;
   get("test").innerHTML = name;
   return true;
}