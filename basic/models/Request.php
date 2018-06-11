<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "request".
 *
 * @property int $id
 * @property int $number Число
 * @property int $ticket Ticket#
 * @property int $age Возраст
 * @property string $head Заголовок
 * @property string $created Создан/а
 * @property string $changed Изменен
 * @property string $closed Время закрытия
 * @property string $query Очередь
 * @property string $status Состояние
 * @property int $priority Приоритет
 * @property string $account Учетная запись клиента
 * @property string $company_id ID компании
 * @property string $service Сервис
 * @property string $service_grade Уровень обслуживания
 * @property string $type Тип
 * @property string $agent Агент (владелец)
 * @property string $manager Ответственный
 * @property int $time_lost Потраченное на заявку время
 * @property string $escalation_destination_in EscalationDestinationIn
 * @property string $escalation_destination_date EscalationDestinationDate
 * @property int $escalation_time_working_time EscalationTimeWorkingTime
 * @property int $escalation_time EscalationTime
 * @property string $first_answer_date Дата первого ответа
 * @property int $first_response_in_min FirstResponseInMin
 * @property int $first_response_diff_in_min FirstResponseDiffInMin
 * @property string $first_response_time_working_time FirstResponseTimeWorkingTime
 * @property int $first_response_time_escalation FirstResponseTimeEscalation
 * @property string $first_response_time_notification FirstResponseTimeNotification
 * @property string $first_response_time_destination_time FirstResponseTimeDestinationTime
 * @property string $first_response_time_destination_date FirstResponseTimeDestinationDate
 * @property string $first_response_time FirstResponseTime
 * @property int $update_time_escalation UpdateTimeEscalation
 * @property string $update_time_notification UpdateTimeNotification
 * @property int $update_time_destination_time UpdateTimeDestinationTime
 * @property string $update_time_destination_date UpdateTimeDestinationDate
 * @property int $update_time_working_time UpdateTimeWorkingTime
 * @property string $update_time UpdateTime
 * @property string $solution_time SolutionTime
 * @property int $solution_in_min SolutionInMin
 * @property int $solution_diff_in_min SolutionDiffInMin
 * @property int $solution_time_escalation SolutionTimeEscalation
 * @property string $solution_time_notification SolutionTimeNotification
 * @property string $solution_time_destination_time SolutionTimeDestinationTime
 * @property string $solution_time_destination_date SolutionTimeDestinationDate
 * @property string $solution_time_working_time SolutionTimeWorkingTime
 * @property string $first_lock First Lock
 * @property string $locked заблокировано
 * @property string $state_type StateType
 * @property int $until_time UntilTime
 * @property string $unlock_timeout UnlockTimeout
 * @property int $escalation_response_time EscalationResponseTime
 * @property int $escalation_solution_time EscalationSolutionTime
 * @property int $escalation_update_time EscalationUpdateTime
 * @property int $real_till_time_not_used RealTillTimeNotUsed
 * @property int $msg_count Количество сообщений
 * @property string $process Процесс
 * @property string $activity Активность
 * @property string $master_ticket Master Ticket
 */
