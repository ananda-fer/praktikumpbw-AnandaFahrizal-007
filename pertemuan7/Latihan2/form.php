<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<style>
    body{
        font-family: Arial, sans-serif;
    }
    form{
        border: 2px solid #333;
        padding: 20px;
        width: 400px;
    }
</style>
<body>
    <form action="proses.php">
        <label for="">NPM: </label>
        <input type="text" name="npm" required><br><br>

        <label for="">Nama: </label>
        <input type="text" name="nama" required><br><br>

        <label for="">Prodi: </label>
        <input type="text" name="prodi" required><br><br>

        <label for="">Semester: </label>
        <select name="semester" id="">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
            <option value="14">14</option> 
        </select>
        <br><br>
        
        <label for="">Biaya UKT: </label>
        <input type="number" name="biaya_ukt" required><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>