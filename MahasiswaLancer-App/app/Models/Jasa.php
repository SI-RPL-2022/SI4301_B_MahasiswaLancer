<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use function PHPSTORM_META\type;

class Jasa extends Model
{
    use HasFactory;

    protected $table = 'jasas';
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'userId',
        'judul',
        'harga',
        'deskripsi',
    ];

    public function File()
    {
        return $this->hasMany('file');
    }

    public static function insertJasa($dataJasa)
    {
        
        $jasa['userId'] = $dataJasa[0];
        $jasa['judul'] = $dataJasa[1];
        $jasa['harga'] = (int) $dataJasa[2];
        $jasa['deskripsi'] = $dataJasa[3];
        $id_jasa = Jasa::create($jasa);
        return $id_jasa->id;
    }

}
