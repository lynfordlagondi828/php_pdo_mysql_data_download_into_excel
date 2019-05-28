<?php
    require_once 'include/Db_Function.php';
    $database = new Db_Function();

    $result = $database->get_all_records();

?>

<html>
    <head>
        <title>
            Download Record from Mysql Database into excel
        </title>
    </head>
<body>
     <h3>Download Record from Mysql Database into excel</h3>  
     <?php if(count($result)>0): ?>
        <table border="1">
            <tr>
                <th>BOOK ID</th>
                <th>BOOK NAME</th>
                <th>AUTHOR</th>
                <th>ISBN</th>
            </tr>
            <?php foreach($result as $res): ?>
                <tr>
                    <td><?php echo htmlentities($res["book_id"]); ?></td>
                    <td><?php echo htmlentities($res["book_name"]); ?>
                    <td><?php echo htmlentities($res["book_author"]); ?>
                    <td><?php echo htmlentities($res["book_isbn"]); ?>
                </tr>
            <?php endforeach ?>
        </table>
        <a href="export.php">Export to Excel</a>
     <?php else: ?>
        <p>No Record found</p>
     <?php endif ?>
</body>    
</html>