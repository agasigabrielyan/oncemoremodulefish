<?php if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
/**
 * @var $arResult
 */
?>
<H1>Задачи пользователя</H1>
<?php if(is_countable($arResult['TASKS']) &&  count($arResult['TASKS']) > 0): ?>
    <ul>
        <?php foreach( $arResult['TASKS'] as $task ): ?>
            <li>
                <?= $task['TITLE']; ?>
            </li>
        <?php endforeach; ?>
    </ul>
<?php else: ?>
    <h2>Задач нет</h2>
<?php endif; ?>