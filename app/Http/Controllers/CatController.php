<?php

namespace App\Http\Controllers;

class CatController extends Controller
{
    private $cats = [

        [
            'id' => 1,
            'nama' => 'Persia',
            'asal' => 'Iran',
            'gambar' => 'images/persia.jpeg',
            'deskripsi' => 'Kucing Persia terkenal dengan bulunya yang panjang, wajah bulat, dan sifat yang tenang serta penyayang.'
        ],

        [
            'id' => 2,
            'nama' => 'Anggora',
            'asal' => 'Turki',
            'gambar' => 'images/anggora.jpeg',
            'deskripsi' => 'Kucing Anggora memiliki tubuh ramping, bulu halus, dan sangat aktif bermain.'
        ],

        [
            'id' => 3,
            'nama' => 'Maine Coon',
            'asal' => 'Amerika Serikat',
            'gambar' => 'images/mainecoon.jpeg',
            'deskripsi' => 'Maine Coon merupakan salah satu ras kucing terbesar di dunia dengan sifat yang ramah.'
        ],

        [
            'id' => 4,
            'nama' => 'Siam',
            'asal' => 'Thailand',
            'gambar' => 'images/siam.jpeg',
            'deskripsi' => 'Kucing Siam terkenal dengan mata birunya yang indah dan sifatnya yang komunikatif.'
        ],

        [
            'id' => 5,
            'nama' => 'Bengal',
            'asal' => 'Amerika Serikat',
            'gambar' => 'images/bengal.jpeg',
            'deskripsi' => 'Kucing Bengal memiliki pola bulu seperti macan tutul dan sangat energik.'
        ],

        [
            'id' => 6,
            'nama' => 'Ragdoll',
            'asal' => 'Amerika Serikat',
            'gambar' => 'images/ragdoll.jpeg',
            'deskripsi' => 'Ragdoll dikenal sebagai kucing yang lembut, santai, dan suka digendong.'
        ],

        [
            'id' => 7,
            'nama' => 'Sphynx',
            'asal' => 'Kanada',
            'gambar' => 'images/sphynx.jpeg',
            'deskripsi' => 'Sphynx merupakan ras kucing unik yang hampir tidak memiliki bulu.'
        ],

        [
            'id' => 8,
            'nama' => 'British Shorthair',
            'asal' => 'Inggris',
            'gambar' => 'images/britishshorthair.jpeg',
            'deskripsi' => 'British Shorthair memiliki tubuh besar, bulu tebal, dan sifat yang tenang.'
        ],

        [
            'id' => 9,
            'nama' => 'Scottish Fold',
            'asal' => 'Skotlandia',
            'gambar' => 'images/scottishfold.jpeg',
            'deskripsi' => 'Scottish Fold terkenal dengan telinganya yang melipat ke depan dan wajahnya yang menggemaskan.'
        ],

        [
            'id' => 10,
            'nama' => 'Birman',
            'asal' => 'Myanmar',
            'gambar' => 'images/birman.jpeg',
            'deskripsi' => 'Birman memiliki bulu panjang yang lembut dan mata biru yang indah.'
        ],

        [
            'id' => 11,
            'nama' => 'Russian Blue',
            'asal' => 'Rusia',
            'gambar' => 'images/russianblue.jpeg',
            'deskripsi' => 'Russian Blue memiliki bulu abu-abu kebiruan yang elegan dan sifat yang lembut.'
        ],

        [
            'id' => 12,
            'nama' => 'Egyptian Mau',
            'asal' => 'Mesir',
            'gambar' => 'images/egyptian.jpeg',
            'deskripsi' => 'Egyptian Mau adalah salah satu ras kucing tertua yang memiliki pola bintik alami dan kecepatan lari yang tinggi.'
        ]

    ];

    public function home()
    {
        return view('home');
    }

    public function index()
    {
        return view('cats.index', [
            'cats' => $this->cats
        ]);
    }

    public function detail($id)
    {
        $cat = collect($this->cats)->firstWhere('id', $id);

        return view('cats.detail', [
            'cat' => $cat
        ]);
    }
}