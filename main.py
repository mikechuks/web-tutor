#Creating Variables
#intFruits = 8.7
#print(intFruits)

#List in python
#list = [56, 78, 7.4, "house"]
#print(list)
#print(list[3])

#concatenation in python
#helloworld = "Hello" +" "+ "World"
#print(helloworld)

#Operators in python
#Arithmethic Operator
#+ plus
#- minus
#% module
#/ division
#* multiplication

#num1 = 5
#num2 = 3
#num3 = num1 + num2
#print(num3)

#Assignment Operator
#= equals
#+= plus equals
#-= minus equals
#%= module equals
#/= division equals
#*= multiplication equals

#num1 = 5
#num2 = 3
#num2 = num2 + num1
#num2 %= num1
#print(num2)

#string and int conversion
#num1 = 5
#num2 = "3"
#print(int(num2))

#Control Statement
#if statement
#var = "chima"
#if(var=="chima"):
# print("Yes")

#Else statement
#var = "chima"
#if(var=="chime"):
#    print("Yes")
#else:
#    print("No")

#Elif statement
#var = "chima"
#if(var=="chime"):
 #   print("Yes")
#elif(var=="chima"):
#    print("Maybe")
#else:
#    print("No")

#loops
#for loops
#words = ['cat', 'window', 'state']
#for w in words:
# print(w)

#for w in range(10):
# print(w)
#for i in range(4,10):
# print(i)

#While Loop
#c = 0
#while c < 7:
# print(c)
# c += 1

#Continue Statement on Loop
#for x in range(15):
# if x == 5:
#   continue
 #  print(x)

#Breake Statement on Loop
#c = 0
#while true:
# print(c)
# c+= 1
# if c >= 8:
#    break

#Functions
#String Funnctions
# swapcase
# upper
# lower
# isupper
# islower
# title
# find
# count
# rstrip
# lstrip
# strip
#str = "i am a programmer"
#print(str.upper());
#print(str.title());
#print(str.count("a"))

#Numeric Function
#ceil
# floor
# round
# max
# min
# pi

#val = 5/2
#print(round(val));
#NB: Some functions may not work until you
#import the math class.
#For example:
#import math
#print(math.ceil(val));

#List Function
#append(x)
#extend(L)
#insert(i, x)
#remove(x)
#pop([i])
#clear()
#index(x[, start[, end]])
#count(x)
#sort()
#reverse()
#copy()

#var = [1,2,3,4,5,6,7]
#print(var.append(8))
#del var[0]
#print(var)

#tuple Function
#tp = (11, 12, 75, 29, 90,123)
#print(max(tp))
#print(min(tp))
#print(sum(tp))
#print(len(tp))

#iterating through tuple or list
#tp = (11, 12, 75, 29, 90, 123)
#lt = [11, 12, 75, 29, 90, 123]
#for i in tp:
#    print(i) or print(i, end=" ")
#for i in lt:
#    print(i) or print(i, end=" ")

#Set
#a = set([34,4,10,50])
#Sets are a powerful tool in Python since they have the
#ability to calculate differences and intersections
#between other sets. For example, say you have a list
#of participants in events A and B:
#a = set(["Mary","Peter","Son","Mike"])
#b = set(["Mike","Son","Danny","Kane"])
#print(a.intersection(b))

#To find out which members attended only one of the
#events, use the "symmetric_difference" method:
#print(a.symmetric_difference(b));
#To find out which members attended only one event
#and not the other, use the "difference" method:
#print(a.difference(b));

#Dictinary
#A dictionary is a data type similar to arrays, but works
#with keys and values instead of indexes. Each value
#stored in a dictionary can be accessed using a key, which
#is any type of object (a string, a number, a list, etc.)
#instead of using its index to address it.

#phonebook = {}
#phonebook["John"] = 2349038477566
#phonebook["Mike"] = 2347038377264
#phonebook["Joel"] = 2348147662781
#print(phonebook)

#phonebook = { "John" : 2349038477566, "Mike" :
#2347038377264, "Joel" : 2348147662781 }
#print(phonebook)
#del phonebook["John"]
#phonebook.pop("John")
#print(phonebook)

#Date Time Function
#Python just like other object oriented
#programming languages have in built system
#defined time functions which can be used for date
#time manipulations. Some of the functions include
#time, asctime, localtime(time).

#from datetime import time
#from datetime import date
#from datetime import datetime
#First import the classes above:
#1. Get the current date
#today = date.today()
#print("Today’s date is ", today)
#today.weekday() will return the current
#day of the week.

#Assuming we need to get only time from the
#datetime class
#tm = datetime.time(datetime.now())
#print(tm)

#Calender Function
#import calendar
#c= calendar.TextCalendar(calendar.SUNDAY)
#str= c.formatmonth(2025,1)
#print(str)

#Phython Fuctions
#Functions are a convenient way to divide your code
#into useful blocks, allowing us to order our code,
#make it more readable, reuse it and save some time.
#def check():
#    print("This is a function")
#check()

def check(a,b):
    return "%s is %b years older than me"%(a,b)
print(check("Okoro",5))

