//Coding Task 2 - Encapulation
//difine class user
class user {
  
  // construct that takes in the firstname and lastname.
  constructor(firstname,lastname) {
      //instance variables to store the firstname and lastname
    this._firstname = firstname;
    this._lastname = lastname;
  }

  //getter for firstname
get firstname() {
  return this._firstname;

}

//getter for firstname and lastname
get lastname() {
  return this._lastname;

}

// Settler to set firstname
set firstname(firstname) {
  this._firstname = firstname;

}

//Settler to set lastname
set lastname(lastname) {
  this._lastname = lastname;

}

// Method to return fullname
fullname() {
  return this.firstname + ' ' + this.lastname
}
//Method to return hello world
  
hello() { 
    return "Hello World!";
  }
}

const user1 = new user("John", "Doe");
console.log(user1.hello()); // hello world
console.log("My name is", user1.fullname()); // My name John Doe
const user2 = new user("Jane", "Doe");
console.log(user2.hello()); // hello world!
console.log("My name is",user2.fullname()); // My name is Jane Doe