<!DOCTYPE html>
<html>

<head>
    <title>Detail Produk</title>
</head>

<body>
    <h1>{{ $product['name'] }}</h1>
    <p>Harga: Rp{{ number_format($product['price'], 0, ',', '.') }}</p>i

    <br>
    <a href="{{ route('products.index') }}"> Kembali ke Daftar Produk</a> |
    
</body>

</html>