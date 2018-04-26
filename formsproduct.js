function fetchptype(str)
{
    var req=new XMLHttpRequest();
    req.open("get","http://localhost/AWT2/Login/protyp1.php?brand="+str,true);
    req.send();
    
    req.onreadystatechange=function(){
        if(req.readyState==4 && req.status==200)
        {
            document.getElementById("prg").innerHTML=req.responseText;
        }
    };
}