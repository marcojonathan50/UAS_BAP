CREATE VIEW jlhProdukPromo AS SELECT tabel.productid as Produk_ID, 
product.Nama as Nama_Produk, promo.nama_promo as Nama_Promo, 
promo.deskripsi_promo as Deskripsi_Promo, 
promo.diskon as Diskon FROM form_transactions tabel 
LEFT JOIN formpromos promo on promo.id = tabel.Promo_ID 
LEFT JOIN form_products product on product.id = tabel.productid