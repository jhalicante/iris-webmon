<?php
    class IncidentReported
    {
        public function IRDetails($post)
        {
            global $conn;
             
            $sql = "SELECT
                        incident_reported.ir_id,
                        incident_reported.subject,
                        incident_reported.description,
                        incident_reported.ir_photo_id,
                        incident_reported.status,
                        incident_reported.created_date,
                        incident_reported.created_time,
                        user_accounts.user_id,
                        user_accounts.fname,
                        user_accounts.mname,
                        user_accounts.lname
                    FROM incident_reported
                    INNER JOIN user_accounts ON user_accounts.user_id = incident_reported.user_id
                    WHERE incident_reported.ir_id = '".$post['ir_id']."' ";
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0) {

                $photoData = array();

                $row = $result->fetch_assoc();
                $photoRes = $conn->query("SELECT photo_url,created_date FROM `incident_reported_attached_photo` WHERE `ir_id`='".$post['ir_id']."' ");
                if ($photoRes->num_rows > 0) {
                    while($photoRow = $photoRes->fetch_assoc()) {
                        $photoData[] = $photoRow;
                    }
                }
                array_push($row,$photoData);         
                echo json_encode(array('errorCode'=>0,'responseData'=>$row));
            } 
            else {
                echo json_encode(array('errorCode'=>304,'errorMsg'=>'No results found '.$sql));
            }
        }
    }
?>