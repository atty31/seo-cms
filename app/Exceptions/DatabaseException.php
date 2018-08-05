<?php
namespace App\Exceptions;

use Exception;
use Request;

/**
 * Class DatabaseException
 * Custom exception for database dealings
 * @package App\Exceptions
 * @author Attila Naghi <naghi.attila@mail.com>
 */
class DatabaseException extends \Exception
{
    /**
     * DatabaseException constructor.
     * @param null $message
     * @param null $code
     * @param null $file
     * @param Exception|NULL $previous
     *
     */
    public function __construct($message = NULL, $code = NULL, $file = NULL, Exception $previous = NULL)
    {
        parent::__construct($message, $code, $previous);
    }
}