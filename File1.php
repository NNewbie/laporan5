<!DOCTYPE html>
<html>
<head><title></title></head>
<body>
<form action="fibonacci.php" method="post">
    <table>
        <tr>
            <td>Username
            <td>:<input type="text" name="username">
        </tr>
        <tr>
            <td>Pilihan
            <td>:<select name="metode">
                    <option value="fibbonaci">fibbonaci
                    <option value="Ganjil">Ganjil
                    <option value="Genap">Genap
                </select>
        </tr>
        <tr>
            <td><input type="submit" name="submit" value="simpan">
        </tr>
    </table>
</form>
</body>
</html>