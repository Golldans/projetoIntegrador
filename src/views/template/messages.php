<?php

if($exception){
    $message = [
        'type' => 'error',
        'message' => $exception->getMessage()
    ];
}

?>

<?php if(isset($message)): ?>

<div class="erro">
    <?= $message['message'] ?>
</div>

<?php endif ?>