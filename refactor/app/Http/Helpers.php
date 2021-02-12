<?php

function customResponse($data, $message, $status = true, $headerCode = 200)
{
    return response()->json([
        'status' => $status,
        'message' => $message,
        'data'  => $data
    ], $headerCode);
}

/**
 * Convert number of minutes to hour and minute variant
 * @param  int $time
 * @param  string $format
 * @return string
 */
private function convertToHoursMins($time, $format = '%02dh %02dmin')
{
    if ($time < 60) {
        return $time . 'min';
    } else if ($time == 60) {
        return '1h';
    }

    $hours = floor($time / 60);
    $minutes = ($time % 60);

    return sprintf($format, $hours, $minutes);
}