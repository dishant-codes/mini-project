<div class="contact">
    <h1>Contacts</h1>

    <div class="donor-table">
        <?php
        include '_dbconnect.php';

        $sql =  "Select * from contacts";

        $result = mysqli_query($conn, $sql);

        if (!$result) {
            echo 'No Records found!';
            exit();
        }

        $numRows = mysqli_num_rows($result);

        if ($numRows == 0) {
            echo 'No Records found!';
            exit();
        }

        echo '<table>
                <tr>
                    <th>Name</th>
                    <th>Mobile number</th>
                    <th>Email Id</th>
                    <th>Message</th>
                    <th>Action</th>
                </tr>';

        while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];
            $name = $row['name'];
            $Mobno = $row['mobile'];
            $email = $row['email'];
            $message = $row['message'];

            echo ("<tr>
            <td>$name</td>
            <td><a href='tel:+91$Mobno'>$Mobno</a></td>
            <td>$email</td>
            <td>$message</td>
            <td><a href='./components/_deleteContacts.php?id=$id' class='delete-btn'>delete</a></td>
          </tr>");
        }

        echo '</table>';

        mysqli_close($conn);
        ?>
    </div>
</div>