<h2>Погода в Запорожье на <?php echo date('d-m-y'); ?></h2>
<table class="table table-responsive">
    <tr>
        <td>Характеристики погоды</td>
        <td>Атмосферные явления</td>
        <td>Атм. давл., мм рт. ст.</td>
        <td>Температура, °C</td>
 
    </tr>
    <?php for ($i = 0; $i <= 3; $i++): ?>
        <tr>
            <td><img src="<?php echo $img[$i]; ?>"></td>
            <td><?php echo $state[$i]; ?></td>
            <td><?php echo $pressure[$i]; ?></td>
            <td><?php echo $weather[$i]; ?></td>


        </tr>
    <?php endfor; ?>
</table>