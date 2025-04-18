
function validatorPassword(){

   $('#confirmPassword').val();
   $('#newPassword').val();

   if($('#newPassword').val() !== $('#confirmPassword').val()){

     $('#newPassword').css('border-color',"red");
     $('#confirmPassword').css('border-color',"red");
     $('#msg').append('Senhas não conferem!');
   }else{
    
    $('#newPassword').css('border-color',"#ced4da");
    $('#confirmPassword').css('border-color',"#ced4da");
    $('#msg').html(' ');

     formData = new FormData();
     formData.append('password', $('#newPassword').val());


     fetch( urlBase+"updatePassword",{
        method:"POST",
        body:formData
     })
     .then((response) => response.json())
     .then((response)=>{

        if(response == "senha alterada"){
            alert("Senha Alterada com sucesso!")
            location.reload();
        }else{
            alert("Erro ao Alterar a senha !")
        }
        console.log(response)
     })


     
  }
}


function frontExport()
{
    $('#DataPersonalizada').click(function(){

      $('#formExport').html(' <input type="date" name="start"/> &nbsp &nbsp <input type="date" name="end"/> &nbsp &nbsp<button type="submit" class="btn btn-outline-success btn-sm">Exportar</button> </form>')

    })



    $('#DataAtual').click(function(){

      $('#formExport').html(`<input type="date"  name="start"/>&nbsp &nbsp<button type="submit" class="btn btn-outline-success btn-sm">Exportar</button></form>`)
     
    })

}




frontExport()