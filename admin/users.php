<?php
include ("header.php");

?>
<div class="col-xs-12 col-sm-11 col-md-11 no-padding main-title">
    <h3>users</h3>
</div>
<div class="col-xs-12 col-sm-11 col-md-11">
    <div class="db-contents">
        <h3>user's account details</h3>
        <table>
            <tr></tr>
                <th>user id</th>
                <th>first name</th>
                <th>last name</th>
                <th>email</th>
                <th>password</th>
                <th>date of birth</th>
                <th>phone number</th>
                <th>gender</th>
                <th>hash code</th>
                <th>active</th>
                <th>delete</th>
            </tr>
        <?php
            include("../config/config.php");
            include("../config/init.php");
            
            if(isset($_GET["mode"])){
                $mode = $_GET["mode"];
                if($mode == "del"){
                    $id = $_GET["id"];
                    $result = $mysqli->query("DELETE FROM users WHERE user_id = '$id'");
                }
                if($result){
                    echo "<p>1 row deleted.</p>";
                }
            }

            function displayData($result)
            {
                while ($row = $result->fetch_assoc()) {
                    print "<tr >";
                        print "<td>".$row["user_id"] . "</td>";
                        print "<td>".$row["firstname"] . "</td>";
                        print "<td>".$row["lastname"] . "</td>";
                        print "<td>".$row["email"] . "</td>";
                        print "<td>".$row["password"] . "</td>";
                        print "<td>".$row["dob"] . "</td>";
                        print "<td>".$row["phonenumber"] . "</td>";
                        print "<td>".$row["gender"] . "</td>";
                        print "<td>".$row["hash"] . "</td>";
                        print "<td>".$row["active"] . "</td>";
                        print "<td><a onclick='return confirmDel()' href=?mode=del&id=".$row['user_id'].">delete</a></td>";
                    print "</tr>";
                }
            }
            //Select Data
            $result = $mysqli->query("SELECT * FROM users");
            displayData($result);
        ?>
    </div>
</div>
<?php
include ("footer.php");
?>
