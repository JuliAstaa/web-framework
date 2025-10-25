<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public $products;

    function __construct()
    {
        $this->products = [
            [
                "id" => 1,
                "nama" => "Lenovo Ideapad Gaming 3",
                "harga" => 15000000,
                "stok" => 5,
                "detail" =>
                    "Laptop gaming dengan prosesor AMD Ryzen 5, RAM 16GB, SSD 512GB, dan GPU RTX 3050. Cocok buat ngoding dan gaming santai.",
                "urlphoto" =>
                    "https://sinar-mulia.co.id/wp-content/uploads/2023/12/82K2027FID.jpg",
                "jenis" => "Laptop",
            ],
            [
                "id" => 2,
                "nama" => "Samsung A55 5G",
                "harga" => 6999999,
                "stok" => 0,
                "detail" =>
                    "Smartphone 5G dengan layar Super AMOLED 120Hz, RAM 8GB, storage 256GB, dan kamera utama 50MP.",
                "urlphoto" =>
                    "https://sosialita.tanahlautkab.go.id/assets/uploads/webp/fotoproduk/crop/EVW5uXiz20241116100312.png.webp",
                "jenis" => "Handphone",
            ],
            [
                "id" => 3,
                "nama" => "Lenovo Ideapad Slim",
                "harga" => 10000000,
                "stok" => 3,
                "detail" =>
                    "Laptop tipis dan ringan dengan prosesor Intel i5 Gen-12, RAM 8GB, SSD 512GB. Ideal buat kerja dan kuliah.",
                "urlphoto" =>
                    "https://els.id/wp-content/uploads/2023/10/Lenovo-IdeaPad-Slim-3.png",
                "jenis" => "Laptop",
            ],
            [
                "id" => 4,
                "nama" => "Samsung J2 Prime",
                "harga" => 2000000,
                "stok" => 2,
                "detail" =>
                    "HP legendaris dengan desain klasik, RAM 1.5GB, storage 8GB, dan kamera depan LED flash.",
                "urlphoto" =>
                    "https://images.tokopedia.net/img/cache/500-square/product-1/2019/7/2/3621625/3621625_50786f79-cda4-4941-9479-533722f84c5a_700_700.jpg",
                "jenis" => "Handphone",
            ],
            [
                "id" => 5,
                "nama" => "Macbook Air M4",
                "harga" => 24000000,
                "stok" => 7,
                "detail" =>
                    "Laptop premium Apple dengan chip M4, RAM 16GB, SSD 512GB, dan daya tahan baterai hingga 18 jam.",
                "urlphoto" =>
                    "https://pegastore.id/media/product_image/1751533288-macbook-air-mw0w3id-(2).jpg",
                "jenis" => "Laptop",
            ],
        ];
    }
    public function index()
    {
        $products = $this->products;

        $allJenis = array_column($products, "jenis");
        $uniqueJenis = array_unique($allJenis);

        return view("product.product", [
            "title" => "Product",
            "products" => $products,
            "jenis" => $uniqueJenis,
        ]);
    }

    public function show(int $id)
    {
        $product = $this->products[$id - 1];
        return view("product.detail", [
            "title" => "Detail Product",
            "product" => $product,
        ]);
    }

    public function showByJenis($jenis)
    {
        $products = $this->products;
        $filteredProducts = array_filter($products, function ($product) use (
            $jenis,
        ) {
            return $product["jenis"] === $jenis;
        });
        return view("product.product", [
            "title" => "Product Jenis " . $jenis,
            "products" => $filteredProducts,
            "jenis" => [$jenis],
        ]);
    }
}
