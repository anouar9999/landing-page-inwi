<?php
// Supprimons la vérification des variables globales
?>

<div class="countdown-container">
    <div id="countdown-timer" class="digital-countdown glitch-effect" data-end-date="<?php echo $section['endDate']; ?>">
        <div class="countdown-item">
            <span id="days" class="glitch">00</span>
            <span class="countdown-label">Jours</span>
        </div>
        <div class="countdown-item">
            <span id="hours" class="glitch">00</span>
            <span class="countdown-label">Heures</span>
        </div>
        <div class="countdown-item">
            <span id="minutes" class="glitch">00</span>
            <span class="countdown-label">Minutes</span>
        </div>
        <div class="countdown-item">
            <span id="seconds" class="glitch">00</span>
            <span class="countdown-label">Secondes</span>
        </div>
    </div>
    <div class="countdown-info">
        <?php foreach ($section['info'] as $label => $value): ?>
            <div class="info-item">
                <span class="info-label"><?php echo $label; ?></span>
                <span class="info-value"><?php echo $value; ?></span>
            </div>
        <?php endforeach; ?>
    </div>
</div>
