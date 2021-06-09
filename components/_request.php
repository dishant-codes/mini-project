<div class="request">
    <h1>Requests</h1>
    <button id="modalBtn" class="add-new-donor">
        Create a new request
    </button>
    <div class="blood-request-table">
        <h2>Blood Requests</h2>
        <?php
        include '_dbconnect.php';

        $sql = "SELECT * FROM request";

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
        <th>BloodType</th>
        <th>Requested For</th>
        <th>Mobile number</th>
        <th>Email Id</th>
        <th>Message</th>
        <th>City</th>
        <th>Action</th>
        </tr>';

        while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];
            $name = $row['FullName'];
            $Mobno = $row['MobileNumber'];
            $email = $row['EmailID'];
            $history = $row['Message'];
            $city = $row['City'];
            $BloodType = $row['BloodType'];
            $RequestedFor = $row['RequestedFor'];

            echo ("<tr>
            <td>$name</td>
            <td>$BloodType</td>
            <td>$RequestedFor</td>
            <td><a href='tel:+91$Mobno'>$Mobno</a></td>
            <td>$email</td>
            <td>$history</td>
            <td>$city</td>
             <td><a href='./components/_deleteRequest.php?id=$id' class='delete-btn'>delete</a></td>
            </tr>");
        }

        echo '</table>';

        ?>
    </div>

    <div id="simpleModal" class="modal">
        <form class="login-form modal-content" style="margin: 0% auto;"
            action="./components/_handleRequest.php?admin=true" method="POST">
            <span id="closeBtn" class="closeBtn">X</span>
            <h2>Request Form</h2>
            <hr width="70%">
            <div class="input-box ">
                <input class="form-input" type="text" placeholder="Full name" name="name" required>
                <span class="focus-border"></span>
            </div>
            <div class="input-box">
                <input class="form-input" maxlength="10" type="text" placeholder="Mobile Number" name="Mobnumber"
                    required>
                <span class="focus-border"></span>
            </div>
            <div class="input-box">
                <input class="form-input" type="number" min="18" max="60" placeholder="Your Age" name="age" required>
                <span class="focus-border"></span>
            </div>
            <div class="input-box">
                <input class="form-input" type="email" placeholder="E-mail Id." name="email" required>
                <span class="focus-border"></span>
            </div>
            <div class="input-box msg">
                <input class="form-input" type="text" placeholder="City" name="city" required>
                <span class="focus-border"></span>
            </div>
            <div class="input-box">
                <select name="requestFor" class="form-input" id="">
                    <option selected disabled>Request for</option>
                    <option value="Blood">Blood</option>
                    <option value="Plasma">Plasma</option>
                </select>
            </div>
            <div class="input-box">
                <select name="blood-type" class="form-input" id="">
                    <option selected disabled>Required Blood Group</option>
                    <option value="A+">A+</option>
                    <option value="B+">B+</option>
                    <option value="O+">O+</option>
                    <option value="AB+">AB+</option>
                    <option value="A-">A-</option>
                    <option value="B-">B-</option>
                    <option value="O-">O-</option>
                    <option value="AB-">AB-</option>
                </select>
            </div>
            <div class="input-box msg">
                <label for="message">Message</label>
                <textarea class="message" style="resize: vertical;" placeholder="Till us something about patient..."
                    name="message" required></textarea>
                <!-- <span class="focus-border"></span> -->
            </div>
            <button type="submit" class="btn-s">Make a Request</button>
        </form>
    </div>
</div>


</div>