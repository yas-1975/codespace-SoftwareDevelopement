// Coding Task 3 - Inheritance (Subclass and Superclass)
// define a class called User

class User {
  constructor() {
    this._username = ''; // Property name username
  }

  // Setter that can set the value for username
  set username(newUsername) {
    this._username = newUsername;
  }
}

// The Admin class which  inherits from User class
class Admin extends User {
  constructor() {
    super();
  }

  // A Method to express role - expressYourRole - returning string Admin
  expressYourRole() {
    return "Admin";
  }

  // Another Method to say hello with username - called sayHello - returning string Hello admin, xxx
  sayHello() {
    return `Hello admin, ${this._username}`;
  }
}


// Object admin from the Admin class
const admin = new Admin();

// Set the username
admin.username = "Balthazar"; // username - Balthazar

// Output
console.log(admin.sayHello()); // Output: Hello admin, Balthazar
