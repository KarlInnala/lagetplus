<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="menu.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="menu">
        <ul>
            <li><a href="homepage.html"><div>Hem</div></a></li>
            <li><a href="spel.html"><div>Spel</div></a></li>
            <li><a href="upgrade.html"><div>Upgradera</div></a></li>
            <li><a href="omvoila.php"><div>VOILA</div></a></li>
        </ul>
    </nav>   
    <div>
        
    </div>
    <div>
        
    </div>
    <div>
        
    </div>
        <div class="personbox">
            <div id="personimage">
                <img src="erik.jpg">
            </div>
        <div id="personinfo">
            <label id="name">Erik Kruse</label>
            <label id="title">Chief executive general secretary of cyber development</label>
            <label id="description">”En av världens webbutvecklare"</label>     
        </div>
        </div>
        <div class="personbox">
        <div id="personimage">
            <img src="karl.jpg">
        </div>
        <div id="personinfo">
            <label id="name">Karl Innala</label>
            <label id="title">Chief executive cyber developer of staff</label>
            <label id="description">”Internet är inte bara en fluga, det är även en bugg"</label>     
        </div>
        </div>    
    <div class="personbox">
        <div id="personimage">
            <img src="felix.jpg">
        </div>
        <div id="personinfo">
            <label id="name">Felix Eriksson</label>
            <label id="title">Mythical chief executive directorgeneral of graphics</label>
            <label id="description">"Om en pixel inte vibrerar på en frekvens av ren passion, är den då ens renderad?"</label>     
        </div>
   
    </div>
    
</body>
</html>

<?php include 'server_stats.php'; ?>

<section id="command-center" style="background: #1a1a1a; color: #2ecc71; padding: 50px 10%; font-family: 'Courier New', monospace; border-top: 5px solid #003087;">
    <h2 style="color: white; border-bottom: 2px solid #333; padding-bottom: 10px;">LagetPay™ Real-time Metrics</h2>
    
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px; margin-top: 30px;">
        
        <div class="stat-card" style="border: 1px solid #333; padding: 20px; border-radius: 10px;">
            <span style="color: #888;">> CPU_DISRUPTION_LEVEL</span>
            <div style="font-size: 2rem; margin: 10px 0;"><?php echo $cpuUsage; ?>%</div>
            <div style="width: 100%; background: #333; height: 10px;">
                <div style="width: <?php echo $cpuUsage; ?>%; background: #2ecc71; height: 100%;"></div>
            </div>
        </div>

        <div class="stat-card" style="border: 1px solid #333; padding: 20px; border-radius: 10px;">
            <span style="color: #888;">> MEMORY_CAPACITY</span>
            <div style="font-size: 2rem; margin: 10px 0;"><?php echo $memoryUsage; ?>%</div>
            <div style="width: 100%; background: #333; height: 10px;">
                <div style="width: <?php echo $memoryUsage; ?>%; background: #3498db; height: 100%;"></div>
            </div>
        </div>

        <div class="stat-card" style="border: 1px solid #333; padding: 20px; border-radius: 10px;">
            <span style="color: #888;">> ORTUGAS_IN_CIRCULATION</span>
            <div id="ortug-count" style="font-size: 2rem; margin: 10px 0; color: #f1c40f;">
                <?php echo number_format($totalOrtugar, 0, ',', ' '); ?>
            </div>
            <span style="font-size: 0.8rem;">Status: INFLATIONARY</span>
        </div>

    </div>

    <div style="margin-top: 30px; font-size: 0.9rem; color: #666;">
        <p>> Server_Uptime: <?php echo $uptime; ?></p>
        <p>> Connection_Type: HYPER_BÄVER_PROTOCOL</p>
    </div>
</section>

<script>
    // Lite JavaScript för att få siffran på örtugar att "ticka" uppåt live
    let count = <?php echo $totalOrtugar; ?>;
    setInterval(() => {
        count += Math.floor(Math.random() * 5);
        document.getElementById('ortug-count').innerText = count.toLocaleString('sv-SE');
    }, 3000);
</script>
