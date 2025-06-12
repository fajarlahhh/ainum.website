<?php

namespace App\Models\Pelayanan;

use Laravel\Sanctum\PersonalAccessToken as SanctumPersonalAccessToken;

class PersonalAccessToken extends SanctumPersonalAccessToken
{
    protected $table = 'pelayanan.ainum.personal_access_tokens';
}
