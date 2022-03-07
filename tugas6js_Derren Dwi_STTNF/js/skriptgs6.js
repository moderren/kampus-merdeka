function angka1() {
    let frm = document.getElementById("Calculator");
    frm.angka1.value = "";
  }
  function angka2() {
    let frm = document.getElementById("Calculator");
    frm.angka2.value = "";
  }
  
  function tambah() {
    let frm = document.getElementById("Calculator");
    let satu = frm.angka1.value;
    let dua = frm.angka2.value;
  
    //jika inputan salah
    if (isNaN(satu) || (satu == "" && isNaN(dua)) || dua == "") {
      alert("Harap isi data berupa angka");
    } else {
      //jika inputan benar
      let total = parseInt(satu) + parseInt(dua);
      frm.hasil.value = total;
    }
  }
  function kurang() {
    let frm = document.getElementById("Calculator");
    let satu = frm.angka1.value;
    let dua = frm.angka2.value;
  
    //jika inputan salah
    if (isNaN(satu) || (satu == "" && isNaN(dua)) || dua == "") {
      alert("Harap isi data berupa angka");
    } else {
      //jika inputan benar
      let total = parseInt(satu) - parseInt(dua);
      frm.hasil.value = total;
    }
  }
  function kali() {
    let frm = document.getElementById("Calculator");
    let satu = frm.angka1.value;
    let dua = frm.angka2.value;
  
    //jika inputan salah
    if (isNaN(satu) || (satu == "" && isNaN(dua)) || dua == "") {
      alert("Harap isi data berupa angka");
    } else {
        
      //jika inputan benar
      let total = parseInt(satu) * parseInt(dua);
      frm.hasil.value = total;
    }
  }
  function bagi() {
    let frm = document.getElementById("Calculator");
    let satu = frm.angka1.value;
    let dua = frm.angka2.value;
  
    //jika inputan salah
    if (isNaN(satu) || (satu == "" && isNaN(dua)) || dua == "") {
      alert("Data masih kosong");
    } else {
      //jika inputan benar
      let total = parseInt(satu) / parseInt(dua);
      frm.hasil.value = total;
    }
  }
  function pangkat() {
    let frm = document.getElementById("Calculator");
    let satu = frm.angka1.value;
    let dua = frm.angka2.value;
  
    //jika inputan salah
    if (isNaN(satu) || (satu == "" && isNaN(dua)) || dua == "") {
      alert("Harap isi data berupa angka");
    } else {

      //jika inputan benar
      let total = parseInt(satu) ** parseInt(dua);
      frm.hasil.value = total;
    }
  }
  
  function kosong() {
    let frm = document.getElementById("Calculator");
    frm.angka1.value = "";
    frm.angka2.value = "";
    frm.hasil.value = "";
  }