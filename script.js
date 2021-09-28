var userName=document.getElementById("userName");
var password=document.getElementById("password");
var submitButton=document.getElementById("submit_button");



submitButton.onclick=validate();


function validate(){
    if(userName.value=="covid" && password.value=="Vaccinated"){
        alert("certificate Downloaded Successfully!");
    }else if(userName.value.length<1 || password.value.length<1){
        alert("Fill the User Name and Password properly!");
    }else{
        alert("Incorrect User Name and Password!");
    }
}