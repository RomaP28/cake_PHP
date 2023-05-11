<h3>Create Post</h3>
<?= $this->Form->create(); ?>
    <?= $this->Form->control('title', array(
                                'label' => 'Post Title',
                                'class' => 'form-control'
                            )); ?>
    <?= $this->Form->control('body', array(
                                'label' => 'Post Body',
                                'type' => 'textarea',
                                'class' => 'form-control',
                                'escape' => false
                            )); ?>
    <?= $this->Form->control('category', array(
                                'label' => 'Category',
                                'type' => 'select',
                                'class' => 'form-control',
                                'empty' => 'Select One',
                                'options' => ['Web Development', 'Design', 'Marketing']
                            )); ?>
    <?= $this->Form->control('author', [
                                'label' => 'Author',
                                'class' => 'form-control'
                            ]); ?>
    <hr>
    <?= $this->Form->submit('Submit', array(
                                'class' => 'btn btn-primary'
                            )); ?>
<?= $this->Form->end(); ?>
