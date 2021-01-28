<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Http\Exceptions\ThrottleRequestsException;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param Throwable $e
     * @return void
     *
     * @throws Exception|Throwable
     */
    public function report(Throwable $e)
    {
        parent::report($e);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param mixed $request
     * @param Throwable $e
     * @return Response
     *
     * @throws Throwable
     */
    public function render(mixed $request, Throwable $e): Response
    {
        if ($e instanceof ThrottleRequestsException) {
            return parent::render($request, new ThrottleRequestsException(
               "THROTTLE_REQUESTS_EXCEPTION",
               $e->getPrevious(),
               $e->getHeaders(),
               $e->getCode()
            ));
        }

        return parent::render($request, $e);
    }
}
