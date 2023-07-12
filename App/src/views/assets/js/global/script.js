function deslogar() {
    let url = "../../../models/telaLogin/logout.php";
    $.post(url, function (result) {
        if (result == 1) window.location.assign("../../pages/telaLogin/index.php")
    })
}