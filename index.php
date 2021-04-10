<!DOCTYPE html>
<html>
<body>

<?php
echo "Welcome to PHP";
?>
  <form method="POST" action="submit.php">
    <p><label for="licencePlate">Licence Plate:</label>
        <input type="text" name="licencePlate" size="40" />
    </p>
    <p><label for="brand">Brand:</label>
        <input type="text" name="brand" size="40" />
    </p>
    <p><label for="model">Model:</label>
        <input type="text" name="model" size="40" />
    </p>
    <p><label for="modelYear">Model Year:</label>
        <input type="date" name="modelYear" size="40" />
    </p>
    <p><label for="color">Color:</label>
        <input type="text" name="color" size="40" />
    </p>
    <input type="submit" />

</form>
</body>
</html>