<?php
use Bitrix\Main\Mail\Event;
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");

if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {

    if ($_POST['action'] == 'vacancy') {

        $message = '';
        if (!empty($_POST['firstname']))
            $message .= 'ФИО: ' . $_POST['firstname'].'<br/>';
        if (!empty($_POST['phone']))
            $message .= 'Телефон: ' . $_POST['phone'].'<br/>';
        if (!empty($_POST['city']))
            $message .= 'Город: ' . $_POST['city'].'<br/>';
        if (!empty($_POST['job']))
            $message .= 'Должность: ' . $_POST['job'].'<br/>';

        $fileId = false;
        if ($_FILES['attachment']) {
            $fileId = \CFile::SaveFile($_FILES['attachment'], 'mails');
        }

        \Bitrix\Main\Mail\Event::sendImmediate(
            ["EVENT_NAME" => "VACANCY",
                "LID" => \Bitrix\Main\Application::getInstance()->getContext()->getSite(),
                "C_FIELDS" => array(
                    'TITLE' => 'Отклик на вакансию',
                    'CONTENT' => $message,
                ),
                "FILE" => array($fileId)
            ]
        );

        if ($fileId)
            CFile::Delete($fileId);
    }

    echo \Bitrix\Main\Web\Json::encode(
        array(
            'error' => 0
        )
    );
} else {

    die('Access denied');

}