
function getUnidadesDisponiveis() {
  let url = "../../../models/cadastroUrgencia/unidadesDisponiveis.php";

  $.post(url, function (result) {
    console.log(result)
    $("#unidadeDisponivel").removeAttr("disabled").html(result)

  });
}

function getDados() {

  let url = "../../../models/cadastroUrgencia/cadastro.php";

  const formData = new FormData();
  // r c = ((a < b) ? 'minor' : 'major');
  let nomeCompleto = (($("#nomeCompleto").val() == "") ? 'Não Informado' : $("#nomeCompleto").val());
  let dataNascimento = $("#dataNascimento").val();
  let genero = $("input[name=inlineRadioOptions]:checked").val()
  let estadoPaciente = $("#estadoPaciente").val();
  let tipoSanguineo = $("#tipoSanguineo").val();


  let unidadeDisponivel = $("#unidadeDisponivel").val(); let controleInputs;
  if (estadoPaciente == "0" || unidadeDisponivel == "0") controleInputs = false; else controleInputs = true;
  if (controleInputs == true) {
    removeCollorErrorEstadoPaciente()
    removeCollorErrorUnidadeDisponivel()
    let formData = addVariaveisFormData(nomeCompleto, dataNascimento, genero, estadoPaciente, tipoSanguineo, unidadeDisponivel);


    $("#myModal2").modal("show");

    $(".fechar").on("click", function () {
      $("#myModal2").modal("hide");

    })

    $("#opEnviar").on("click", function () {

      $.ajax({
        url: url,
        method: "POST",
        data: formData,
        contentType: false,
        cache: false,
        processData: false,
        success: function (result) {



          if (result == 0) {
            alert("Parece que a unidade escolhida encheu. Selecione outra por gentileza.")
            $("#unidadeDisponivel").html('<option value="0" selected>Unidades Disponiveis</option>').attr("disabled", true)

          } else if (result == -1) {
            alert("Algo deu errado, contate a equipe");

          } else {

            limparTodosOsCampos()
            $("#myModal2").modal("hide");

          }

        }
      });
    });

  } else {

    getErros(estadoPaciente, unidadeDisponivel);

  }
}

function getErros(estadoPaciente, unidadeDisponivel) {

  if (estadoPaciente == "0")
    colorError("estadoPaciente", "estadoPacienteError");

  else
    removeCollorErrorEstadoPaciente()

  if (unidadeDisponivel == "0")
    colorError("unidadeDisponivel", "unidadeDisponivelError");
  else
    removeCollorErrorUnidadeDisponivel()
}

function colorError(idInput, idLabel) {
  $(`#${idInput}`).addClass("input-error")
  $(`#${idLabel}`).removeAttr("hidden").html("Selecione o campo acima para cadastrar.")
}

function removeCollorErrorEstadoPaciente() {
  $("#estadoPaciente").removeClass("input-error");
  $("#estadoPacienteError").attr("hidden", true).html("");
}

function removeCollorErrorUnidadeDisponivel() {
  $("#unidadeDisponivel").removeClass("input-error");
  $("#unidadeDisponivelError").attr("hidden", true).html("");
}


function addVariaveisFormData(nomeCompleto, dataNascimento, genero, estadoPaciente, tipoSanguineo, unidadeDisponivel) {
  const formData = new FormData()

  formData.append("nomeCompleto", nomeCompleto)
  formData.append("dataNascimento", dataNascimento)
  formData.append("genero", genero)
  formData.append("estadoPaciente", estadoPaciente)
  formData.append("tipoSanguineo", tipoSanguineo)
  formData.append("unidadeDisponivel", unidadeDisponivel)

  return formData
}

function limparTodosOsCampos() {
  $("#nomeCompleto").val("");
  $("#dataNascimento").val("");

  retornarOptionAoSelected("estadoPaciente")
  retornarOptionAoSelected("tipoSanguineo")

  $("#unidadeDisponivel").html('<option value="0" selected>Unidades Disponiveis</option>').attr("disabled", true)

}

function retornarOptionAoSelected(idSelect) {
  $(`#${idSelect} option`).each(function () {
    if (this.defaultSelected) {
      this.selected = true;
      return false;
    }
  })
}
