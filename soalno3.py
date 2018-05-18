import random

def key_gen():
    keylist = random.choice('1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ')
    return keylist

def genereate_key():
    number = 0
    list_item = ''
    lst = []
    while number < 16:
        number = number + 1
        list_item = list_item + key_gen()

    for chars in list_item:
        lst.append(chars)

    lst.insert(4,'-')
    lst.insert(9,'-')
    lst.insert(14,'-')

    Codes = "".join(lst)
    print(Codes)

for i in range(300):
    genereate_key();