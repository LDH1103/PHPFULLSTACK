<?php

namespace App\Lib;

use Exception;
use Illuminate\Support\Facades\Log;
use Throwable;

class JWT {
    protected $alg = 'SHA256';
    protected $secret_key = 'php506';

    /*
        JWT 생성
    */
    public function createJWT(Array $data) {
        Log::debug('------ createJWT Start ------');

        // header 작성
        $header_json = json_encode([
            'alg'   => $this->alg
            ,'typ'  => 'JWT'
        ]);

        $header = base64_encode($header_json);

        Log::debug('header : ' . $header);

        // payload 작성 (user정보나 필요한 정보가 담겨있는 부분)
        $iat = time(); // 발급시간
        $exp = $iat + 60; // 유효기간
        $payload_json = json_encode([
            'id'    => $data['id']
            ,'iat'  => $iat
            ,'exp'  => $exp
        ]);

        $payload = base64_encode($payload_json);

        Log::debug('payload : ' . $payload);

        // signature 작성
        $signature = hash($this->alg, $header . $payload . $this->secret_key);

        Log::debug('signature : ' . $signature);

        Log::debug('------ createJWT End ------');
        return $header . '.' . $payload . '.' . $signature;
    }

    public function chkToken($token) {
        Log::debug('------ chkToken Start ------');
        try {
            // 토큰을 분리
            $arr_token = explode('.', $token);

            $header = $arr_token[0];
            $payload = $arr_token[1];
            $signature = $arr_token[2];
            Log::debug('signature : ' . $signature);

            // 토큰 유효기간 확인
            $arr_payload = json_decode(base64_decode($payload));
            if (time() < $arr_payload->exp) {
                return new Exception('exp 초과');
            }

            // 검증용 시그니처 생성
            $verify = hash($this->alg, $header . $payload . $this->secret_key);
            Log::debug('verify : ' . $verify);

            if ($signature !== $verify) {
                return new Exception('signature 다름');
            }

        } catch (Exception $e) {
            Log::debug('Error : ' . $e->getMessage());
            return false;
        } finally {
            Log::debug('------ chkToken End ------');
        }
    }
}
