<?php
 include("header.php");
?>
<div class="col-xs-12 col-sm-11 col-md-11 no-padding main-title">
    <h3>contact us</h3>
</div>
<div class="col-xs-12 col-sm-11 col-md-11">
    <div class="db-contents">
        <h3>contact us details</h3>
        <table>
            <tr></tr>
                <th>contact id</th>
                <th>contact name</th>
                <th>contact email</th>
                <th>contact message</th>
                <th>delete</th>
            </tr>
        <?php

        require_once '../include/classes/class.admin.php';
        $admin=new ADMIN;
            
            
            if(isset($_GET["mode"])){
                $mode = $_GET["mode"];
                if($mode == "del"){
                    $id = $_GET["id"];
                    $result = $admin->runQuery("DELETE FROM contactus WHERE contact_id = '$id'");
                    $result->execute();
                }
                if($result){
                    echo "<p>1 row deleted.</p>";
                }
            }

            function displayData($result)
            {
                while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                    print "<tr >";
                        print "<td>".$row["contact_id"] . "</td>";
                        print "<td>".$row["name"] . "</td>";
                        print "<td>".$row["email"] . "</td>";
                        print "<td>".$row["message"] . "</td>";
                        print "<td><a onclick='return confirmDel()' href=?mode=del&id=".$row['contact_id'].">delete</a></td>";
                    print "</tr>";
                }
            }

            try{
                $result = $admin->runQuery("SELECT * FROM contactus");
                $result->execute();
                displayData($result);
            }catch(PDOException $ex){
                echo $ex->getMessage();
            }
            
        ?>
    </div>
</div>
<?php
include("footer.php");
?>
