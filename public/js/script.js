function myFunction(y) {
    var x = document.getElementsByClassName("password");
    if (y === 'checkbox1'){
        x = x[0];
    } else {
        x = x[1];
    }
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}

