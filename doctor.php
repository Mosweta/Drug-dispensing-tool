<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="process_form.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>


        <input type="submit" value="Submit">
    </form>
    Create the server-side script (e.g., process_form.php):

    Create a new PHP file (e.g., process_form.php).
    Define a class for your database connection and data insertion.
    Create an instance of the class and call the necessary methods to handle the form data.
    Here's an example of how the PHP script might look:

    php
    Copy code
    <?php
    // Database connection class
    class DatabaseConnection
    {
        private $host;
        private $username;
        private $password;
        private $database;
        private $connection;

        public function __construct($host, $username, $password, $database)
        {
            $this->host = $host;
            $this->username = $username;
            $this->password = $password;
            $this->database = $database;
            $this->connect();
        }

        private function connect()
        {
            $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);
            if ($this->connection->connect_error) {
                die("Database connection failed: " . $this->connection->connect_error);
            }
        }

        public function insertData($name, $email)
        {
            $name = $this->connection->real_escape_string($name);
            $email = $this->connection->real_escape_string($email);

            $query = "INSERT INTO your_table (name, email) VALUES ('$name', '$email')";
            $result = $this->connection->query($query);

            if ($result) {
                echo "Data inserted successfully.";
            } else {
                echo "Error: " . $this->connection->error;
            }
        }

        public function __destruct()
        {
            $this->connection->close();
        }
    }

    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];

    // Create database connection and insert data
    $dbConnection = new DatabaseConnection('your_host', 'your_username', 'your_password', 'your_database');
    $dbConnection->insertData($name, $email);
    ?>
    Upload the HTML and PHP files to a web server:

    Save the HTML file with the .html extension.
    Save the PHP file with the .php extension.
    Upload both files to a web server that supports PHP.
    When a user submits the form, the data will be sent to the process_form.php script. The script will create an instance of the DatabaseConnection class, establish a database connection, and insert the form data into the specified database table. Make sure to replace the placeholders (your_host, your_username, your_password, your_database, your_table) in the PHP script with your actual database details.

    Using an object-oriented approach allows for better organization and reusability of code. It also enables you to extend the functionality of the class in the future if needed. Remember to validate and sanitize user input to ensure the security of your application.







</body>

</html>