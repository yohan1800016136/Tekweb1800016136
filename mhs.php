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
        <tr>
            <td><b>NIM</b> </td>
            <td><?php echo $_POST["nim"]; ?></td>
        </tr>

        <tr>
            <td><b>Nama</b> </td>
            <td><?php echo $_POST["nama"]; ?></td>
        </tr>

        <tr>
            <td><b>Jenis kelamin</b></td>
            <td><?php echo $_POST["jk"]; ?></td>
        </tr>

        <tr>
            <td><b>Alamat</b> </td>
            <td><?php echo $_POST["alamat"]; ?></td>
        </tr>

        <tr>
            <td><b>Prodi</b></td>
            <td><?php echo $_POST["prodi"]; ?></td>
        </tr>

        <tr>
            <td><b>Bahasa pemrograman yang disukai</b></td>
            <td><?php echo $_POST["bhs"] ?></td>
        </tr>
    </table>
</body>

</html>