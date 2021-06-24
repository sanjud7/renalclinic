document.getElementById ("admin").addEventListener ("click", addadmin, false);
document.getElementById ("doctor").addEventListener ("click", adddoc, false);
document.getElementById ("staff").addEventListener ("click", addstaff, false);





var x=0;
var y=0;
var z=0;






function addadmin() {
   
    if(x==0)
    {
     
    document.getElementById("myForm").style.display = "block";
    document.getElementById("info").innerHTML="";
    
    }
    if(x==0){
        document.getElementById ("cut").addEventListener ("click", closemyform, false);
        function closemyform(){
            
        document.getElementById("myForm").style.display = "none";
    
        document.getElementById("info").innerHTML="100+ Patients registered today";
        }

    }
    
}

function adddoc() {


    if(y==0)
    {
     
    document.getElementById("myForm2").style.display = "block";
    document.getElementById("info").innerHTML="";
    
    }
    if(y==0){
        document.getElementById ("cut2").addEventListener ("click", closemyform, false);
        function closemyform(){
            
        document.getElementById("myForm2").style.display = "none";
        
        document.getElementById("info").innerHTML="100+ Patients registered today";
        }

    }
    
}


function addstaff() {

    if(z==0)
    {
     
    document.getElementById("myForm3").style.display ="block";
    
    document.getElementById("info").innerHTML="";

    }
    if(z==0){
        document.getElementById ("cut3").addEventListener ("click", closemyform, false);
        function closemyform(){
            
        document.getElementById("myForm3").style.display = "none";

    
        document.getElementById("info").innerHTML="100+ Patients registered today";
        }

    }

}
 






