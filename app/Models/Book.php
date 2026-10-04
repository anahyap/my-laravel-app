<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public $title;
    public $author;
    public $year;

    public function __construct($title = "", $author = "", $year = "")
    {
        $this->title = $title;
        $this->author = $author;
        $this->year = $year;
    }

    public function toString()
    {
        return $this->title . " by " . $this->author . " (" . $this->year . ")";
    }
}