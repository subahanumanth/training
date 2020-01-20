
function validateForm() {

var name = document.forms["validate"]["name"].value;
var age = document.forms["validate"]["age"].value;
var email = document.forms["validate"]["email"].value;

if(name.length<2) {
    document.write("Invalid name");
}

elseif(age.length>3) {
    document.write("Invalid Age");
}


else {
document.write(name+"<br>");
document.write(age+"<br>");
document.write(email+"<br>");

}
}

