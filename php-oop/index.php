    <?php 
    require_once("animal.php");
    require_once("frog.php");
    require_once("Ape.php");

    $mbee = new animal("shaun");
    echo "name : " . $mbee->name .  "<br>";
    echo "legs : " . $mbee->legs .  "<br>";
    echo "cold blooded : " . $mbee->cold_blooded .  "<br>";
    echo "<br> <br>";
    
    
    $bangkong = new frog("buduk");
    echo "name : " . $bangkong->name .  "<br>";
    echo "legs : " . $bangkong->legs .  "<br>";
    echo "cold blooded : " . $mbee->cold_blooded .  "<br>";
    echo "jump : ";
    $bangkong->jump();
    echo "<br> <br>";
    

    $singkong = new Ape ("keraaaa");
    echo "name : " . $singkong->name .  "<br>";
    echo "legs : " . $singkong->legs .  "<br>";
    echo "cold blooded : " . $mbee->cold_blooded .  "<br>";
    echo " yell : ";
    $singkong->yell();  
    echo "<br> <br>";
    
    

    
    
    
    ?>