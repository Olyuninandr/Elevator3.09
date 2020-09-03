<?php

class Elevator
{
    public function validate($myFloor, $building)
    {
        if ($myFloor > $building)
            $msg = "Введіть корректні данні!";

        elseif (empty($building) or empty($myFloor))
            $msg = "Ви не ввели обов'язкові данні!";
        return $msg;
    }

    public function getResultMessage($myFloor = null, $floor, $building = null)
    {
        if ($floor == 'stop') {
            $whereStopped = rand(1, $building - 1);
            $msg = "Обережно! Ви зупинилися між " . $whereStopped . " і " . ($whereStopped + 1) . " поверхами!";
        } elseif ($floor == 'tech') {
            $msg = "Зберігайте спокій. Технічна служба вже в дорозі!";
        } elseif ($floor == $myFloor) {
            $msg = "Ви вже на цьому поверсі";
        } else
            $msg = "Вітаємо на " . $floor . " поверсі!";
        return $msg;
    }
}