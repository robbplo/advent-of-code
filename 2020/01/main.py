file = open('input.txt')

input = file.readlines()
input = map(str.strip, input)

target = 2020

## Part 1

# for value in input:
#     # print(value)
#     for value2 in input:
#         if (int(value) + int(value2) == target):
#             print(int(value) * int(value2))

## Part 2

for value in input:
    for value2 in input:
        for value3 in input:
            if (int(value) + int(value2) + int(value3) == target):
                print(int(value) * int(value2) * int(value3))
                exit()
