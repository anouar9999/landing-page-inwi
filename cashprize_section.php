<div class="cashprize-container">
    <h2 class="futuristic-title"><?php echo $section['title']; ?></h2>
    <p class="futuristic-text"><?php echo $section['description']; ?></p>
    <div class="total-prize-container">
        <div class="total-prize">
            <span class="prize-amount" data-target="250000">0</span>
            <span class="prize-currency">DH</span>
        </div>
        <div class="prize-subtitle">Prix Total en Jeu</div>
    </div>
    <div class="prizes-grid">
        <?php foreach ($section['prizes'] as $label => $value): ?>
            <div class="prize-item">
                <div class="prize-icon">🏆</div>
                <span class="prize-label"><?php echo $label; ?></span>
                <span class="prize-value"><?php echo $value; ?></span>
            </div>
        <?php endforeach; ?>
    </div>
</div>
