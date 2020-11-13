<?php

namespace App\Models; // 名前空間：ファイルの居場所を示す

use Illuminate\Database\Eloquent\Model;

// 今後データベースを扱いたいと思った場合は
// Blogを操作すればよし！
class Blog extends Model
{
    // テーブル名
    protected $table = 'blogs'; // テーブル名とblogsが紐つける

    // 可変項目 つまり 保存したい項目
    protected $fillable =
    [
        'title',
        'content'
    ];
}
