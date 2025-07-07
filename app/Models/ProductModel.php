<?php 
namespace App\Models;

use CodeIgniter\Model;

// Model adalah jembatan antara controller dan database.



// fungsi ini akan bekerja dengan tabel database bernama product
class ProductModel extends Model
{
	// menyimpan nama table
	protected $table = 'product'; 
	// menyimpan field yang menjadi primary key.
	protected $primaryKey = 'id';
	// berisi daftar nama field yang diperbolehkan untuk dimanipulasi oleh project
	protected $allowedFields = [
		'nama','harga','jumlah','foto','created_at','updated_at'
	];  
}