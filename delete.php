<?php
include "header.php";
include 'connection.php';
$sql = "delete from tbl_kitap where id=" . $_GET['id'];
mysqli_query($link, $sql);
?>
<center>
    
     <script type="text/javascript">
        window.location.href="display_books_info.php";
    </script>
</center>

<?php
include "footer.php";
?>


