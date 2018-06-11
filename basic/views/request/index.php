<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Requests';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="request-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>

    <p>
        <?= Html::a('Create Request', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'number',
            'ticket',
            'age',
            'head:ntext',
            'created:ntext',
            'changed:ntext',
            'closed:ntext',
            'query:ntext',
            'status:ntext',
            'priority',
            'account:ntext',
            'company_id:ntext',
            'service:ntext',
            'service_grade:ntext',
            'type:ntext',
            'agent:ntext',
            'manager:ntext',
            'time_lost:datetime',
            'escalation_destination_in:ntext',
            'escalation_destination_date:ntext',
            'escalation_time_working_time:datetime',
            'escalation_time:datetime',
            'first_answer_date:ntext',
            'first_response_in_min',
            'first_response_diff_in_min',
            'first_response_time_working_time:ntext',
            'first_response_time_escalation:datetime',
            'first_response_time_notification:ntext',
            'first_response_time_destination_time:ntext',
            'first_response_time_destination_date:ntext',
            'first_response_time:ntext',
            'update_time_escalation:datetime',
            'update_time_notification:ntext',
            'update_time_destination_time:datetime',
            'update_time_destination_date:ntext',
            'update_time_working_time:datetime',
            'update_time:ntext',
            'solution_time:ntext',
            'solution_in_min',
            'solution_diff_in_min',
            'solution_time_escalation:datetime',
            'solution_time_notification:ntext',
            'solution_time_destination_time:ntext',
            'solution_time_destination_date:ntext',
            'solution_time_working_time:ntext',
            'first_lock:ntext',
            'locked:ntext',
            'state_type:ntext',
            'until_time:datetime',
            'unlock_timeout:ntext',
            'escalation_response_time:datetime',
            'escalation_solution_time:datetime',
            'escalation_update_time:datetime',
            'real_till_time_not_used:datetime',
            'msg_count',
            'process:ntext',
            'activity:ntext',
            'master_ticket:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
