def knapsack(value, weight, capacity):
    index = list(range(len(value)))
    ratio = [v/w for v, w in zip(value, weight)]
    print("Ratio", ratio)
    index.sort(key=lambda i: ratio[i], reverse=True)
    print("index", index)

    max_value = 0
    fractions = [0]*len(value)
    print(fractions)

    for i in index:
        if weight[i] <= capacity:
            fractions[i] = 1
            max_value += value[i]
            print("Maximal value : ", max_value)
            capacity -= weight[i]
            print("Kapasitas ditampung : ", capacity)

        else:
            fractions[i] = capacity/weight[i]
            max_value += value[i]*capacity/weight[i]
            break

    return max_value, fractions


n = int(input("Masukkan Jumlah Jenis Barang : "))

weight = input(
    'Masukan Jumlah Banyak dari {} jenis barang,\ndi pisahkan dengan (spasi)  \n: '.format(n)).split()
weight = [int(w) for w in weight]
value = input(
    'masukan Nilai Harga dari {} jenis barang,\ndi pisahkan dengan (spasi) \n: '.format(n)).split()
value = [int(v) for v in value]

capacity = int(input('Enter Maximum weight : '))

max_value, fractions = knapsack(value, weight, capacity)

print('Profit Max :', max_value)
print('Urutan Barang :', fractions)


# def knapSack(M, berat, value, n):

#     # Base Case
#     if n == 0 or M == 0:
#         return 0

#     # If weight of the nth item is
#     # more than Knapsack of capacity W,
#     # then this item cannot be included
#     # in the optimal solution
#     if (berat[n-1] > M):
#         return knapSack(M, berat, value, n-1)

#     # return the Maximum of two cases:
#     # (1) nth item included
#     # (2) not included
#     else:
#         return max(
#             value[n-1] + knapSack(
#                 M-berat[n-1], berat, value, n-1),
#             knapSack(M, berat, value, n-1))

# # end of function knapSack


# if __name__ == "__main__":

#     print("Silahkan masukkan Nama barang, Value barang, dan Batasan barang yang akan dibawa.")

#     m = int(input("Masukkan berat maksimal barang yang ingin dibawa : "))

#     print("\n  setiap nama barang dipisah dengan (spasi) \n")
#     barang = input("masukkan nama barang yang akan dibawa : ").split()
#     barang = [str(b) for b in barang]

#     print("\n  setiap berat barang dipisah dengan (spasi) \n")
#     berat = input("masukkan berat barang yang akan dibawa : ").split()
#     berat = [int(be) for be in berat]

#     print("\n  setiap value barang dipisah dengan (spasi) \n")
#     value = input("masukkan value barang yang akan dibawa : ").split()
#     value = [int(v) for v in value]

#     # Driver Code
#     # val = [60, 100, 120]
#     # wt = [10, 20, 30]
#     # W = 50


# n = len(value)
# print(knapSack(m, berat, value, n))
# # This code is contributed by Nikhil Kumar Singh


# A = ["Baju", "Kemeja", "Kaos", "Sepatu"]
# print(A)
# A.clear()

# print(A)
