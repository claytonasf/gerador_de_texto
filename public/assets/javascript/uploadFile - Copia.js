

// function checkError(){
    
//   const count =  $('.countError #count').text();

//     if(count >0){

//           fetch('http://localhost/chatgpt/errorText',{
//             method: 'GET'
//         })
//         .then(response => response.json() )

//         .then( function(data){ 
//               const error = data['id_project'];
//               data.map(function(item){
//                 console.log(item['keyword']);
//               });

              
//           })
//      }

// }


 function uploadFile(){

    const fileInput = document.getElementById('csvFile');
    const file = fileInput.files[0];

    
     Papa.parse(file);

       
    // Convert back to CSV


     Papa.parse(file, {
        complete: function(results) {
      
              requestApi(results.data)

        }

    });
  

}


function pausa(segundos) {
  return new Promise(resolve => {
    setTimeout(resolve, segundos * 1000);
  });
}

async function requestApi(results) {

var arrayResults = [];

var arrayErros = [];

    startTyped();
    $('.loding').css('display','flex');
    $('.form').hide();


    for(var i=0; i <= results.length-1; i++){


      if(results[i].length  > 1){

          var formData = new FormData();
          formData.append('info', results[i]);

        //  console.log( results[i].length)
         $('#lodingKeyword').html(results[i][1])
         $('#countKeyword').html(i-1)

         

      //  setInterval(()=>{console.log("Iniciado")},30000)
          if(i >0){
            await pausa(18);
          }
            

        const api = await fetch( urlBase+'textGenerate', {
            method: 'POST',
            body: formData,
          })
            .then((response) => response.json())
            .then((data) => {
     
             
              if(data[3].includes('Erro ao gerar:')){
                  var arrayDuplicate = hasDuplicateSubarrays(results)
                  console.log(arrayDuplicate)

                   if(arrayDuplicate < 1 ){
                         console.log(arrayDuplicate)

                        console.log("Duplicado "+ data[2])
                        results.push(data);
                        console.log(results)
                       
                     }
                 
          
               }


                if(data[3].includes('Erro ao gerar:') == false || arrayDuplicate >=1 ){
                     arrayResults.push(data);
                }

             

            });
          
          }
       

    }





    gerarCSV(arrayResults);

    return arrayResults;

  }








  function hasDuplicateSubarrays(array) {
    var  count = 0;
    for (var i = 0; i < array.length - 1; i++) {
      for (var j = i + 1; j < array.length; j++) {
        if (JSON.stringify(array[i]) === JSON.stringify(array[j])) {
          count++; // Encontrou um subarray igual
        }
      }
    }
    return count; // Não encontrou subarrays iguais
  }


   function gerarCSV(results){
     
  

            
            $('.loding').css('display','none');
            $('.form').show();

            var csvContent = Papa.unparse(results);
             console.log(csvContent);

               var blob = new Blob([csvContent], { type: "text/csv;charset=utf-8;" });
            
              var csvUrl = URL.createObjectURL(blob);
              var downloadLink = document.createElement('a');

              downloadLink.href = csvUrl;
             downloadLink.download = 'data.csv';
             document.body.appendChild(downloadLink);
             downloadLink.click();
           
             $('.form').show();


   }

  
 
function startTyped() {
  var typed = new Typed('#element', {
    strings: ['<strong>Relaxa aí</strong>, não precisa se preocupar! Estamos trabalhando duro para criar os textos que você precisa. Enquanto isso, que tal dar uma pausa e tomar um cafezinho? Fica tranquilo que cuidaremos de tudo por aqui<br>Fique atento! O download será iniciado automaticamente em breve.. 😉'],
    typeSpeed: 50, 
});

}






// Chama a função startTyped para iniciar o loop



 