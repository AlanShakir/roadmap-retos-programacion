"""
/*
 * EJERCICIO:
 * - Crea ejemplos utilizando todos los tipos de operadores de tu lenguaje:
 *   Aritméticos, lógicos, de comparación, asignación, identidad, pertenencia, bits...
 *   (Ten en cuenta que cada lenguaje puede poseer unos diferentes)
 * - Utilizando las operaciones con operadores que tú quieras, crea ejemplos
 *   que representen todos los tipos de estructuras de control que existan
 *   en tu lenguaje:
 *   Condicionales, iterativas, excepciones...
 * - Debes hacer print por consola del resultado de todos los ejemplos.
 *
 * DIFICULTAD EXTRA (opcional):
 * Crea un programa que imprima por consola todos los números comprendidos
 * entre 10 y 55 (incluidos), pares, y que no son ni el 16 ni múltiplos de 3.
 *
 * Seguro que al revisar detenidamente las posibilidades has descubierto algo nuevo.
 */
"""
#operadores aritmeticos
my_suma = 2 + 3 
my_resta = 2 - 3 
my_multiplicador = 2 * 3 
my_division = 2 / 3 
print(my_suma)
print(my_resta)
print(my_multiplicador)
print(my_division)
#operadores logicos
my_variable = True
my_other_variable = False
print(my_variable and my_other_variable)
print(my_variable or my_other_variable)

#operadores comparacion
my_variable = 8
my_other_variable = 7
print(my_variable < my_other_variable)
print(my_variable > my_other_variable)
print(my_variable <= my_other_variable)
print(my_variable >= my_other_variable)
print(my_variable == my_other_variable)

#estructuras de control
my_variable = 8
my_other_variable = 7
if my_variable == my_other_variable:
    print("variables tienen el mismo valor")
elif my_variable < my_other_variable:
    print("la variable menor es: ", my_variable)
else:
    print("la variable mayor es: ", my_other_variable)

my_variable = True
my_other_variable = 7
while my_variable:
    print(my_other_variable)
    my_other_variable -=1    
    if my_other_variable == -1:
        my_variable = False

my_variable_string = "esto es una variable string"
for index in my_variable_string:
    print(index)

def num_comprendidos():
    index = 10
    for index in range(56):
        if index % 2 == 0 and index % 3 != 0:
            if index != 16:
                print(index)
        if index == 55:
            print(index)    

num_comprendidos()
