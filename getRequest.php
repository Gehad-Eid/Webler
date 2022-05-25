<script>
function ReturnDesc(req_id) {
  var req_id = req_id;
  $.ajax({
    url:"ReturnDesc.php",
    method:"GET",
    data:{req_id:req_id},
    success:function(d)
    {
        $("#displayText").css("opacity",1);
        $("#displayText").html(d[0].description);
    }
   });
}  


function Approve(req_id) {
    var req_id = req_id;
    $.ajax({
        url:"approveReq.php",
        method:"GET",
        data:{req_id:req_id},
        success:function(d)
        {
            if(d) {
                alert('Approved');
            }
            
        }
    });
}
function Decline(req_id) {
     var req_id = req_id;
    $.ajax({
        url:"declineReq.php",
        method:"GET",
        data:{req_id:req_id},
        success:function(d)
        {
           if(d) {
                alert('Approved');
            }
        }
    });
}
</script>
<style>
    #displayText {
        display: block;
        padding: 40px;
        background-color: beige;
        width: 20%;
        color: black;
        text-align: center;
        border-radius: 20px;
        opacity: 0;
        position: fixed;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        z-index: 999;
    }
    .tables {
        width: 100%;
        margin-left: -1%;
    }
</style>
<span id="displayText">-----</span>
<?php
require_once 'database.php';
    $service_lists = $connection->query("SELECT * FROM service");
    if ($service_lists->num_rows > 0) {
        while ($data = $service_lists->fetch_array()) {
            $service_name = $data['type'];
            echo '<div class="tables">

                    <table class="tablesort">
                        <caption>' . $service_name . '</caption>
                        <thead>
                            <tr>
                                <th>employee"s name - request"s ID</th>
                                <th>Status</th>
                                <th>Approved/Decline</th>

                            </tr>

                        </thead>';

            echo '<tbody>';
            $reqeusts = $connection->query("SELECT * FROM request  JOIN service on request.service_id = service.id");
            if ($reqeusts->num_rows > 0) {
                while ($data_2 = $reqeusts->fetch_array()) {
                    $type = $data_2['type'];
                        $re_id = 0;
                        $name = "";
                    if ($type == $service_name) {
                        $re_id = $data_2['0'];
                        $emp_id = $data_2['emp_id'];
                        $emp_info = $connection->query("SELECT * FROM employee WHERE id='$emp_id'")->fetch_array();
                        $name = $emp_info['first_name'] . ' ' . $emp_info['last_name'];
                        $description = $data_2['description'];
                        $status = $data_2['status'];
                        echo "<tr>
                                    <td>";
                        ?>
                        
<a href ='Request information.php?id=<?php echo $re_id ?>' onmouseover="ReturnDesc(<?php echo $re_id ?>)" ><?php echo  $name . " - " . $re_id; ?></a> 
                        <?php
                        echo "</td>
                                    <td>$status</td>";

                        if ($status == 'Approved') {
                            echo "<td>";
                            ?>
                                <a  class='no' onClick='Decline(<?php echo $re_id ?>)' >Decline</a>

                            <?php
                            echo "</td>";
                            
                        } elseif ($status == 'Decline') {
                             echo "<td>";
                            ?>
                                <a  class='yes' onClick='Approve(<?php echo $re_id ?>)' >Approve</a>
                            
                            <?php
                            echo "</td>";
                        } else {
                            echo "<td>";
                             ?>
                            <a class='yes' onClick='Approve(<?php echo $re_id ?>)' >Approve</a>
                            <a  class='no' onClick='Decline(<?php echo $re_id ?>)' >Decline</a>

                            <?php
                            echo "</td>";
                        }

                        echo "</tr>";
                    }
                }
            }

            echo "	</tbody>
                        </table>

                    </div>";
        }
    }
?>

<script>sort();</script>
