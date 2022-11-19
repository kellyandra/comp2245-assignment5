document.addEventListener("DOMContentLoaded",function(){

        let button =document.getElementById("lookup");
        const result=document.getElementById("result");

        button.addEventListener("click",function(element){
        element.preventDefault();

        let data =document.querySelector("#country").value;

        fetch(`http://localhost/comp2245-assignment5/world.php ${data}`)

               .then(response => response.text())

               .then((data) => {result.innerHTML=data;})
               

               .catch ((error) =>console.log(error));
        });


      

    
});