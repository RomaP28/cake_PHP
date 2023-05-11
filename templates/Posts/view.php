<div class="card">
    <div class="card-header">
        <div class="card-title">
            <h3><?= $post['title'] ?></h3>
        </div>
        <div class="card-body">
            <p><?= $post['body'] ?></p>
            <?= $this->Html->image($post['image'], ['alt' => 'myImage']); ?>
            <br>
            <?= $this->Html->nestedList($languages) ?>
            <br>
            <table class="table table-striped">
                <?= $this->Html->tableHeaders(
                    ['Id', 'Name', 'Email']
                ); ?>
                <?= $this->Html->tableCells(
                    [['1', 'John Doe', 'johndoe@gmail.com'],
                    ['2', 'Bob Williams', 'bobwiliams@gmail.com'],
                    ['3', 'Charlie Johnson', 'charliejohnson@gmail.com']]
                ); ?>
            </table>
        </div>
    </div>
</div>
