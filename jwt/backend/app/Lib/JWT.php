<?php

namespace App\Lib;

use Exception;
use Illuminate\Support\Facades\Log;
use Throwable;

class JWT {
    protected $alg = 'SHA256';
    protected $secret_key = 'php506';

    // 에러 메세지(보통은 설정 파일에 작성함)
    protected $error_base = [
        'E01'   => 'Not set Token'
        ,'E02'  => 'Unknown form Token'
        ,'E03'  => 'Unauthorization Token'
        ,'E04'  => 'Expirted Token'
        ,'E99'  => 'System Error'
    ];

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
        return base64_encode($header . '.' . $payload . '.' . $signature);
    }

    public function chkToken($token) {
        Log::debug('------ chkToken Start ------');

        try {
            // 토큰 유무 체크
            if ($token === '') {
                throw new Exception('E01');
            }

            // 토큰 디코딩
            $decode_token = base64_decode($token);

            // 토큰을 분리
            $arr_token = explode('.', $decode_token);

            // 토큰 형태 체크
            if (count($arr_token) !== 3) {
                throw new Exception('E02');
            }

            $header = $arr_token[0];
            $payload = $arr_token[1];
            $signature = $arr_token[2];

            Log::debug('signature : ' . $signature);

            // 토큰 유효기간 확인
            $arr_payload = json_decode(base64_decode($payload));
            if (time() < $arr_payload->exp) {
                throw new Exception('E04');
            }

            // 검증용 시그니처 생성
            $verify = hash($this->alg, $header . $payload . $this->secret_key);
            Log::debug('verify : ' . $verify);

            if ($signature !== $verify) {
                throw new Exception('E03');
            }

        } catch (Exception $e) {
            // 예외 코드 확인
            // $code = array_key_exists($e->getMessage(), $this->error_base) ? $e->getMessage() : 'E99';

            // $error_info = [
            //     'code' => $code
            //     ,'msg' => $this->error_base[$code]
            // ];

            // Log::debug('Error : ' . $code);

            // return $error_info;

            return $this->create_error_info($e->getMessage());
        } finally {
            Log::debug('------ chkToken End ------');
        }

        return '';
    }

    /*
     * 메소드명 : create_error_info
     * 기능     : 에러정보 배열 작성
     * 파라미터 : String    $error_code
     * 리턴     : Array     $error_info
     */
    public function create_error_info($error_code) {
        $code = array_key_exists($error_code->getMessage(), $this->error_base) ? $error_code->getMessage() : 'E99';

        $error_info = [
            'code' => $code
            ,'msg' => $this->error_base[$code]
        ];

        Log::debug('Error : ' . $code);

        return $error_info;
    }
}
