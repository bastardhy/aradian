<?php
session_start();
if (isset($_SESSION["name"])) {
                                          header("location:index.html");
} else {
                                          echo "<script>alert('Welcome, Please click here to view content'); window.location.href = 'index.html'; </script>";
}
