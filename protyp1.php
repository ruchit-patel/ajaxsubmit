<?php
$brand=$_GET['brand'];
$c1=array('--Select Program Type--','BBA','BCA','BBA-LLB','MBA','Msc-IT','MHRM');
$c2=array('BTech');
$c3=array('--Select Program Type--','BArch','BDesign','BLAD');
$c4=array('--Select Program Type--','Bsc+','Bsc.Msc(BS-CMB)','BA(J&MC)','BEd','Msc(Chem)','Msc(LS)','MSW','MEd','ECCE');
if($brand=="School Of Business and Law")
{
    foreach($c1 as $c)
    {
        print "<option>$c</option>";
    }
}
else if($brand=="School Of Engineering and Technology")
{
    foreach($c2 as $c)
    {
        echo "<option>$c</option>";
    }
}
else if($brand=="School Of Environmental Design and Architecture")
{
    foreach($c3 as $c)
    {
        echo "<option>$c</option>";
    }
}
else if($brand=="School Of Libral Studies and Education")
{
    foreach($c4 as $c)
    {
        echo "<option>$c</option>";
    }
}
else 
{
    echo "<option>Select the School first</option>";
}
?>