function fetchp(str)
{
    var req=new XMLHttpRequest();
    req.open("get","http://localhost/AWT2/prot.php?strm="+str,true);
    req.send();

    req.onreadystatechange=function(){
        if(req.readyState==4 && req.status==200)
        {
            document.getElementById("prg").innerHTML=req.responseText;
        }
    };
}
function fetchp1(str)
{
    var req1=new XMLHttpRequest();
    req1.open("get","http://localhost/AWT2/prot.php?strm="+str,true);
    req1.send();

    req1.onreadystatechange=function(){
        if(req1.readyState==4 && req1.status==200)
        {
            document.getElementById("prg1").innerHTML=req1.responseText;
        }
    };
}
function fetchp2(str)
{
    var req2=new XMLHttpRequest();
    req2.open("get","http://localhost/AWT2/prot.php?strm="+str,true);
    req2.send();

    req2.onreadystatechange=function(){
        if(req2.readyState==4 && req2.status==200)
        {
            document.getElementById("prg2").innerHTML=req2.responseText;
        }
    };
}
function fetchp3(str)
{
    var req3=new XMLHttpRequest();
    req3.open("get","http://localhost/AWT2/prot.php?strm="+str,true);
    req3.send();

    req3.onreadystatechange=function(){
        if(req3.readyState==4 && req3.status==200)
        {
            document.getElementById("prg3").innerHTML=req3.responseText;
        }
    };
}