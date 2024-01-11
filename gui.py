from tkinter import*
from tkinter.ttk import Combobox
from tkinter import scrolledtext
from tkinter import messagebox
from tkinter import filedialog

main = Tk()

#main.title("This is Python GUI")
main.geometry("500x400")

#Adding and modifying Text
#lb = Label(main, text="Hello", font=("Arial Bold", 20))
#lb.grid(column=1, row=0)

#Adding and modifying Button
#bt = Button(main, text="Submit")
#bt.grid(column=2,row=0)

#def clickButton():
#    lb.configure(text="I was clicked")
#bt2 = Button(main,text="Register Here",command=clickButton)
#bt2.grid(column=3,row=0)

#TextBox
#txt = Entry(main,width=30)
#txt.grid(column=1,row=0)
#txt.get()
#txt.focus()

#ComBox
#combo = Combobox(main)
#combo['values']= (1, 2, 3, 4, 5, "Text")
#combo.current(1) #set the selected item
#combo.grid(column=0, row=0)

#CheckBox
#chk = Checkbutton(main, text='Choose')
#chk_state = BooleanVar()
#chk_state.set(True) #set check state
#chk = Checkbutton(main, text='Choose', var=chk_state)
#chk.grid(column=0, row=0)

#Radio Button
#rad = Radiobutton(main,text='First', value=1)
#rad.grid(column=0,row=0)

#scrolledtext
#txt = scrolledtext.ScrolledText(main,width=40,height=10)
#txt.insert(INSERT,'You text goes here')
#txt.delete(1.0,END)
#txt.grid(column=0,row=0)

#Message Box
#messagebox.showinfo('Message title','Message content')

#fILE dialog
#file = filedialog.askopenfilename()

#Adding Paddings
lbl = Label(main, text='label1', padx=5, pady=100)
lbl.grid(column=0, row=0)

main.mainloop()
