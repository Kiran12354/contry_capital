<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div id="container">
            
        </div>
        
        <script>
        const container=document.querySelector('#container');
        const request=new XMLHttpRequest();
        request.open('GET',"https://restcountries.eu/rest/v2/name/usa");
        request.send();
        
        //to get response
        
        request.addEventListener('load',function(){
            
            const [data]=JSON.parse(this.responseText);
            console.log(data);
            
            const htmlData=`
            
        
  <div class="card" style="width:400px">
  <div class="card-body">
      <h2>Country: ${data.name}</h2>
      <p>Capital: ${data.capital}</p>
      <h3>flag</h3>
      <img class="card-img-top" src="${data.flag}" alt="Card image" height="150" width="150">
      <h4 class="card-title">Population</h4>
      <p class="card-text">${data.population}</p>
  </div>
  </div>
  
        
        
        `;
        
        container.insertAdjacentHTML("afterbegin",htmlData);
        });
        </script>
    </body>
</html>
