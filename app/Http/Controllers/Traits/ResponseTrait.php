<?php

namespace App\Http\Controllers\Traits;

use Throwable;

trait ResponseTrait
{
    private function successResponse($result)
    {
        return response()->json([
            'code' => 200,
            'status' => 'Ok',
            'results' => $result
        ], 200, ['Content-type: application/json']);
    }

    private function errorNotFoundResponse(Throwable $ex)
    {
        return response()->json([
            'code' => 404,
            'status' => 'Not Found',
            'message' => $ex->getMessage()
        ], 404, ['Content-type: application/json']);
    }
}
