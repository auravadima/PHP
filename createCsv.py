with open('numbers.csv', 'w') as file:
  numbers = []
  for i in range(100):
    numbers.append(str(i + 1))
  file.write(','.join(numbers))