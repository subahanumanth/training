function validateForm() {

    var name = document.forms["validate"]["name"].value;
    var age = document.forms["validate"]["age"].value;
    var email = document.forms["validate"]["email"].value;
    var city = document.forms["validate"]["city"].value;
    var gender = document.forms["validate"]["gender"].value;

if (name == "" || age == "" || email == "" || city == "" || gender == "") {
    alert("enter all details");
} else if (name.length>15) {
    alert("Name must be less than 15 characters");
} else{
    document.write(name+"<br>");
    document.write(age+"<br>");
    document.write(email+"<br>");
    document.write(city+"<br>");
    document.write(gender+"<br>");
}
}
