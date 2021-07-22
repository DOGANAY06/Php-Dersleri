<!DOCTYPE html>
<html>
<head>
    <style>
    input{height:35px ; width: 70px;text-align: center;border-color: wheat;}
    input:hover{background-color: white;color:red;border-color: black;}
    body{text-align:center;background-color: lightpink;}
    #genelYapi{width: 900px;height: 600px;border : 1px solid lightpink;margin:auto;background-color: lightblue;border-radius: 15px;}
    #MatrisA{background-color: wheat;width :398px;height: 180px;border : 1px solid wheat;float:left;margin-top: 40px;margin-left: 50px;}
    #MatrisB{background-color: wheat;width :398px;height: 180px;border : 1px solid wheat;margin-right: 50px;margin-top:40px;float:right;}
    #toplama{float:left;border:1px solid lightblue;margin-top: 60px;margin-left:200px;width:120px;height:150px;background-color:wheat;border-radius: 25px;}
    #cikarma{float:right;border-style: solid;border-color:lightblue;width: 120px;height: 150px;margin-top: 60px;margin-right: 200px;background-color: wheat;border-radius: 25px;}
    #carpma{border-style: solid;border-color:lightblue;width: 120px;height: 150px;margin:auto;margin-top: 60px;background-color: wheat;border-radius: 25px;}
    </style>
</head>
    <body>
        <div id="genelYapi" >
            <form action=""  method="GET" style="text-align:center;">
                <div id="MatrisA">
                    A Matrisi <br><br>
                    <input type="number" name="sayi1" value=0>
                    <input type="number" name="sayi2" value=0>
                    <input type="number" name="sayi3" value=0><br>
                    <input type="number" name="sayi4" value=0>
                    <input type="number" name="sayi5" value=0>
                    <input type="number" name="sayi6" value=0><br>
                    <input type="number" name="sayi7" value=0>
                    <input type="number" name="sayi8" value=0>
                    <input type="number" name="sayi9" value=0><br><br>
                </div>
                <div id="MatrisB">
                    B Matrisi:<br><br>
                    <input type="number" name="sayi10" value=0>
                    <input type="number" name="sayi11" value=0>
                    <input type="number" name="sayi12" value=0><br>
                    <input type="number" name="sayi13" value=0>
                    <input type="number" name="sayi14" value=0>
                    <input type="number" name="sayi15" value=0><br>
                    <input type="number" name="sayi16" value=0>
                    <input type="number" name="sayi17" value=0>
                    <input type="number" name="sayi18" value=0><br>  <br>
                </div>
                <input type="submit" name="islembutonu" value="İslem" style="width:60px;height:40px;margin-top:20px;background-color:wheat;border-style:solid;margin-bottom: 30px;border-radius: 25px;" >

            </form>
            
            <?php
                
                $matris1=array
                (
                    array(0=>0,1=>0,2=>0),
                    array(0=>0,1=>0,2=>0),
                    array(0=>0,1=>0,2=>0)
                );
                $matris2=array
                (
                    array(0=>0,1=>0,2=>0),
                    array(0=>0,1=>0,2=>0),
                    array(0=>0,1=>0,2=>0) 
                );
                if(!isset($_GET["islembutonu"]))
                {
                    
                }
                else{
                //elemanlar alınacak
                    $i=0;
                    $u=0;
                    $sira=1;
                    for ($i=0; $i <3; $i++) 
                    { 
                        for ($u=0; $u <3; $u++)
                        {
                            $matris1[$i][$u]=$_GET["sayi".$sira];
                            $sira++;
                        }
                    }
                    for ($i=0; $i <3; $i++) 
                    { 
                        for ($u=0; $u <3; $u++)
                        {
                            $matris2[$i][$u]=$_GET["sayi".$sira];
                            $sira++;
                        }
                    }
                
                }
                //elemanları aldık
            ?>
            
            <div id="toplama">
                <h2>A+B</h2>
                <?php
                    
                    
                    for ($i=0; $i <3; $i++) 
                    { 
                        for ($u=0; $u <3; $u++)
                        {
                            echo ($matris1[$i][$u]+$matris2[$i][$u])." ";
                        }
                        echo "<br>";
                    }
                    //çıkarma
                
                ?>
                </div>
                    <div id="cikarma">
                        <h2>A-B</h2>
                        <?php
                            for ($i=0; $i <3; $i++) 
                            { 
                                for ($u=0; $u <3; $u++)
                                {
                                    echo ($matris1[$i][$u]-$matris2[$i][$u])." ";
                                }
                                echo "<br>";
                            }
                        //çarpma
                        ?>
                </div>
                <div id="carpma">
                    <h2>AxB</h2>
                    <?php
                        for ($i=0; $i <3; $i++) 
                        { 
                            for ($u=0; $u <3; $u++)
                            {
                                echo ($matris1[$i][$u]*$matris2[$i][$u])." ";
                            }
                            echo "<br>";
                        }
                ?>
                </div>
                    
        </div>
    </body>
</html>
