<?php

namespace App\Http\Controllers\Traits;

use Illuminate\Database\Eloquent\Collection;
use Throwable;

trait ResponseTrait
{
    private function successResponse(Collection $colletion)
    {
        return response()->json([
            'code' => 200,
            'status' => 'Ok',
            'results' => $colletion
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
