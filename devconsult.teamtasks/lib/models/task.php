<?php
namespace Devconsult\TeamTasks\Models;

use Bitrix\Main\Entity;

class TaskTable extends Entity\DataManager
{
    public static function getTableName()
    {
        return "devconsult_teamtasks_tasks";
    }

    public static function getMap()
    {
        return [
            "ID" => [
                "data_type" => "integer",
                "primary" => true,
                "autocomplete" => true
            ],
            "TITLE" => [
                "data_type" => "string",
                "required" => true
            ],
            "DESCRIPTION" => [
                "data_type" => "text"
            ],
            "STATUS" => [
                "data_type" => "enum",
                "values" => ["new", "in_progress", "completed"],
                "default_value" => "new"
            ],
            "ASSIGNED_USER_ID" => [
                "data_type" => "integer"
            ],
            "CREATED_AT" => [
                "data_type" => "datetime",
                "default_value" => new \Bitrix\Main\Type\DateTime(),
            ],
            "DEADLINE" => [
                "data_type" => "date"
            ],
        ];
    }
}