<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

        /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'description',
        'description',
        'tags',
        'picture',
        'category_id',
    ];

    public function createProduct($request) {
        $data = $request->all();
        $data['picture'] = $this->upload($request);
        return $this->create($data);
    }

    public function updateProduct($request) {
        $data = $request->all();
        $data['picture'] = $this->upload($request);
        return $this->update($data);
    }

    private function upload($request){
        $path = $request->hasFile('picture') ? $request->file('picture')->store('public'): '';
        return $path;
    }

    /**
     * Get the category.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
