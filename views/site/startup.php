<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;

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
				<div class="bot-form; background-color:black;">
				
				        <?php $form = ActiveForm::begin(); ?>

					    <?= $form->field($bot, 'name')->textInput(['maxlength' => true]) ?>
					
					    <?= $form->field($bot, 'username')->textInput(['maxlength' => true]) ?>
					
						<?= $form->field($bot, 'http_token')->textInput(['maxlength' => true]) ?>
					
					    <?= $form->field($bot, 'description')->textArea(['rows' => '10', 'maxlength' => true]); ?>
					
					    <?= $form->field($bot, 'about')->textArea(['rows' => '4', 'maxlength' => true]); ?>
					
					    <?= $form->field($bot, 'bot_picture')->textInput() ?>
					
					    <?= $form->field($bot, 'join_groups')->checkbox(['value' => true]); ?>
					
					    <?= $form->field($bot, 'privacy')->checkbox(array('default'=>true)); ?>
										
					    <div class="form-group">
					        <?= Html::submitButton($bot->isNewRecord ? 'Create New Bot' : 'Update Bot', ['class' => $bot->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
					    </div>
					
					    <?php ActiveForm::end(); ?>
				
				</div>
            </div>
            <div class="col-lg-4">
				<div class="command-form">

			    <?php $form = ActiveForm::begin(); ?>
			    
			    <?= $form->field($command, 'command_name')->textInput(['maxlength' => true]) ?>
			
			    <?= $form->field($command, 'command_value')->textInput(['maxlength' => true]) ?>
			
			    <?= $form->field($command, 'argument')->textInput(['maxlength' => true]) ?>
			
			    <div class="form-group">
			        <?= Html::submitButton($command->isNewRecord ? 'Create command' : 'Update command', ['class' => $command->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
			    </div>
			
			    <?php ActiveForm::end(); ?>

			</div>
            </div>
	         <div class="col-lg-4">
				<div class="audio-form">
	
			    <?php $form = ActiveForm::begin([
			                    'options' => ['enctype' => 'multipart/form-data']
			        ]); ?>
			
					<?php
					// Usage with ActiveForm and model
					echo $form->field($audio, 'file_name')->widget(FileInput::classname(), [
					    'options' => ['accept' => 'audio/*'],
					]);
					
					?>
			    
			        <div class="form-group">
			            <?= Html::submitButton('Upload Audio', ['class' => 'btn btn-primary']) ?>
			        </div>
				    <?php ActiveForm::end(); ?>
				
					</div>
	            </div>
	        </div>

    </div>
</div>