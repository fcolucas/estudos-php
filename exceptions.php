<?php

/**
 * @param Throwable $exception
 * @return array
 */
$exportExceptionFn = function(Throwable $exception): array {
    return [
        'exception-class' => get_class($exception),
        'message' => $exception->getMessage(),
        'file' => $exception->getFile(),
        'line' => $exception->getLine(),
        'code' => $exception->getCode(),
    ];
};

$exceptionToBeReported = new Exception('teste');

var_dump($exportExceptionFn($exceptionToBeReported));
