function validateForm() {

    var name = document.forms["validate"]["name"].value;
    var age = document.forms["validate"]["age"].value;
    var email = document.forms["validate"]["email"].value;
    var city = document.forms["validate"]["city"].value;
    var gender = document.forms["validate"]["gender"].value;
    var form = document.querySelector('.form');

if (name == "" || age == "" || email == "" || city == "" || gender == "") {
    alert("enter all details");
    } else if (name.length>15) {
        alert("Name must be less than 15 characters");
    }
else {
console.log(name + "<br>");
console.log(age + "<br>");
console.log(email+ "<br>");
console.log(city+ "<br>");
console.log(gender+ "<br>");
}
}
