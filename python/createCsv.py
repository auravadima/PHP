import random
with open('numbers.csv', 'w') as file:
  numbers = []
  for i in range(100):
    numbers.append(str(random.randint(1, 100)))
  file.write(','.join(numbers))