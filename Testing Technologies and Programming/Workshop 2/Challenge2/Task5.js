// Abstract class representing a generic User
class User {

  constructor() {
      this.username = "";
    }


    // Settler Method to set the username
  set username(newUsername) {
      this._username = newUsername;
    }
  
    // Getter Method to get the username
  get username() {
      return this._username;
  }


  // Abstract method for user role
  stateYourRole() {
      // Throw an error if the abstract method is called directly from a child class
      throw new TypeError("Do not call abstract method deposit from child.");
    }

}

// Concrete subclass representing an Admin
class Admin extends User {

  constructor() {
      // Call the parent class constructor
      super();
  }
  
  stateYourRole() {
      return "admin"
  }

}

 // Concrete subclass representing a checking account
 class Viewer extends User {
  constructor() {
      // Call the parent class constructor
      super();
  }
  
  stateYourRole() {
      return "viewer"
  }

}

// Creating an object admin from the Admin class
const admin = new Admin();
admin.username = "Balthazar";
console.log(admin.stateYourRole()); // Output: admin

// Creating an object viewer from the Viewer class
const viewer = new Viewer();
viewer.username = "Melchior";
console.log(viewer.stateYourRole()); // Output: viewer
