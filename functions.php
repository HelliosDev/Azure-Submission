<?php
    function show_alert($message) {
        echo "
        <script>
            alert('$message');
            document.location.href = '../Pendaftaran/index.php';
        </script>
        ";
    }
?>