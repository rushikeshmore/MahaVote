function myError(){
    var msg=document.getElementById("msg");
    var x=document.getElementById("adhar").value;                

    try{
        if(x == "") throw " Please Enter Aadhar Number";
        if(isNaN(x)) throw " Invalid Aadhar Number";
        if(!x.match("^[0-9]{10,12}$")) throw " Invalid Number"
    }
    catch(err){
        msg.innerHTML = err;
    }
    finally{
        document.getElementById("adhar").value="";
    }
}

function regDetail(){
    var fullnamemsg=document.getElementById("fullNameMsg");
    var x=document.getElementById("fullName").value;
    try{
        if(x=="") throw "Enter full name";
        if(isNaN(x)) throw "Invalid Name";
        if(x.match("/^[a-z,',-]+(\s)[a-z,',-]+$/i")) throw "Invalid";
    }
    catch(err){
        fullnamemsg.innerHTML = err;
    }
    
    var fathername=document.getElementById("fatherNameMsg");
    var x=document.getElementById("fatherName").value;
    try{
        if(x=="") throw " Enter Father Name";
        if(isNaN(x)) throw " Invalid Father Name";
        if(!x.match("/^[a-z,',-]+(\s)[a-z,',-]+$/i")) throw "Invalid";
    }
    catch(err){
        fathername.innerHTML=err;
    }
    
    
}
function reference(){
    var x = document.getElementById("ref");
    x.innerHTML = Math.floor((Math.random() * 100) + 1);
}