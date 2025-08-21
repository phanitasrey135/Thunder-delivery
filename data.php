<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <title>Data order</title>
    <style>
        h4{
            text-align: center;
            margin-top: 20px;
           font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h4>Data have order</h4>
        <table class="table table-bordered table-hover">
            <tr>
                <th>Name</th>
                <th>Number Phone</th>
                <th>Food</th>
                <th>Adrees</th>
            </tr>
            <?php
                $con = new mysqli('localhost','root','','php_g1');
                $sql = "SELECT * FROM food";
                $result = $con->query($sql);
                while($col=$result->fetch_array()){
                    ?>
                           <tr>
                <td><?php echo $col[0] ?></td>
                <td><?php echo $col[1] ?></td>
                <td><?php echo $col[2] ?></td>
                <td><?php echo $col[3]?></td>
            </tr>
                    <?php
                }
            ?>
        </table>
    </div>
</body>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
        crossorigin="anonymous"></script>
</html>