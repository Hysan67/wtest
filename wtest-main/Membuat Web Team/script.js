document.addEventListener("DOMContentLoaded", function () {
    const urlParams = new URLSearchParams(window.location.search);
    const pesanButtons = document.querySelectorAll(".pesan-btn");

    pesanButtons.forEach(button => {
        button.addEventListener("click", function () {
            const nama = button.getAttribute("data-nama");
            const gambar = button.getAttribute("data-gambar");

            localStorage.setItem("namaProduk", nama);
            localStorage.setItem("gambarProduk", gambar);
        });
    });

    const nama_produk = document.getElementById("nama_produk");

    const nama = localStorage.getItem("namaProduk");

    if (nama_produk && nama) {
        nama_produk.innerHTML = `
            <div>
                <h4>${nama}</h4>
            </div>
        `;
    }

    const btnPesan = document.getElementById('btnPesan');
    btnPesan.addEventListener('click', function() {
        if (count > 0) {
            alert(`Terima kasih telah memesan ${count} ${nama}! Pesanan Anda akan segera diproses.`);
            window.location.href = 'Produk.html';
        } else {
            alert('Silakan tentukan jumlah produk yang ingin dipesan terlebih dahulu.');
        }
    });
});

const countElement = document.getElementById('count');
const incrementBtn = document.getElementById('increment');
const decrementBtn = document.getElementById('decrement');

let count = 0;

incrementBtn.addEventListener('click', () => {
  count++;
  countElement.textContent = count;
});

decrementBtn.addEventListener('click', () => {
  if (count > 0) {
    count--;
    countElement.textContent = count;
  }
});

const gambar = localStorage.getItem("gambarProduk");
if (gambar) {
  document.getElementById("preview-gambar").src = gambar;
}

