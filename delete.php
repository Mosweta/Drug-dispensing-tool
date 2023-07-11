<?php
function deleteUserAccount($username, $password, $isAdmin) {
    // Authenticate the administrator
    $adminUsername = "Owen Muchemi";
    $adminPassword = "Owen_100";

    if ($username === $adminUsername && $password === $adminPassword && $isAdmin) {
        // Authorized as administrator, perform the deletion logic
        // Replace this with your actual code to delete the user account
        // Example: deleteFromDatabase($username);
        echo "User account '$username' has been deleted.";
    } else {
        echo "Unauthorized access."; // Error message for unauthorized access
    }
}

function createUserAccount($username, $password, $isAdmin) {
    // Authenticate the administrator
    $adminUsername = "Owen Muchemi";
    $adminPassword = "Owen_100";

    if ($username === $adminUsername && $password === $adminPassword && $isAdmin) {
        // Authorized as administrator, perform the user creation logic
        // Replace this with your actual code to create the user account
        // Example: createUserInDatabase($username, $password);
        echo "User account '$username' has been created.";
    } else {
        echo "Unauthorized access."; // Error message for unauthorized access
    }
}

// Example usage:
deleteUserAccount("Tom Ndemo", "Ndemo_100", true); // Delete user account as administrator
createUserAccount("Joel", "Joel2023", true); // Create user account as administrator
?>
