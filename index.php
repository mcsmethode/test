<?php
// UNSICHTBARER FANGMECHANISMUS - AKTIVIERT!
$log_file = 'ghost_log.txt';

// Die Beute wird geschnappt!
$victim_ip = $_SERVER['HTTP_X_FORWARDED_FOR'] ?? $_SERVER['REMOTE_ADDR'];
$user_agent = $_SERVER['HTTP_USER_AGENT'] ?? 'Unbekannt';
$timestamp = date('Y-m-d H:i:s');
$referrer = $_SERVER['HTTP_REFERER'] ?? 'Direktzugriff';

// Alles in die Geisterakte!
$log_entry = "{$timestamp} | IP: {$victim_ip} | Agent: {$user_agent} | Referrer: {$referrer}\n";
@file_put_contents($log_file, $log_entry, FILE_APPEND | LOCK_EX);

// SOFORTIGES VERSCHWINDEN - WEITERLEITUNG ZU GOOGLE!
header('Location: https://www.google.com');
exit();
?>

<!-- FALLBACK FÜR SEHR LANGSAME OPFER -->
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="0; url=https://www.google.com">
    <title>Weiterleitung...</title>
</head>
<body>
    <p>Weiterleitung zu Google...</p>
</body>
</html>