<?php

$Bot->command("/\/private/", function ($Update, $Match) use ($Bot, $LANG) {
    $Bot->sendMessage(["chat_id" => $Update["message"]["chat"]["id"], "parse_mode" => "markdown", "text" => $LANG["private"]]);
});
