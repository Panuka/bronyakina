<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Request */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="request-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'number')->textInput() ?>

    <?= $form->field($model, 'ticket')->textInput() ?>

    <?= $form->field($model, 'age')->textInput() ?>

    <?= $form->field($model, 'head')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'created')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'changed')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'closed')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'query')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'status')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'priority')->textInput() ?>

    <?= $form->field($model, 'account')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'company_id')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'service')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'service_grade')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'type')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'agent')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'manager')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'time_lost')->textInput() ?>

    <?= $form->field($model, 'escalation_destination_in')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'escalation_destination_date')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'escalation_time_working_time')->textInput() ?>

    <?= $form->field($model, 'escalation_time')->textInput() ?>

    <?= $form->field($model, 'first_answer_date')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'first_response_in_min')->textInput() ?>

    <?= $form->field($model, 'first_response_diff_in_min')->textInput() ?>

    <?= $form->field($model, 'first_response_time_working_time')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'first_response_time_escalation')->textInput() ?>

    <?= $form->field($model, 'first_response_time_notification')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'first_response_time_destination_time')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'first_response_time_destination_date')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'first_response_time')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'update_time_escalation')->textInput() ?>

    <?= $form->field($model, 'update_time_notification')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'update_time_destination_time')->textInput() ?>

    <?= $form->field($model, 'update_time_destination_date')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'update_time_working_time')->textInput() ?>

    <?= $form->field($model, 'update_time')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'solution_time')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'solution_in_min')->textInput() ?>

    <?= $form->field($model, 'solution_diff_in_min')->textInput() ?>

    <?= $form->field($model, 'solution_time_escalation')->textInput() ?>

    <?= $form->field($model, 'solution_time_notification')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'solution_time_destination_time')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'solution_time_destination_date')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'solution_time_working_time')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'first_lock')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'locked')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'state_type')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'until_time')->textInput() ?>

    <?= $form->field($model, 'unlock_timeout')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'escalation_response_time')->textInput() ?>

    <?= $form->field($model, 'escalation_solution_time')->textInput() ?>

    <?= $form->field($model, 'escalation_update_time')->textInput() ?>

    <?= $form->field($model, 'real_till_time_not_used')->textInput() ?>

    <?= $form->field($model, 'msg_count')->textInput() ?>

    <?= $form->field($model, 'process')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'activity')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'master_ticket')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
