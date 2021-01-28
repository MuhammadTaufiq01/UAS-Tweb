var val;
function pilihan() {
	var e = parseInt(document.getElementById("pilih-desain").selectedIndex);
	switch (e) {
		case 1:
			val = 150000;
			break;
		case 2:
			val = 80000;
			break;
		case 3:
			val = 40000;
			break;
		case 4:
			val = 30000;
			break;
		case 5:
			val = 500000;
			break;
	}
	document.getElementById("harga").innerHTML = val;
}



function hasil() {
	var jumlah = parseInt(document.getElementById("jumlah").value);
	var total = val * jumlah;
	document.getElementById("total").innerHTML = total;
	var dis = 0.10;
	var bayar;
	if (total > 100000) {
		bayar = total - (total * dis);
		document.getElementById("bayar").innerHTML = bayar;
		document.getElementById("dis").innerHTML = "10%";
	}
	else {
		document.getElementById("bayar").innerHTML = total;
		document.getElementById("dis").innerHTML = "tidak ada";
	}
}
