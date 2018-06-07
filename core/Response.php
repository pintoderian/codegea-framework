<?php
namespace Core;

use Symfony\Component\HttpFoundation\Response as RespSyn;
use Symfony\Component\HttpFoundation\JsonResponse;

class Response extends RespSyn{
    public static function json($data, $status){
        $response = new JsonResponse($data, $status);
        return $response;
    }
}