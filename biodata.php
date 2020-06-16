<html>

<head>
    <title>Output</title>
</head>
<style>
    table,
    td,
    tr {
        padding: 5px;
        border-collapse: collapse;
    }
</style>

<body>
    <table border="1" align="center">
        <tbody>
            <tr>
                <td><b>NIM</b> </td>
                <td><?php echo $_POST["nim"]; ?></td>
            </tr>

            <tr>
                <td><b>Nama</b> </td>
                <td><?php echo $_POST["nama"] . "  "; ?></td>
            </tr>

            <tr>
                <td><b>Jenis kelamin</b></td>
                <td><?php echo $_POST["kelamin"]; ?></td>
            </tr>

            <tr>
                <td><b>Prodi</b></td>
                <td><?php echo $_POST["prodi"]; ?></td>
            </tr>
        </tbody>
    </table>

</body>

</html>