import os

# x = 10
# if x > 5:
#     raise Exception('x should not exceed 5. The value of x was: {}'.format(x))

#try except and else
# try:
#     a = 2/0
# except ZeroDivisionError as e:
#     print(e)
# else:
#     print('Exception did not occur')

#adding finally

# def method():
#     try:
#         a = 2/0
#     except ZeroDivisionError as e:
#         print(e)
#     else:
#         print('Exception did not occur')
#     finally:
#         print('Clean up the code')

#Handling files
# f=open("datasheet.txt", "w")
# f.write("Digital dreams ICT Academy file IO python class")
# f.close()

#Write a file
# lines=["Fantabulous! You are doing well.\n", "Are you normal? Ooin! \n", "We want to write in lines.\n", "Complex is better than complicated.\n"]
# f=open("datasheet.txt","w")
# f.writelines(lines)
# f.close()

#Alternamtively
# lines = ["Beautiful is better than ugly.\n", "Explicit is better than implicit.\n", "Simple is better than complex.\n", "Complex is better than complicated.\n"]
# with open("datasheet.txt", 'w') as file_handle:
#     for list_item in lines:
#         file_handle.writelines(list_item)
#         file_handle.close()


#read a file
# f=open('datasheet.txt','r')
# print(f.read(15))

#Alternamtively
# with open("datasheet.txt", 'r') as file_handle:
#     get = file_handle.read()
#     print(get)
#     file_handle.close()

#readline method
# f=open('datasheet.txt', 'r')
# ln = f.readlines()
# print(ln)

# f=open('datasheet.txt',"r")
# while True:
#     line=f.readline()
#     if line=='':
#         break
#     print(line)
# f.close()

#exception in file handling
# try:
#     f=open('datasheet.txt',"r")
#     while True:
#         line=f.readline()
#         if line=='':break
#         print (line, end='')
# except FileNotFoundError:
#     print ("File is not found")
# else:
#     f.close()

# f=open('datasheet.txt',"r")
# while True:
#     try:
#         line=next(f)
#         print (line, end="")
#     except StopIteration:
#         break
# f.close()

#using append method
# f=open('datasheet.txt','a')
# f.write("We are just trying to add more content to an existing file .\n")
# f.close()

#OS Module
# print(dir(os))

#os.mkdir("C://pythonfiles")
#os.rdir("C://pythonfiles/type/word")
# os.makedirs("C://pythonfiles/type/word")
# os.removedirs("C://pythonfiles/type/word")

# a = os.listdir('C://pythonfiles')
# print(a)

#Using access method
# os.chdir("C://pythonfiles/type/word")
# a = os.access('change.txt', os.R_OK)
# print(a)


