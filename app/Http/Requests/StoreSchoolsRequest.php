<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class StoreSchoolsRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
                  'name'  => 'required', 
                  'code'  => 'required', 
                  'address'  => 'required', 
                  'city_id'  => 'required', 
                  'tel'  => 'required', 
                  'sch_email'  => 'required',
                  'require_id'  => 'required', 
        ];
    }
    
    public function messages()
    {
        return [         
                  'name'  => 'กรุณากรอกชื่อโรงเรียน', 
                  'code'  => 'กรุณากรอกรหัสโรงเรียน',
                  'address'  => 'กรุณากรอกที่อยู่โรงเรียน', 
                  'city_id'  => 'กรุณาเลือกจังหวัด', 
                  'tel'  => 'กรุณากรอกเบอร์โทรศัพ์โรงเรียน', 
                  'sch_email'  => 'กรุณากรอกอีเมลโรงเรียน',
                  'require_id'  => 'กรุณาเลือกความต้องการของโรงเรียน',        
        ];
    }
}
