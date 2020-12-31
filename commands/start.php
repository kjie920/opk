<?php

$Bot->command("/\/個人賬戶/", function ($Update, $Match) use ($Bot, $LANG) {
    $Bot->sendMessage(["chat_id" => $Update["message"]["chat"]["id"], "parse_mode" => "markdown", "text" => $LANG["START"]]);
});
