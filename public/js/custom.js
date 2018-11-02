function informasi(tipe, pesan) {
	var judul = "<b><i class='fa fa-info-circle'></i>&nbsp;Informasi</b>";
	if(tipe == BootstrapDialog.TYPE_WARNING) {
		judul = "<b><i class='fa fa-exclamation-circle'></i>&nbsp;Kesalahan</b>";
	} else if(tipe == BootstrapDialog.TYPE_DANGER) {
		judul = "<b><i class='fa fa-times-circle'></i>&nbsp;Gagal</b>";
	} else if(tipe == BootstrapDialog.TYPE_SUCCESS) {
		judul = "<b><i class='fa fa-check-circle'></i>&nbsp;Berhasil</b>";
	}
	BootstrapDialog.show({
		"type": tipe,
		"title": judul,
		"message": pesan,
		"buttons": [{
			"icon": "fa fa-check",
			"label": "OK",
			"action": function(dialogRef) {
				dialogRef.close();
			}
		}]
	});
}
function tombol(aksi, jenis) {
	if(aksi == 0) {
		if(jenis == 0) {
			$(".close").hide();
			$(".btn-simpan").attr("disabled", "disabled");
			$(".btn-simpan").html("<i class='fa fa-spinner fa-spin'></i>");
		} else if(jenis == 1) {
			$(".btn-hapus").attr("disabled", "disabled");
			$(".btn-hapus").html("<i class='fa fa-spinner fa-spin'></i>");
		}
		$(".btn-tutup").attr("disabled", "disabled");
	} else if(aksi == 1) {
		if(jenis == 0) {
			$(".close").show();
			$(".btn-simpan").html("<i class='fa fa-save'></i>&nbsp;Simpan");
			$(".btn-simpan").removeAttr("disabled");
		} else {
			$(".btn-hapus").html("<i class='fa fa-trash'></i>&nbsp;Hapus");
			$(".btn-hapus").removeAttr("disabled");
		}
		$(".btn-tutup").removeAttr("disabled");
	}
}
