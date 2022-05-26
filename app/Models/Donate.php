<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donate extends Model
{
    use HasFactory;
    protected $fillable = [
                'age',
                'title',
                'first_name',
                'middle_name',
                'family_name',
                'num_street_name',
                'suburb',
                'state',
                'post_code',
                'email',
                'home_phone_num',
                'mobile_phone_num',
                'work_phone_num',
                'applicant_signature',
                'applicant_date',
                'nominator_full_name',
                'nominator_membership_no',
                'nominator_signature',
                'nominator_date',
                'seconder_full_name',
                'seconder_membership_no',
                'seconder_signature',
                'seconder_date'
    ];
}
