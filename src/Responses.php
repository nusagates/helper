<?php
namespace Nusagates\Helper;
class Responses
{
    public static function default($code = 201, $data = [], $message = ''): array
    {
        return [
            'code' => $code,
            'data' => $data,
            'message' => $message
        ];
    }

    public static function showValidationError($validator): array
    {


        $err = $validator->getMessageBag()->toArray();
        foreach ($err as $e) {
            $err[] = $e;
        }

        return [
            'code' => 201,
            'data' => [],
            'message' => $err[0][0]
        ];

    }

    public static function showErrorMessage($message='an error occurred'): array
    {
        return [
            'code' => 201,
            'data' => [],
            'message' => $message
        ];
    }

    public static function showSuccessMessage($message = 'operation succeeded', $data=[]): array
    {
        return [
            'code' => 200,
            'data' => $data,
            'message' => $message
        ];
    }
}
