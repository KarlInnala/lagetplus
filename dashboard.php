<?php
// 1. Hämta serverns belastning (Load average)
$load = sys_getloadavg();

// 2. Hämta minnesinfo (RAM)
$free = shell_exec('free -m');
$free_lines = explode("\n", $free);
$memory = explode(" ", preg_replace('/\s+/', ' ', $free_lines[1]));
$used_mem = $memory[2];
$total_mem = $memory[1];

// 3. Hämta hårddiskutrymme
$disk_free = round(disk_free_space("/") / 1024 / 1024 / 1024, 2);
$disk_total = round(disk_total_space("/") / 1024 / 1024 / 1024, 2);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Voila Status Center</title>
    <style>
        body { font-family: sans-serif; background: #1a1a1a; color: white; padding: 20px; }
        .card { background: #2d2d2d; padding: 20px; border-radius: 10px; margin-bottom: 10px; border-left: 5px solid #4CAF50; }
        h1 { color: #4CAF50; }
        .stat { font-size: 24px; font-weight: bold; }
    </style>
</head>
<body>
    <h1>🚀 Server Dashboard</h1>
    
    <div class="card">
        <div>Processorbelastning (1 min)</div>
        <div class="stat"><?php echo $load[0]; ?> %</div>
    </div>

    <div class="card">
        <div>Användning av arbetsminne (RAM)</div>
        <div class="stat"><?php echo $used_mem; ?> MB / <?php echo $total_mem; ?> MB</div>
    </div>

    <div class="card">
        <div>Ledigt utrymme på hårddisken</div>
        <div class="stat"><?php echo $disk_free; ?> GB / <?php echo $disk_total; ?> GB</div>
    </div>

    <p>Sidan uppdaterades: <?php echo date('H:i:s'); ?></p>
</body>
</html>
