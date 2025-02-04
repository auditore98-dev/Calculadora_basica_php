const formCalculator=document.querySelector("#form-calculator");
formCalculator.addEventListener("submit",async(e)=>{
    e.preventDefault();
    const formData=new FormData(e.target);
    const response=await fetch("index.php",{
        method:'POST',
        body:formData
    });

    const result=await response.json();
    const resultado=document.querySelector("#result");

    
    if(result.error){
        resultado.innerHTML=`${result.error}`;
    }else{
        resultado.innerHTML=`El resultado es: ${result.resultado}`;
    }
    
    
});

