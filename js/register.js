//Faz a imagem ativa a propriedade click do input type="file"
$("#upfoto").click(function () {
    $("#userfoto").trigger('click');
});

//Exibir a imagem do usuario
$(function () {
    $('#userfoto').change(function () {
      const file = $(this)[0].files[0]
      const fileReader = new FileReader()
      fileReader.onloadend = function () {
        //$('#foto').attr('src', fileReader.result)
        $('.ch-img').css("background-image", "url(" + fileReader.result + ")");
       /*  $('#upfoto').removeClass('ch-itemError').addClass('ch-item'); */
      }
      fileReader.readAsDataURL(file);
    })
  });