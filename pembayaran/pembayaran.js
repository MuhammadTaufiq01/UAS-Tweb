function bayar(){
    var ketik = prompt("Ketik BAYAR", "");
  if (ketik == "BAYAR") {
    alert("Pembayaran Berhasil. Lihat riwayat pembayaran di menu user.");
    header("location: ../home.php");
  } else {
    alert("Pembayaran Batal. Anda akan kembali ke halaman utama.");
    header("location: ../home.php");
  }
}