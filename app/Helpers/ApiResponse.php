<?php

namespace App\Helpers;

class ApiResponse
{
    public function success($status = 200, $data = null, $message = null)
    {
        return response()->json([
            'success' => true,
            'data'=>$data
        ], $status);
    }

    public function error($status = 400, $data = null, $message = null){
        return response()->json([
            'success' => false,
            'message' => $message,
        ], $status);
    }
}
