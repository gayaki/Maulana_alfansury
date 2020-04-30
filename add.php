<html>
<body>
    <a href="index.php">Penambahan Mahasiswa</a>
    <br/><br/>

    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Name</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr> 
                <td>NPM</td>
                <td><input type="text" name="NPM"></td>
            </tr>
            <tr> 
                <td>Kelas</td>
                <td><input type="text" name="Kelas"></td>
            </tr>
            <tr> 
                <td>Jurusan</td>
                <td><input type="text" name="Jurusan"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>

    <?php

    if(isset($_POST['Submit'])) {
        $name = $_POST['name'];
        $NPM = $_POST['NPM'];
        $Kelas = $_POST['Kelas'];
        $Jurusan = $_POST ['Jurusan'];
       
        include_once("config.php");


        $result = mysqli_query($mysqli, "INSERT INTO Mahasiswa(name,Kelas,NPM,Jurusan) VALUES('$name','$Kelas','$NPM','$Jurusan')");

  
        echo "User added successfully. <a href='index.php'>View Mahasiswa</a>";
    }
    ?>
</body>
</html>