# Halaman Login
def login(username, password):
    user = ['Danu', 'Danu123']

    if user[0] == username:

        if user[1] == password:
            return 1

        else:
            print("password anda salah")

    else:
        print('Username anda salah')


def knapSack(Barang, Kapasitas, Berat, Poin):
    n = list(range(len(Barang)))

    max_value = 0
    for i in n:
        if Berat[i] <= Kapasitas:
            print("Barang yang memiliki nilai maximal : ", Barang[i])
            print("Dengan Berat : ", Berat[i])
            print("Dan Poin : ", Poin[i])
            max_value += Poin[i]
            Kapasitas -= Berat[i]
            print("Kapasitas tersisa di tas saat ini: ", Kapasitas, "\n")

        else:
            max_value += Poin[i]*Kapasitas/Berat[i]
            break

    return max_value


def tampilanAwal(Barang, Berat, Poin):
    n = len(Barang)
    no = 0
    print("="*40)
    print(" No   Nama    Berat    Poin")
    for i in range(n):
        no += 1
        print(no, ".  ", Barang[i], "\t", Berat[i], "\t", Poin[i])
    print("="*40)
    print("\n")
    print("Menu : \n 1.Tambah data\n 2.Hapus data\n 3.Hitung data\n 4.Hapus seluruh data\n\n0.Exit")


# Nambah Data
def tambahData():
    global barangBaru, beratBaru, poinbaru

    barangBaru = input(
        "Silahkan masukkan nama barang anda, dipisahkan dengan (spasi) : ").split()
    barangBaru = [str(ba) for ba in barangBaru]

    beratBaru = input(
        "Silahkan berat dari barang anda, dipisahkan dengan (spasi) : ").split()
    beratBaru = [int(be) for be in beratBaru]

    poinbaru = input(
        "Tentukan nilai poin dari barang tersebut, dipisahkan dengan (spasi) : ").split()
    poinbaru = [int(po) for po in poinbaru]

    print("Data baru berhasil ditambahkan")
    return barangBaru, beratBaru, poinbaru


# Main Program
if __name__ == "__main__":
    print("="*50)
    username = input('Masukkan username anda : ')
    password = input('Masukkan password anda : ')

    if login(username, password) == 1:
        Barang = []
        Berat = []
        Poin = []

    while True:
        tampilanAwal(Barang, Berat, Poin)
        choice = int(input("Masukkan angka pilihan anda : "))

        if choice == 1:
            tambahData()
            Barang = barangBaru
            Berat = beratBaru
            Poin = poinbaru

        elif choice == 2:
            pilih = input("masukkan nama data yang ingin dihapus : ")
            Barang.remove(pilih)

        elif choice == 3:
            Kapasitas = int(
                input("Masukkan Berat maksimal yang dapat ditampung : "))

            max_value = knapSack(Barang, Kapasitas, Berat, Poin)
            print("Poin barang yang terkumpul ditas adalah : ", max_value)

        elif choice == 4:
            pilih = str(input("Apakah anda yakin? Y/T  "))
            if pilih == 'Y' or pilih == "y":
                Barang.clear()
            elif pilih == 'T' or pilih == "t":
                print("Opsi dibatalkan")
            else:
                print("Tidak dapat menemukan opsi")
        elif choice == 0:
            print("Program selesai")
            break
        else:
            print("Tidak dapat memuat opsi")
