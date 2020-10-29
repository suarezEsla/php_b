
    <?php 
    
        $suma=0;
        $resta=0;
        $multi=0;
        $div=0;

        $n1=$_GET['num1'];
        
        $n2=$_GET['num2'];
        
        if ($_REQUEST['suma']=="on"){
           $suma= $n1+$n2;
           echo " <b>Suma ".$n1." + ".$n2." = ".$suma."</b>";

        }elseif($_REQUEST['resta']=='on'){
            $resta=$n1-$n2;
                echo " <b>Resta ".$n1." - ".$n2." = ".$resta."</b>";
    
        }elseif($_REQUEST['producto']=='on'){
            $multi=$n1*$n2;
            echo " <b>Producto ".$n1." * ".$n2." = ".$multi."</b>";
            
        }elseif($_REQUEST['division']=='on'){
            $div=$n1/$n2;
            echo " <b>División ".$n1." / ".$n2." = ".$div."</b>";
    
        }
           
            
        
            
                


    





    



?>















