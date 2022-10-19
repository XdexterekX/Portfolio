###zad1
imiona = ("Jakub","Bartosz","Max","Filip")
for i in range(len(imiona)):
    print(imiona[i])





####zad2
print(imiona)
moja_lista = list(imiona)
print(moja_lista)
moja_lista.sort()
print(moja_lista)
imionka = tuple(moja_lista)
print(imionka)
####
####zad3
krotka = (100, 200, 300, 400,500,)
print(krotka)
print("Suma liczb:", sum(krotka))
s = 0
for i in range(len(krotka)):
    s+= krotka[i]
    srednia = s/5
print("Średnia liczb:", srednia)
