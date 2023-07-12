var url = "../../../models/listaCadastro/ocorrencias.php";
var id = "";
var ocorrenciaAtual = ""

$("#selectConsulta").on("change", function () {
    var str = "";
    $("#selectConsulta option:selected").each(function () {
        if ($(this).val() != 0) {

            ocorrenciaAtual = $(this).val();
            carregarOcorrencias()

        }
    });
})
    .trigger("change");


function carregarOcorrencias() {
    $.post(url, { ocorrencias: ocorrenciaAtual }, function (result) {
        console.log(result)
        $("#cardsOcorrencia").html(result)
    });
}


function editar(idAtual) {
    let urlEdit = "../../../models/listaCadastro/editar.php";
    $.post(urlEdit, { dadosId: idAtual }, function (result) {

        dados = JSON.parse(result);

        definirConteudoModal(`Paciente:${idAtual}`, dados[0], dados[1], dados[2])

    });

    $("#modalEdit").modal("show")

    id = idAtual;

}

function enviarDadosEditado() {


    formData = addVariaveisFormDataEdit(id, $("#nomeCompleto").val(), (($("#dataNascimento").val() == "") ? "" : $("#dataNascimento").val()), $("#tipoSanguineo").val(), $("#selectStatus").val());

    let urlEdit = "../../../models/listaCadastro/editar.php";

    $("#modalEdit").modal("hide")
    $("#myModal2").modal("show");

    $(".fechar").on("click", function () {
        $("#myModal2").modal("hide");

    })

    $("#opEnviar").on("click", function () {
        $.ajax({
            url: urlEdit,
            method: "POST",
            data: formData,
            contentType: false,
            cache: false,
            processData: false,
            success: function () {
                carregarOcorrencias()
                $("#myModal2").modal("hide");
            }
        })
    });

}

function excluir(idAtual) {
    let urlEdit = "../../../models/listaCadastro/excluir.php";
    $("#myModal").modal("show");



    $(".fechar").on("click", function () {
        $("#myModal").modal("hide");
    })

    $("#opDeletar").on("click", function () {

        $.post(urlEdit, { excluir: idAtual }, function (result) {

            if (result == 1) {

                carregarOcorrencias();
                $("#myModal").modal("hide");
            }

        });
    })

}

function definirConteudoModal(tituloModal, nomeCompleto, estadoPaciente, unidadeSelecionada) {

    $("#tituloModal").html(tituloModal);
    $("#nomeCompleto").val(nomeCompleto);
    $("#estadoPaciente").html(`<option selected>${estadoPaciente}</option>`);
    $("#unidadeDisponivel").html(`<option =selected>${unidadeSelecionada}</option>`);
}

function addVariaveisFormDataEdit(idAtual, nomeCompleto, dataNascimento, tipoSanguineo, status) {


    const formData = new FormData()

    formData.append("id", idAtual);
    formData.append("nomeCompleto", nomeCompleto)
    formData.append("dataNascimento", dataNascimento)
    formData.append("tipoSanguineo", tipoSanguineo)
    formData.append("status", status)

    return formData
}