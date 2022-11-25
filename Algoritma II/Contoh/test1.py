def knapSack(M, berat, value, n):

    # Base Case
    if n == 0 or M == 0:
        return 0

    # If weight of the nth item is
    # more than Knapsack of capacity W,
    # then this item cannot be included
    # in the optimal solution
    if (berat[n-1] > M):
        return knapSack(M, berat, value, n-1)

    # return the Maximum of two cases:
    # (1) nth item included
    # (2) not included
    else:
        return max(
            value[n-1] + knapSack(
                M-berat[n-1], berat, value, n-1),
            knapSack(M, berat, value, n-1))

# end of function knapSack


if __name__ == "__main__":

    print("Silahkan masukkan Nama barang, Value barang, dan Batasan barang yang akan dibawa.")

    m = int(input("Masukkan berat maksimal barang yang ingin dibawa : "))

    print("\n  setiap nama barang dipisah dengan (spasi) \n")
    barang = input("masukkan nama barang yang akan dibawa : ").split()
    barang = [str(b) for b in barang]

    print("\n  setiap berat barang dipisah dengan (spasi) \n")
    berat = input("masukkan berat barang yang akan dibawa : ").split()
    berat = [int(be) for be in berat]

    print("\n  setiap value barang dipisah dengan (spasi) \n")
    value = input("masukkan value barang yang akan dibawa : ").split()
    value = [int(v) for v in value]

    # Driver Code
    # val = [60, 100, 120]
    # wt = [10, 20, 30]
    # W = 50


n = len(value)
print(knapSack(m, berat, value, n))

# This code is contributed by Nikhil Kumar Singh
