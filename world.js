document.addEventListener("DOMContentLoaded",function(){

        let button =document.getElementById("lookup");

        button.addEventListener("click",function(element){
        element.preventDefault();

        let data =document.querySelector("#country").value;

        fetch(`http://localhost/comp2245-assignment5/world.php ${data}`)

               .then(response => response.text())

               .then((data) => document.write(`${data}`))
               

               .catch (error =>console.log(error));
        });


      

    
});