<?php
namespace App\Http\Logs\Admin;

use App\Http\Logs\LogInterface;
use Monolog\Logger;
use Monolog\Handler\RotatingFileHandler;
use Monolog\Formatter\LineFormatter;

/**
 * Class Log
 * @package App\Http\Logs\Admin
 * @author Attila Naghi <naghi.attila@mail.com>
 */
class Log implements LogInterface{

    /**
     * @var LineFormatter
     */
    private $lineFormatter;

    /**
     * @var Logger
     */
    private $log;

    /**
     * @var string $fileName
     */
    private $fileName;

    /**
     * Log constructor.
     * @param string $fileName
     */
    public function __construct($fileName)
    {
        $this->lineFormatter = new LineFormatter(null, null, true, true);
        $this->log = new Logger($fileName);
        $this->fileName = $fileName;
    }

    /**
     * Log messages
     * @param int $type
     * @param string $message
     */
    public function logMessage(int $type, string $message)
    {
        $this->log->pushHandler((new RotatingFileHandler(storage_path().'/logs/admin/'.$this->fileName.'/'.$this->fileName.'.log',2, $type))->setFormatter($this->lineFormatter));
        switch ($type) {
            case 100:
                $this->log->debug($message);
                break;
            case 200:
                $this->log->info($message);
                break;
            case 250:
                $this->log->notice($message);
                break;
            case 300:
                $this->log->warning($message);
                break;
            case 400:
                $this->log->error($message);
                break;
            case 500:
                $this->log->critical($message);
                break;
            case 550:
                $this->log->alert($message);
                break;
            default: //600
                $this->log->emergency($message);
                break;
        }
    }
}