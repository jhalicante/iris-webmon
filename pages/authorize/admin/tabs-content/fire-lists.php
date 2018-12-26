<div class="table-wrap">
    <table 
        data-toggle="table" 
        data-buttons-class='default btn-sm btn-outline' 
        data-pagination="true"
        data-search="true"   
        data-show-columns="true"
        data-show-print="true"
        data-mobile-responsive="true" 
        data-sort-order="desc" 
        data-show-toggle="true" 
        data-click-to-select="true"
        class="table  table-reponsive table-hover">
        <thead>
            <tr>
                <th data-sortable="true"> # </th>
                <th data-sortable="true"> IR ID </th>
                <th data-field="subject"> Person </th>
                <th data-sortable="true"> subject </th>
                <th data-width="300" data-sortable="false"> Description </th>
                <th data-sortable="true"> Date Reported </th>
                <th data-sortable="true"> Action</th>
            </tr>
        </thead>
        <tbody id="fire-list-table">
        <?php
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
                user_accounts.lname,
                user_accounts.contact_number
            FROM
                incident_reported
            INNER JOIN user_accounts ON user_accounts.user_id = incident_reported.user_id
            WHERE incident_reported.incident_type = 'fire'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $ir_no = 1;
                while($row = $result->fetch_assoc()) {
                    $row['date_reported'] = $row['created_date'].' '.$row['created_time'];

                    // Cut the string if succeeded to the limit of 20 characters
                    // if( strlen($row['description']) >= 20 ) {
                    //     $row['description'] = ;
                    // }
            ?>
            <tr>
                <td> <?php echo $ir_no++; ?> </td>
                <td> <?php echo $row['ir_id']; ?> </td>
                <td> <?php echo $row['fname'].' '.$row['mname'].' '.$row['lname']; ?> </td>
                <td> <?php echo $row['subject']; ?> </td>
                <td> <?php echo $row['description']; ?> </td>
                <td> <?php echo $row['date_reported']; ?> </td>
                <td> 
                    <button class="btn text-primary btn-link view-details" ir-id="<?php echo $row['ir_id']; ?>">View Details</button>
                </td>
            </tr>
            <?php
                }
            }
        ?>
        </tbody>
    </table>
</div>	