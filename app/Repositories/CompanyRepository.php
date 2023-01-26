<?php

namespace App\Repositories;

use App\Interfaces\CompanyInterface;
use App\Models\Company;

class CompanyRepository implements CompanyInterface
{
    public function getCompanies()
    {
        return Company::all();
    }

}
