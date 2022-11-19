document.addEventListener("DOMContentLoaded",function(){

        let button =document.getElementById("lookup");
        const result=document.getElementById("result");

        button.addEventListener("click",function(element){
        element.preventDefault();

        let data =document.querySelector("#country").value;

        fetch(`http://localhost/comp2245-assignment5/world.php?country=${data}`)

               .then(response => response.text())

               .then((data) => {result.innerHTML=data;})
               

               .catch ((error) =>console.log(error));
        });

//lookup cities button   
        let button2 =document.getElementById("lookupcities");

        button2.addEventListener("click", function(element){
            element.preventDefault();
            let data =document.querySelector("#country").value;
            fetch(`http://localhost/comp2245-assignment5/world.php?country=${data}&lookup=cities`)

            .then(response => response.text())

            .then((data) => {result.innerHTML=data;})
            

            .catch ((error) =>console.log(error));
            
        })

    
});