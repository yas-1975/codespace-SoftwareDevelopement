
# import the random module
import random 

#Function to Request a number from user between 1 and 20 and compare whether
# equal to, less than or greater than the random generated number

def secretNumber():
    # request a number between 1 and 20
    # small range used otherwise guessing can take a while.
    num1 = int(input("Please enter a number between 1 and 20: "))
    #computer generated number
    Random_GenNumber = random.randint(1,20)

# use a loop until number guessed meets the number generated.
    while True:
        # if the guess number matches the random number
        if (num1 == Random_GenNumber): 
            print(f"Your Guess is {num1}, this is correct")
            break
        # if the input number is greater than the random number
        # output message request a new number
        if num1 > Random_GenNumber: 
            num1 = int(input(f"Your Guess is {num1}, this is too high, please enter another number: "))
        # if the input number is less than the random number
        # output message request a new number
        elif num1 < Random_GenNumber:
            num1 = int(input(f"Your Guess is {num1}, this is too low, please enter another number: "))

# call the function
secretNumber()