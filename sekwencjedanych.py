M = "Bez pracy nie ma kołaczy"
n = len(M)
j = 0
for i in range(n):
    if M[i] == "d":
         j += 1
print("Liczba litery d w zdaniu:",j)

n = len(M)
k = 0
for i in range(n):
    if M[i] != 'a':
        k += 1
print("Znaki rózne niż a:",k)

n = len(M)
M = list(M)
for i in range(n):
    if M[i] != 'B':
        M[i] = 'A'
M = ''.join(M)
print(M)

X = "Bez pracy nie ma kołaczy"


n = len(X)
for i in range(n):
    if X[i] != 's':
        print(X[i], end = '')

print()
n = len(X)
k = 0
for i in range(0, n, 3):
    if X[i] != 'd':
        k += 1
print(k)

W = "Bez pracy nie ma kołaczy"

n = len(W)
W = list(W)
for i in range(n):
    if W[i] != 'm':
        W[i] = 'R'
W = ''.join(W)
print(W)


    



