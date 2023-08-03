<?php

namespace App\Imports;

use App\User;
use App\StudentProfile;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithUpserts;
use Maatwebsite\Excel\Concerns\RemembersRowNumber;



class UsersImport implements ToModel,WithHeadingRow,WithChunkReading,WithBatchInserts
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    use RemembersRowNumber;

    public function model(array $row)
    {
        $currentRowNumber = $this->getRowNumber();
       // $row->ignoreEmpty();
        return new User([
            'name'=>$row['name'],
            'email'=>$row['email'],
            'user_type'=>$row['user_type'],
            'mobile'=>$row['mobile'],
            //'gender'=>$row['gender'],
            'ref_code'=>$row['ref_code'],
            'password'=>Hash::make($row['password']),
            'state'=>$row['state'],            
            'course'=>$row['course'],

        ]);
        
            Mail::to($row['email'])->send(new StudentRegistered($row['name']));

    }
    public function chunkSize(): int
    {
        return 100;
    }
    public function batchSize(): int
    {
        return 100;
    }
    public function uniqueBy()
    {
        return 'email';
    }
}
