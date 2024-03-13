

// Coding Task 1 - Classes and Objects. - two fixes
/*class user {
    firstname;
    lastname;
  
    // construct that takes in the firstname and lastname.
    constructor(firstname,lastname) {
        //instance variables to store the firstname and lastname
      this.firstname = firstname;
      this.lastname = lastname;
    }
  
    hello() { //hello method.
      console.log(`hello, ${this.firstname} ${this.lastname}`); //output hello fistname surname
    }
  }

const user1 = new user("John", "Doe");
user1.hello(); // hello, John Doe
const user2 = new user("Jane", "Doe");
user2.hello(); // hello, Jane Doe
*/
class user {
  
    // construct that takes in the firstname and lastname.
    constructor(firstname,lastname) {
        //instance variables to store the firstname and lastname
      this.firstname = firstname;
      this.lastname = lastname;
    }
  
    hello() { //hello method.
      return "hello";
    }
  }


const user1 = new user("John", "Doe");
console.log(user1.hello(), user1.firstname, user1.lastname); // hello, John Doe
const user2 = new user("Jane", "Doe");
console.log(user2.hello(), user2.firstname, user2.lastname);; // hello, Jane Doe