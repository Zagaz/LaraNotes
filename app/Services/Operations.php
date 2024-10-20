<?php

namespace App\Services;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;




class Operations
{
    /*
    * Decrypt any cripted value
    * @param string $cripto
    * @return int
    * @throws DecryptException
    * @since 1.0
    *
    * Last update: 2021.09.27
    */
    public static function decryptId($cripto)
        {
        try {
            $id = Crypt::decrypt($cripto);
        } catch (DecryptException $e) {
      
            return null;

        }
        return $id;
    }



}
