function makePayment() {
    var cardNumber = document.forms["form"]["cardNumber"].value;
    var securityCode = document.forms["form"]["securityCode"].value;
    var month = document.getElementById("month").value;
    var year = document.getElementById("year").value;
    var cardholderName=document.forms["form"]["cardholderName"].value;
    var address1=document.forms["form"]["add1"].value;
    var address2=document.forms["form"]["add2"].value;
    var address3=document.forms["form"]["add3"].value;
    var city=document.forms["form"]["city"].value;
    var region=document.forms["form"]["region"].value;
    var postCode=document.forms["form"]["postCode"].value;
    var country = document.getElementById("selected").value;
    var telephone=document.forms["form"]["tel"].value;
    var fax=document.forms["form"]["fax"].value;
    var email=document.forms["form"]["email"].value;

    var a=[];
    var cities =["madurai","virudhunagar","coimbatore"];

    if(cardNumber.length<17) {
        a.push(cardNumber);
    } else {
        alert("Enter Valid Card Number");
    }
    if(isNaN(securityCode) || securityCode.length<5) {
        a.push(securityCode);
    } else {
        alert("Security Code Must Be Less Than Five Characters");
    }
    if(month=="") {
        alert("Select Month");
    } else {
        a.push(month);
    }
    if(year=="") {
        alert("Select Year");
    } else {
        a.push(year);
    }
    if(cardholderName.length<15) {
        a.push(cardholderName);
        document.write(a);
    }else {
        alert("Enter Valid Name");
    }
    if(address1=="") {
        alert("address1 must be filled");
    } else {
        a.push(address1);
    }
    if(address2=="") {
        alert("address2 must be filled");
    } else {
        a.push(address2);
    }
    if(address3=="") {
        alert("address3 must be filled");
    } else {
        a.push(address3);
    }
    if(city=="") {
        alert("Enter City");
    } else {
        a.push(city);
        a.push(region);
    }
    if(country=="") {
        alert("Select Country");
    } else {
        a.push(country);
    }
     if(isNaN(telephone)) { 
        a.push(telephone);
    } else { 
        alert("Enter Valid Telephone Number");
    }
    if(fax=="") {
        alert("Enter Fax");
    } else {
        a.push(fax);
    }
    if(email=="") {
        alert("Enter Email");
    } else {
        a.push(email);
    }
for(var i=0;i<a.length;i++) {
    document.write(a[i]+"<br>");
}

}
