<?php
namespace App\Http\Logs;
/**
 * Interface LogInterface
 * @package App\Http\Logs
 * @author Attila Naghi <naghi.attila@mail.com>
 */
interface LogInterface{
    /**
     * @param int $type
     * @param string $message
     * @return void
     */
    public function logMessage(int $type, string $message);
}