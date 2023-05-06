<?php foreach($posts as $post): ?>
    <div class="card p-3 mb-2">
        <h4><?= $post['title'] ?></h4>
        <p><?= $post['body'] ?></p>
        <?=  $this->Html->link('Read more', '/posts/' . $post['id']) ?>
    </div>
<?php endforeach ?>
