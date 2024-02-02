from tkinter import *
from tkinter import messagebox
import ast

window = Tk()
window.title("SingUp")
window.geometry('925x500')
window.configure(bg='#fff')
window.resizable(False,False)

def signin():
    username = user.get()
    password = pass_code.get()
    if username == '':
        print('username is empty')
    elif password == '':
        print('password is empty')
    else :
        print('You can login')

img = PhotoImage(file='bowl-2.png')
lbl = Label(window, image=img, border=0, width=350, height=250).place(x=50,y=90)
#lbl.grid(column=1, row=0)

frame = Frame(window, width=350, height=390, bg='#fff')
frame.place(x=480,y=50)

heading = Label(frame, text='Sign In', fg="#57a1f8", bg='white', font=('Microsoft Yahi UI Light', 23, 'bold'))
heading.place(x=100,y=5)

user = Entry(frame, width=25, fg='black', border=0, bg='white', font=('Microsoft Yahi UI Light', 11))
user.place(x=30,y=80)
user.insert(0, 'Username')

def on_enter(e):
    user.delete(0,'end')
def on_leave(e):
    if user.get()=='':
        user.insert(0, 'Username')

user.bind("<FocusIn>", on_enter)
user.bind("<FocusOut>", on_leave)

Frame(frame, width=295, height=2, bg='black').place(x=25,y=107)
#######-------------------------------------------------------------------

pass_code = Entry(frame, width=25, fg='black', border=0, bg='white', font=('Microsoft Yahi UI Light', 11))
pass_code.place(x=30,y=150)
pass_code.insert(0, 'Password')

def on_enter(e):
    pass_code.delete(0,'end')
def on_leave(e):
    if pass_code.get()=='':
        pass_code.insert(0, 'Password')

pass_code.bind("<FocusIn>", on_enter)
pass_code.bind("<FocusOut>", on_leave)

Frame(frame, width=295, height=2, bg='black').place(x=25,y=177)
#######-------------------------------------------------------------------

Button(frame, width=39, pady=7, text='Sign In', bg='#57a1f8', fg='white', border=0,command=signin).place(x=35, y=200)
label = Label(frame, text='I have an account', fg='black', bg='white', font=('Microsoft Yahi UI Light', 9))
label.place(x=90, y=250)

signin = Button(frame, width=6, text='Sign in', border=0, bg='white', cursor='hand2', fg='#57a1f8')
signin.place(x=200, y=250)

window.mainloop()
