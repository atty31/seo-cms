<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Contracts\Container\Container;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use App\Http\Env\Admin;
use App\Http\Logs\Admin\Log;
use Monolog\Logger;
use Request;

/**
 * Class Handler
 * @package App\Exceptions
 * @author Attila Naghi <naghi.attila@mail.com>
 */
class Handler extends ExceptionHandler
{
    /**
     * @var string
     */
    private $logFileName = 'general_errors';
    /**
     * @var
     */
    private $log;
    /**
     * A list of the exception types that should not be reported.
     *
     * @var array
     */
    protected $dontReport = [
        \Illuminate\Auth\AuthenticationException::class,
        \Illuminate\Auth\Access\AuthorizationException::class,
        \Symfony\Component\HttpKernel\Exception\HttpException::class,
        \Illuminate\Database\Eloquent\ModelNotFoundException::class,
        \Illuminate\Session\TokenMismatchException::class,
        \Illuminate\Validation\ValidationException::class,
    ];

    /**
     * Handler constructor.
     * @param Container $container
     */
    public function __construct(Container $container)
    {
        $this->log = new Log($this->logFileName);
        parent::__construct($container);
    }

    /**
     * Report or log an exception.
     *
     * This is a great spot to send exceptions to Sentry, Bugsnag, etc.
     *
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     * @param \Illuminate\Http\Request $request
     * @param Exception $exception
     * @return \Illuminate\Http\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function render($request, Exception $exception)
    {
        if(Request::segment(1) === Admin::getAdminUrl()){ // only from admin panel
            if( (string) get_class($exception) === 'ErrorException'
                || (string) get_class($exception) === 'Symfony\Component\Debug\Exception\FatalThrowableError'
                || (string) get_class($exception) === 'Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException'
                || (string) get_class($exception) === 'InvalidArgumentException'
                || (string) get_class($exception) === 'Illuminate\Session\TokenMismatchException'
                || (string) get_class($exception) === 'BadMethodCallException'
                || (string) get_class($exception) === 'UnexpectedValueException'
                || (string) get_class($exception) === 'App\Exceptions\DatabaseException' // custom exception
                || (string) get_class($exception) === 'Symfony\Component\HttpKernel\Exception\NotFoundHttpException'  //404 error
                || (string) get_class($exception) === 'Illuminate\Database\QueryException'){
                //message displayed on frontend
                $message = ['error_message' => $exception->getMessage().'<br> From url: '. $request->getUri() ];
                //message put in the log file
                $this->log->logMessage(Logger::ERROR, $exception->getMessage().'--- From url: '. $request->getUri() );
                return redirect()->route('admin')->with($message);
            }
        }
        //todo get all error message types and check for syntax error why the message is empty
        return parent::render($request, $exception);
    }

    /**
     * Convert an authentication exception into an unauthenticated response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Illuminate\Auth\AuthenticationException  $exception
     * @return \Illuminate\Http\Response
     */
    protected function unauthenticated($request, AuthenticationException $exception)
    {
        if ($request->expectsJson()) {
            return response()->json(['error' => 'Unauthenticated.'], 401);
        }

        return redirect()->guest(Admin::getAdminUrl().'/login');
    }
}