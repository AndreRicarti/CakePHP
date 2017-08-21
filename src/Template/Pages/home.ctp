<h1>Home</h1>

<?php $this->start('css'); ?>
<style>
    h1 {
        color: red;
    }
</style>
<?php $this->end(); ?>

<?php $this->start('script'); ?>
<script>
    console.log("Page Home");
</script>
<?php $this->end(); ?>

<?php $this->start('jumbotron'); ?>
<div class="jumbotron">
    <h1 class="display-3">CakePHP3</h1>
    <p class="lead">Framework PHP</p>
    <hr class="my-4">
    <p>Esse é um otimo Framework..</p>
    <p class="lead">
        <a class="btn btn-primary btn-lg" href="http://book.cakephp.org" role="button">Learn more</a>
    </p>
</div>
<?php $this->end(); ?>
