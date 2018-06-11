<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Class m180611_192102_init
 */
class m180611_192102_init extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('request', [
            'id' => Schema::TYPE_PK,
            'number' => Schema::TYPE_INTEGER,
            'ticket' => Schema::TYPE_INTEGER,
            'age' => Schema::TYPE_INTEGER,
            'head' => Schema::TYPE_TEXT,
            'created' => Schema::TYPE_TEXT,
            'changed' => Schema::TYPE_TEXT,
            'closed' => Schema::TYPE_TEXT,
            'query' => Schema::TYPE_TEXT,
            'status' => Schema::TYPE_TEXT,
            'priority' => Schema::TYPE_INTEGER,
            'account' => Schema::TYPE_TEXT,
            'company_id' => Schema::TYPE_TEXT,
            'service' => Schema::TYPE_TEXT,
            'service_grade' => Schema::TYPE_TEXT,
            'type' => Schema::TYPE_TEXT,
            'agent' => Schema::TYPE_TEXT,
            'manager' => Schema::TYPE_TEXT,
            'time_lost' => Schema::TYPE_INTEGER,
            'escalation_destination_in' => Schema::TYPE_TEXT,
            'escalation_destination_date' => Schema::TYPE_TEXT,
            'escalation_time_working_time' => Schema::TYPE_INTEGER,
            'escalation_time' => Schema::TYPE_INTEGER,
            'first_answer_date' => Schema::TYPE_TEXT,
            'first_response_in_min' => Schema::TYPE_INTEGER,
            'first_response_diff_in_min' => Schema::TYPE_INTEGER,
            'first_response_time_working_time' => Schema::TYPE_TEXT,
            'first_response_time_escalation' => Schema::TYPE_INTEGER,
            'first_response_time_notification' => Schema::TYPE_TEXT,
            'first_response_time_destination_time' => Schema::TYPE_TEXT,
            'first_response_time_destination_date' => Schema::TYPE_TEXT,
            'first_response_time' => Schema::TYPE_TEXT,
            'update_time_escalation' => Schema::TYPE_INTEGER,
            'update_time_notification' => Schema::TYPE_TEXT,
            'update_time_destination_time' => Schema::TYPE_INTEGER,
            'update_time_destination_date' => Schema::TYPE_TEXT,
            'update_time_working_time' => Schema::TYPE_INTEGER,
            'update_time' => Schema::TYPE_TEXT,
            'solution_time' => Schema::TYPE_TEXT,
            'solution_in_min' => Schema::TYPE_INTEGER,
            'solution_diff_in_min' => Schema::TYPE_INTEGER,
            'solution_time_escalation' => Schema::TYPE_INTEGER,
            'solution_time_notification' => Schema::TYPE_TEXT,
            'solution_time_destination_time' => Schema::TYPE_TEXT,
            'solution_time_destination_date' => Schema::TYPE_TEXT,
            'solution_time_working_time' => Schema::TYPE_TEXT,
            'first_lock' => Schema::TYPE_TEXT,
            'locked' => Schema::TYPE_TEXT,
            'state_type' => Schema::TYPE_TEXT,
            'until_time' => Schema::TYPE_INTEGER,
            'unlock_timeout' => Schema::TYPE_TEXT,
            'escalation_response_time' => Schema::TYPE_INTEGER,
            'escalation_solution_time' => Schema::TYPE_INTEGER,
            'escalation_update_time' => Schema::TYPE_INTEGER,
            'real_till_time_not_used' => Schema::TYPE_INTEGER,
            'msg_count' => Schema::TYPE_INTEGER,
            'process' => Schema::TYPE_TEXT,
            'activity' => Schema::TYPE_TEXT,
            'master_ticket' => Schema::TYPE_TEXT,
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180611_192102_init cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180611_192102_init cannot be reverted.\n";

        return false;
    }
    */
}
