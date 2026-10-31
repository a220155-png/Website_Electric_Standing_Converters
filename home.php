<?php
ob_start();
?>

<div class="d-flex flex-column justify-content-center align-items-center text-center" style="min-height: 75vh;">
    <!-- Actual Logo Image in the center -->
    <div class="mb-4">
        <img src="images/logo.jpg" alt="UpSpace Logo" class="img-fluid" style="max-height: 120px; object-fit: contain;">
    </div>

    <!-- Company Name -->
    <h3 class="fw-bold mb-1">UpSpace</h3>

    <!-- Welcome Subtitle -->
    <p class="text-muted small">Welcome to the ordering system of UpSpace</p>
</div>

<?php
$content = ob_get_clean();
require_once 'layout.php';
?>