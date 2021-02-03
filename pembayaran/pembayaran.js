function bayar(){
    var ketik = prompt("Ketik BAYAR", "");
  if (ketik == "BAYAR") {
    alert("Pembayaran Berhasil. Lihat riwayat pembayaran di menu user.");
    header("location: ../home.php");
  } else {
    alert("Anda belum memasukkan metode pembayaran.");
    // header("location: ../home.php");
  }
}