<?php
require_once('dateMenu.php');
?>
<?php
function topmenu($menu, $x=1){
    if ($x == 1) {
        $url = $_SERVER["REQUEST_URI"];
        echo "<div class=\"menu\">";
        echo "<ul class=\"menu bounce\">";
        foreach ($menu as $key => $value) {
            echo "<li><a href=$value>$key</a></li>";
        }
//
        echo "</ul>";
        echo "</div>";
    }

        else{
            echo "<ul>";
            foreach ($menu as $key => $value) {
            echo "<li><a href=$value>$key</a></li>";
            }
            echo "</ul>";
        }


}?>



