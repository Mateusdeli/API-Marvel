<?php

namespace App\Exceptions\Traits;

use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Throwable;

trait ExceptionsTrait
{

    public function handleExceptionsErrors($request, Throwable $exception)
    {
        if ($exception instanceof NotFoundHttpException) {

            $code = 404;
            $status = 'Not Found';
            $messageError = 'Rota nao encontrada';

            return response()->json([
                'code' => $code,
                'status' => $status,
                'message' => $messageError
            ], $code);
        }

        if ($exception instanceof HttpException) {

            $code = 500;
            $status = 'Internal Server Error';
            $messageError = 'Houve um erro interno no servidor';

            return response()->json([
                'code' => $code,
                'status' => $status,
                'message' => $messageError
            ], $code);
        }
        return parent::render($request, $exception);
    }
}
