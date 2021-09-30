file = open('input.txt')

input = file.readlines()
input = map(str.strip, input)

target = 2020

print(input)

for value in input:
    # print(value)
    for value2 in input:
        if (int(value) + int(value2) == target):
            print(int(value) * int(value2))
