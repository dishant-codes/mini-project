<div class="donor">
    <h1>Donors</h1>

    <button id="modalBtn" class="add-new-donor">
        Add New Donor
    </button>
    <div class="donor-table">
        <?php
        include '_dbconnect.php';

        $sql =  "Select * from donor";

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
                    <th>Mobile number</th>
                    <th>Email Id</th>
                    <th>Medical History</th>
                    <th>City</th>
                    <th>Action</th>
                </tr>';

        while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];
            $name = $row['FullName'];
            $Mobno = $row['MobileNumber'];
            $email = $row['EmailID'];
            $history = $row['History'];
            $city = $row['City'];
            $BloodType = $row['BloodType'];

            echo ("<tr>
            <td>$name</td>
            <td>$BloodType</td>
            <td><a href='tel:+91$Mobno'>$Mobno</a></td>
            <td>$email</td>
            <td>$history</td>
            <td>$city</td>
            <td><a href='./components/_delete.php?id=$id' class='delete-btn'>delete</a></td>
          </tr>");
        }

        echo '</table>';
        mysqli_close($conn); ?>
        <br>
        <div id="simpleModal" class="modal">
            <form class="login-form modal-content" style="margin: 0px auto;"
                action="./components/_handleRegiter.php?admin=true" method="POST">
                <span id="closeBtn" class="closeBtn">X</span>
                <h2>Donor Form</h2>
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
                    <input class="form-input" type="number" min="18" max="60" placeholder="Your Age" name="age"
                        required>
                    <span class="focus-border"></span>
                </div>
                <div class="input-box">
                    <select name="blood-type" class="form-input" id="">
                        <option selected disabled>Select Blood type</option>
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
                <div class="input-box">
                    <input class="form-input" type="email" placeholder="E-mail Id." name="email" required>
                    <span class="focus-border"></span>
                </div>
                <div class="input-box msg">
                    <input class="form-input" type="text" placeholder="City" name="city" required>
                    <span class="focus-border"></span>
                </div>
                <div class="input-box msg">
                    <label for="message">Medical History</label>
                    <textarea class="message" style="resize: vertical;" placeholder="Till us something about you..."
                        name="history" required></textarea>
                    <span class="focus-border"></span>
                </div>
                <button type="submit" class="btn-s">Register</button>
            </form>
        </div>
    </div>
</div>