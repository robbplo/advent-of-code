file = open('input.txt')
lines = file.readlines()

print("Total lines: " + str(len(lines)))


## Step 1
# def passwordIsValid(min: int, max: int, character: str, password: str):
#     count = 0
#     for char in password:
#         if (char == character):
#             count += 1

    # return (count <= max and count >= min)

## Step 2
def passwordIsValid(one: int, two: int, character: str, password: str):
    count = 0
    oneMatches = password[one + 1] == character
    twoMatches = password[two + 1] == character

    return 

    for char in password:
        if (char == character):
            count += 1

    return (count <= max and count >= min)


validCount = 0

for line in lines:
    line = line.strip()
    spaceSeparated = line.split(' ')
    password = spaceSeparated[-1]
    min, max = spaceSeparated[0].split('-')
    char = spaceSeparated[1][0]

    if (passwordIsValid(int(min), int(max), char, password)):
        validCount += 1

print(validCount)
