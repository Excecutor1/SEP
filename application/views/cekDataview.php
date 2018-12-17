<?php
if (is_array($hasil) || is_object($hasil))
{
    foreach ($hasil as $row)
    {
        echo  "aerger".$row['id_berkas'];
    }
}
?>