function login() {
    username = document.getElementById("user").value;
    password = document.getElementById("pass").value;

    if (username == "" || password == ""){
        alert("Login Gagal, Username & Password Salah");
        return false
    }
    else if (username == "ismail2020" && password == "knight"){
            alert("Login Sukses !!!");
            window.location= "loginsukses.html";
            return false
    }
    else{
        alert("Login Gagal, Username & Password Salah.");
    }
}