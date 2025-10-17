import turtle

# Setup layar turtle
wn = turtle.Screen()
wn.bgcolor("black")  # Latar belakang hitam
wn.title("Animasi Garis Hati")

# Membuat objek turtle
pen = turtle.Turtle()
pen.speed(0)  # Kecepatan maksimum
pen.color("red")  # Warna garis hati
pen.width(2)

# Fungsi untuk menggambar hati dengan garis
def draw_heart():
    pen.penup()  # Mengangkat pena sebelum bergerak
    pen.goto(0, -200)  # Mengatur posisi awal
    pen.pendown()  # Menurunkan pena untuk menggambar
    pen.setheading(140)  # Memutar turtle ke posisi awal

    # Loop untuk menggambar garis hati
    for _ in range(200):  # Menggambar 200 garis
        pen.forward(1)  # Bergerak maju sedikit
        if _ < 100:  # Bagian pertama (lingkaran kiri)
            pen.left(1)  # Memutar ke kiri
        else:  # Bagian kedua (lingkaran kanan)
            pen.right(1)  # Memutar ke kanan
    pen.setheading(0)  # Mengatur ulang arah turtle ke kanan

# Menggambar hati dengan garis yang bergerak cepat
for _ in range(36):  # Ulangi untuk membuat animasi
    draw_heart()
    pen.clear()  # Menghapus gambar sebelumnya
    pen.right(10)  # Rotasi sedikit untuk efek bergerak

# Menyembunyikan turtle setelah selesai
pen.hideturtle()

# Menjaga jendela terbuka sampai ditutup
wn.mainloop()
