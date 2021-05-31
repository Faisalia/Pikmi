<?php

require 'config.php';

$id=$_GET["id"];

if(hapus($id) > 0) {
echo "
    <script>
        alert('Ide Anda berhasil dihapus!');
        document.location.href = 'idea.php';
    </script>
";
}
else
{
echo "
    <script>
        alert('Ide Anda gagal dihapus!');
        document.location.href = 'idea.php';
    </script>
";
}

?>