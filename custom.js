
function myFunction() {
    var x = document.getElementById("password");
    
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
    
}

function back(){
  window.location.href = "index.html";

}
