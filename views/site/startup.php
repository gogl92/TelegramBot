<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
$this->title = 'Telegram Bot Studio';
?>
<div class="site-index">

    <div class="jumbotron">

        <p class="lead">Entrepreneurs Site</p>


    </div>

    <div class="body-content">
        <div class="row">
            <div class="col-lg-4">
				<div class="bot-form">
				
				        <?php $form = ActiveForm::begin(); ?>

					    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
					
					    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>
					
						<?= $form->field($model, 'http_token')->textInput(['maxlength' => true]) ?>
					
					    <?= $form->field($model, 'description')->textArea(['rows' => '10', 'maxlength' => true]); ?>
					
					    <?= $form->field($model, 'about')->textArea(['rows' => '4', 'maxlength' => true]); ?>
					
					    <?= $form->field($model, 'bot_picture')->textInput() ?>
					
					    <?= $form->field($model, 'join_groups')->checkbox(); ?>
					
					    <?= $form->field($model, 'privacy')->checkbox(); ?>
										
					    <div class="form-group">
					        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
					    </div>
					
					    <?php ActiveForm::end(); ?>
				
				</div>
            </div>
            <div class="col-lg-4">

            </div>
         <div class="col-lg-4">

            </div>
        </div>

    </div>
</div>