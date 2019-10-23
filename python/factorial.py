import math
try:
  number = int(input("Input number: "))
  print("Factorial of", number, 'is', math.factorial(number))
except:
  print("You must enter a number")