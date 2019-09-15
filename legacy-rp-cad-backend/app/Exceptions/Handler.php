<?php

namespace App\Exceptions;

use CloudCreativity\LaravelJsonApi\Exceptions\HandlesErrors;
use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Neomerx\JsonApi\Exceptions\JsonApiException;
use Symfony\Component\HttpKernel\Exception\HttpException;

class Handler extends ExceptionHandler
{
    use HandlesErrors;

    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        JsonApiException::class,
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
     * @param Exception $exception
     * @return void
     * @throws Exception
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  Request  $request
     * @param Exception $exception
     * @return Response
     */
    public function render($request, Exception $exception)
    {
        // Rendering of JSON-api errors.
        if ($this->isJsonApi($request, $exception)) {
            return $this->renderJsonApi($request, $exception);
        }

        // Standard exception handling.
        return parent::render($request, $exception);
    }

    /**
     * Prepares an exception.
     *
     * @param Exception $exception
     * @return Exception|HttpException
     */
    protected function prepareException(Exception $exception)
    {
        // Preparing of JSON-api exceptions.
        if ($exception instanceof JsonApiException) {
            return $this->prepareJsonApiException($exception);
        }

        // Standard preparing.
        return parent::prepareException($exception);
    }

}
