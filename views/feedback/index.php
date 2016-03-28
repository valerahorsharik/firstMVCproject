<?php foreach ($feedbacks as $feedback): ?>
    <h1>
        <?php echo $feedback['header']; ?>
    </h1>
    <p>
        <?php echo $feedback['content']; ?>
    </p>
    <small>
        <?php echo $feedback['date']; ?>
        <?php echo $feedback['author']; ?>
    </small>
<?php endforeach; ?>   
    