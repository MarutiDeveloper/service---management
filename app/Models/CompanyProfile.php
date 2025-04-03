<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyProfile extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_name', 
        'company_logo', 
        'company_tagline', 
        'website_url', 
        'industry_type', 
        'company_description', 
        'phone_number', 
        'email_address', 
        'fax_number', 
        'office_address', 
        'social_media_links',
    ];

}
