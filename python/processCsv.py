try:
  with open('numbers.csv', 'r') as file:
    numbers = list(map(int, file.readline().split(',')))
except:
  print("File does not exist")
  
counter = 0
for number in numbers:
  isBig = 0 if number <= 50 else 1
  print(number, isBig)
  counter += isBig
print("Count of big numbers is", counter)