class Request extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'request';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['number', 'ticket', 'age', 'priority', 'time_lost', 'escalation_time_working_time', 'escalation_time', 'first_response_in_min', 'first_response_diff_in_min', 'first_response_time_escalation', 'update_time_escalation', 'update_time_destination_time', 'update_time_working_time', 'solution_in_min', 'solution_diff_in_min', 'solution_time_escalation', 'until_time', 'escalation_response_time', 'escalation_solution_time', 'escalation_update_time', 'real_till_time_not_used', 'msg_count'], 'integer'],
            [['head', 'created', 'changed', 'closed', 'query', 'status', 'account', 'company_id', 'service', 'service_grade', 'type', 'agent', 'manager', 'escalation_destination_in', 'escalation_destination_date', 'first_answer_date', 'first_response_time_working_time', 'first_response_time_notification', 'first_response_time_destination_time', 'first_response_time_destination_date', 'first_response_time', 'update_time_notification', 'update_time_destination_date', 'update_time', 'solution_time', 'solution_time_notification', 'solution_time_destination_time', 'solution_time_destination_date', 'solution_time_working_time', 'first_lock', 'locked', 'state_type', 'unlock_timeout', 'process', 'activity', 'master_ticket'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'number' => 'Число',
            'ticket' => 'Ticket#',
            'age' => 'Возраст',
            'head' => 'Заголовок',
            'created' => 'Создан/а',
            'changed' => 'Изменен',
            'closed' => 'Время закрытия',
            'query' => 'Очередь',
            'status' => 'Состояние',
            'priority' => 'Приоритет',
            'account' => 'Учетная запись клиента',
            'company_id' => 'ID компании',
            'service' => 'Сервис',
            'service_grade' => 'Уровень обслуживания',
            'type' => 'Тип',
            'agent' => 'Агент (владелец)',
            'manager' => 'Ответственный',
            'time_lost' => 'Потраченное на заявку время',
            'escalation_destination_in' => 'EscalationDestinationIn',
            'escalation_destination_date' => 'EscalationDestinationDate',
            'escalation_time_working_time' => 'EscalationTimeWorkingTime',
            'escalation_time' => 'EscalationTime',
            'first_answer_date' => 'Дата первого ответа',
            'first_response_in_min' => 'FirstResponseInMin',
            'first_response_diff_in_min' => 'FirstResponseDiffInMin',
            'first_response_time_working_time' => 'FirstResponseTimeWorkingTime',
            'first_response_time_escalation' => 'FirstResponseTimeEscalation',
            'first_response_time_notification' => 'FirstResponseTimeNotification',
            'first_response_time_destination_time' => 'FirstResponseTimeDestinationTime',
            'first_response_time_destination_date' => 'FirstResponseTimeDestinationDate',
            'first_response_time' => 'FirstResponseTime',
            'update_time_escalation' => 'UpdateTimeEscalation',
            'update_time_notification' => 'UpdateTimeNotification',
            'update_time_destination_time' => 'UpdateTimeDestinationTime',
            'update_time_destination_date' => 'UpdateTimeDestinationDate',
            'update_time_working_time' => 'UpdateTimeWorkingTime',
            'update_time' => 'UpdateTime',
            'solution_time' => 'SolutionTime',
            'solution_in_min' => 'SolutionInMin',
            'solution_diff_in_min' => 'SolutionDiffInMin',
            'solution_time_escalation' => 'SolutionTimeEscalation',
            'solution_time_notification' => 'SolutionTimeNotification',
            'solution_time_destination_time' => 'SolutionTimeDestinationTime',
            'solution_time_destination_date' => 'SolutionTimeDestinationDate',
            'solution_time_working_time' => 'SolutionTimeWorkingTime',
            'first_lock' => 'First Lock',
            'locked' => 'заблокировано',
            'state_type' => 'StateType',
            'until_time' => 'UntilTime',
            'unlock_timeout' => 'UnlockTimeout',
            'escalation_response_time' => 'EscalationResponseTime',
            'escalation_solution_time' => 'EscalationSolutionTime',
            'escalation_update_time' => 'EscalationUpdateTime',
            'real_till_time_not_used' => 'RealTillTimeNotUsed',
            'msg_count' => 'Количество сообщений',
            'process' => 'Процесс',
            'activity' => 'Активность',
            'master_ticket' => 'Master Ticket',
        ];
    }

    public function processToSave() {
        $this->number = (int) $this->number;;
        $this->ticket = (int) $this->ticket;;
        $this->age = (int) $this->age;;
        $this->priority = (int) $this->priority;;
        $this->time_lost = (int) $this->time_lost;;
        $this->escalation_time_working_time = (int) $this->escalation_time_working_time;;
        $this->escalation_time = (int) $this->escalation_time;;
        $this->first_response_in_min = (int) $this->first_response_in_min;;
        $this->first_response_diff_in_min = (int) $this->first_response_diff_in_min;;
        $this->first_response_time_escalation = (int) $this->first_response_time_escalation;;
        $this->update_time_escalation = (int) $this->update_time_escalation;;
        $this->update_time_destination_time = (int) $this->update_time_destination_time;;
        $this->update_time_working_time = (int) $this->update_time_working_time;;
        $this->solution_in_min = (int) $this->solution_in_min;;
        $this->solution_diff_in_min = (int) $this->solution_diff_in_min;;
        $this->solution_time_escalation = (int) $this->solution_time_escalation;;
        $this->until_time = (int) $this->until_time;;
        $this->escalation_response_time = (int) $this->escalation_response_time;;
        $this->escalation_solution_time = (int) $this->escalation_solution_time;;
        $this->escalation_update_time = (int) $this->escalation_update_time;;
        $this->real_till_time_not_used = (int) $this->real_till_time_not_used;;
        $this->msg_count = (int) $this->msg_count;;

        $this->id = $this->number;

        $this->save();
    }
}
