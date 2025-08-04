<table>
    <tr>
        <?php
        // Display column headers dynamically, excluding the 'pswd' column
        if (!empty($users)) {
            foreach (array_keys($users[0]) as $column) {
                if ($column !== 'pswd') { // Skip the 'pswd' column
                    echo "<th><p>" . htmlspecialchars($column) . "</p></th>";
                }
            }
        }
        ?>
    </tr>

    <?php
    // Display user data, excluding the 'pswd' column
    if (!empty($users)) {
        foreach ($users as $user) {
            echo "<tr>";
            foreach ($user as $key => $value) {
                if ($key === 'id') {
                    $idvalue = $value; // Store the ID to construct the image path
                }
                if ($key === 'profilepic') {
                    // Add the profile picture in a separate cell
                    echo "<td><img src='../uploads/Profile" . htmlspecialchars($idvalue) . ".png' alt='Profile Picture'></td>";
                }
                if ($key !== 'pswd' && $key !== 'profilepic') { // Skip the 'pswd' and 'profilepic' columns
                    echo "<td><p>" . htmlspecialchars($value) . "</p></td>";
                }
            }
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='100%'>No users found</td></tr>";
    }
    ?>
</table>
