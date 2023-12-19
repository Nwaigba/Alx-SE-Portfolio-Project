<html>
   
<?php 

    $cars = array("Toyota","Benze","Range Rover","Bugatti","High Lander","Toyota Prado");

//     // echo count($cars);
//     $counter =0;
//     foreach ($cars as $cars) {
//         $counter ++;
//         // echo ($cars. "is a car. it's index position is". $counter."<br>");

//         echo ($counter. " " .$cars. "<br>");
//     }
// ?>
    <table border="1px" cellpadding="10px">
        <tr>
        <th>List Of Cars Available</th>
        </tr>
        <tr>
        <td> #</td>
        <td>cars</td>
        </tr>
        <?php
        $counter = 0;
        foreach ($cars as $car) {
            $counter ++;
            echo "<tr><td>".$counter."</td>
            <td>".$car."</td></tr>";
        }


        ?>

        <?php
        $date = date("M,Y,D : H i s a");
        echo $date

        ?>
    </table>
</html>