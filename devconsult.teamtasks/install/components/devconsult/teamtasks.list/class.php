<?php if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
use Bitrix\Main\Localization\Loc;
use Devconsult\TeamTasks\Models\TaskTable as DevconsultTaskTable;
use Bitrix\Main\Loader;

class TeamtasksList extends \CBitrixComponent
{

    public function getTasks()
    {
        $tasks = [];
        if(Loader::includeModule("devconsult.teamtasks")) {
            $tasks = DevconsultTaskTable::getList([
                'select' => ['ID','TITLE','DESCRIPTION','STATUS'],
                'order' => ['ID' => 'ASC']
            ])->fetchAll();
        }

        return $tasks;
    }

    public function executeComponent()
    {
        $tasks = $this->getTasks();
        $this->arResult['TASKS'] = $tasks;

        $this->includeComponentTemplate();
    }
}