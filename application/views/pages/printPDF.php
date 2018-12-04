<?php
    $file = 'test.pdf';
    $filename = 'test.pdf';
    header('content-type: application/pdf');
    header('content-Disposition: inline; filename="' . $filename .'"');
    header('content-Transfer-Encoding: binary');
    header('Accept-Ranges: bytes');
    @readfile($file);
?>