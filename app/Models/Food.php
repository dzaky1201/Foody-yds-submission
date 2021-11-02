<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{

    public static $foodData = [
        [
            "id" => 1,
            "title" => "Nasi Goreng",
            "base_price" => 15000,
            "picture_url" => "/img/img-1.jpeg",
            "categories" => ["food", "rice"],
            "description" => "Nasi goreng spesial dengan 2 telur"
        ],
        [
            "id" => 2,
            "title" => "Mie Goreng",
            "base_price" => 13000,
            "picture_url" => "/img/img-2.webp",
            "categories" => ["food", "noodle"],
            "description" => "Mie goreng spesial dengan 1 telur dan potongan ayam"
        ],
        [
            "id" => 3,
            "title" => "Kwetiau Rebus",
            "base_price" => 13000,
            "picture_url" => "/img/img-3.jpg",
            "categories" => ["food", "noodle"],
            "description" => "Kwetiau rebus spesial dengan 1 telur ayam & potongan harga"
        ],
        [
            "id" => 4,
            "title" => "Nasi Bakar",
            "base_price" => 10000,
            "picture_url" => "/img/img-4.jpg",
            "categories" => ["food", "rice"],
            "description" => "Dibakar dengan penuh cinta untuk orang yang lapar kasih sayang"
        ],
        [
            "id" => 5,
            "title" => "Internet",
            "base_price" => 11000,
            "picture_url" => "/img/img-5.jpg",
            "categories" => ["food", "noodle"],
            "description" => "Menu favorit para mahasiswa di awal, tengah, dan akhir jam kuliah"
        ],
        [
            "id" => 6,
            "title" => "Es Teh Manis",
            "base_price" => 3000,
            "picture_url" => "/img/img-6.jpeg",
            "categories" => ["drink", "tea"],
            "description" => "Pelepas dahaga di tengah pahitnya kehidupan"
        ],
        [
            "id" => 7,
            "title" => "Es Jeruk",
            "base_price" => 4000,
            "picture_url" => "/img/img-7.jpg",
            "categories" => ["drink", "orange"],
            "description" => "Boleh pesen pake gula atau gak pake gula, yang penting kamu bahagia"
        ],
        [
            "id" => 8,
            "title" => "Es Campur Sultan",
            "base_price" => 10000,
            "picture_url" => "/img/img-8.jpeg",
            "categories" => ["drink", "sweet"],
            "description" => "Cuma buat sultan, soalnya dicampurin sama emas, emas yanto (yg jual)"
        ],
    ];
}
