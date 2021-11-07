<?php
use yii\widgets\Breadcrumbs;
use dmstr\widgets\Alert;

?>
<div class="content-wrapper">
    <section class="content-header">
        <?php if (isset($this->blocks['content-header'])) { ?>
            <h1><?php $this->blocks['content-header'] ?></h1>
        <?php } else 
        { 
            ?>
            <h1>
                <?php
                if ($this->title !== null) {
                   // echo \yii\helpers\Html::encode($this->title);
                } else {
                    echo \yii\helpers\Inflector::camel2words(
                        \yii\helpers\Inflector::id2camel($this->context->module->id)
                    );
                    echo ($this->context->module->id !== \Yii::$app->id) ? '<small>Module</small>' : '';
                } ?>
            </h1>
        <?php } ?>
        <div class="row" >
 <div class="col-md-12">
        <?=
        Breadcrumbs::widget(
            [
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]
        ) ?>
        </div>
        </div>
    </section>

    <section class="content" style="padding-top: 0px;">
        <?= Alert::widget() ?>
        <?= $content ?>
    </section>
</div>

<footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b>Version</b> 1.1
    </div>
    <strong>&copy; <?php echo date("Y"); ?></strong> TEST
</footer>