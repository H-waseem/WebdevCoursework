<html>
    <head>
        <title>Testing connection to MySQL</title>
    </head>
    <body>
        <?php
            $db = new mysqli('smcse-stuproj00.city.ac.uk', 'adbs860', '200008213', 'adbs860');
            if ($db->connect_errno) {
            printf("Connection failed: %s\n", $db->connect_error);
            exit();
            } else {
            echo "Database connected successfully!";
            }
        ?>
    </body>
</html> 