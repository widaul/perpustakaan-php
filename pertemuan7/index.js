// menampilkan sebuah data
console.log("Widda");

// deklarasi variable
// var, let, const

// deklarasi menggunakan const, nilainya gaboleh diubah
let nama = "Praktikum web 4c SI"
console.log(nama);

// manipulasi DOM (JS)

// event: aksi, kejadian, peristiwa, dll
// event dalam web: click, double-click, keyboard-pressed, 

// listener : bertugas untuk melakukan sesuatu apabila ada event yang terjadi
// contoh: button diklik, ubah background jadi warna hiam
// diklik = event
// ubah background jadi warna hitam = listener

// variabel ini menyimpan tombol di HTML
const tombolSaya = document.querySelector(".tombol-saya")



// memberikan listener ke tombol tersebut
tombolSaya.addEventListener("click", function(){
    
    // mengubah background jadi warna hitam ketika diklik
document.body.style.backgroundColor ="Black"

myFunction();


})

function myFunction() {
    var element = document.getElementsByClassName("welcome");
    element.classList.toggle("welcome");
 

 }

