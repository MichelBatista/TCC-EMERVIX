function logar() {
    
    let url = "../../../models/telaLogin/login.php";

    let email = $("#login-email").val();
    let senha = $("#login-senha").val();

    $.post(url, { email: email, senha: senha }, function (result) {
        
        // window.location.assign("http://www.w3schools.com");
        if (result == 1) window.location.assign("../../pages/inicio/index.php")
        
    })

}