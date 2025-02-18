function fonction(){

    // console.log(document.getElementById("Nombre").value + document.querySelector('input[name="pair"]:checked').value);

    var xhr = new XMLHttpRequest();
  
    xhr.onreadystatechange  = function() 
    { 
       if(xhr.readyState  == 4){
        if(xhr.status  == 200) {
            var retour = JSON.parse(xhr.responseText);
            var resultat = document.getElementById("dyn");
	
            resultat.value = retour[0].Nom;
        } else {
            document.dyn="Error code " + xhr.status;
        }
		}
    }; 
  //XMLHttpRequest.open(method, url, async)
   xhr.open("GET", "generer.php",  false); 
   
   //XMLHttpRequest.send(body)
   xhr.send(null);

}