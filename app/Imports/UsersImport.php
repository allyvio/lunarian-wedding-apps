<?php

namespace App\Imports;

use App\Models\Invitation;
use App\Models\Wedding;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
class UsersImport implements ToModel, WithHeadingRow
{
    use Importable;
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    
    public function model(array $row)
    {
        return new Invitation([
            'code'=>  Str::random(6),
            'wedding_id' => Wedding::where('user_id', Auth::user()->id)->first()->id,
            'name' => $row['name'],
            'phone' => '0'.$row['phone'],
            'slug' => Str::slug($row['name'])
        ]);
    }
}
