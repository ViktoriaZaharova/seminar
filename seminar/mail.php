<?php

$recepient = "zaharova181114@gmail.com"; //замените на ваш почтовый ящик
$sitename = "Бесплатный Семинар
                        от ведущих экспертов финансового рынка";

$name = trim($_POST["name"]);
$phone = trim($_POST["phone"]);
$message = "Имя: $name \nТелефон: $phone";

$pagetitle = "Заявка с сайта \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");