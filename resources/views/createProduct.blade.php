<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <section style="padding-top: 70px;" id="hero">
        <div class="container">
          <div class="row">
              <div class="card " data-aos="zoom-in">
                  <form method="POST" action="" enctype="multipart/form-data" >
                      <div style="padding-top: 10px;">
                      @csrf
                      <div style="max-width: 600px; margin: 0 auto;">
                        <table class="pt-5" style="width: 100%;">
  
                          <tr>
                            <td><label for="judul">Nama Produk:</label></td>
                            <td><input type="text" id="judul" name="judul" required style="margin-bottom: 10px;" ></td>
                          </tr>
                          <tr>
                            <td><label for="image" class="form-label">Gambar Produk:</label></td>
                            <td><input class="form-control" type="file" id="image" name="image" style=" margin-bottom: 10px;"></td>
                            
                          </tr>
                          <tr>
                            <td><label for="paragraf1">Deskripsi Produk:</label></td>
                            <td><textarea id="paragraf1" name="paragraf1" style="width: 100%; height: 100px; margin-bottom: 10px;"></textarea></td>
                          </tr>
                          <tr>
                            <td><label for="paragraf2">Harga Produk:</label></td>
                            <td><input type="number" id="paragraf2" name="paragraf2" style="width: 100%;  margin-bottom: 10px;"></input></td>
                          </tr>
                          <tr>
                            <td><label for="paragraf3">Link Shopee:</label></td>
                            <td><input type="url" id="paragraf3" name="paragraf3" style="width: 100%; margin-bottom: 10px;"></url></td>
                          </tr>
                          <tr>
                            <td><label for="paragraf4">Link Toko Pedia:</label></td>
                            <td><input type="url" id="paragraf4" name="paragraf4" style="width: 100%; margin-bottom: 10px;"></input></td>
                          </tr>
                          <tr>
                            <td><label for="paragraf5">Paragraf 5:</label></td>
                            <td><textarea id="paragraf5" name="paragraf5" style="width: 100%; height: 100px; margin-bottom: 10px;"></textarea></td>
                          </tr>
                          
                        </table>
                      </div>
                      </div>
                      <div class="pt-3 pb-3 d-flex justify-content-center">
                          <button class="btn btn-primary" type="submit">Simpan</button>
                      </div>
                    </form>
              </div>
          </div>
        </div>
  </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>