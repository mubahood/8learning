<?php

namespace App\Models;

use Dflydev\DotAccessData\Util;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SMSIntergration extends Model
{
    use HasFactory;

    //boot
    protected static function boot()
    {
        parent::boot();
        static::creating(function ($sms_intergration) {
            $phone = Utils::prepare_phone_number($sms_intergration->receiver);
            if (!Utils::phone_number_is_valid($phone)) {
                throw new \Exception("Invalid phone number: $phone");
            }
            $message = trim($sms_intergration->message);

            if (empty($message)) {
                throw new \Exception("Message is empty");
            }

            $resp = Utils::send_sms($phone, $message);
            $sms_intergration->response = $resp;
            if (strlen($resp) == 'success') {
                $sms_intergration->status = 'success';
            } else {
                $sms_intergration->status = 'failed';
            }
            $sms_intergration->status = $resp;
            $sms_intergration->receiver = $phone;
            return true;
        });

        //updating
        static::updating(function ($sms_intergration) {});
    }
}
