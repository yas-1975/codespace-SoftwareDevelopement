class User {
    
    constructor() {
      this.numberOfArticles = 0;
    }
    
    getNumberOfArticles() {
        return this._numberOfArticles;
    } 

    setNumberOfArticles(numberOfArticles) {
        this._numberOfArticles = numberOfArticles;
    }

    calcScores() { 

    }
}

//Author class

class Author extends User {
    
    // Constructor for Author class, taking a 'numberofArticles' parameter.
    constructor() {

        // Call the constructor of the base class (Author) using super().
        super();
    }
      
    // Override the user method in the Author class to calculate the scores.
    calcScores() {
        return this.numberOfArticles * 10 + 20;
    }
}

// Editor class
class Editor extends User {
    
    // Constructor for Editor class, taking a 'numberofArticles' parameter.
    constructor() {

        // Call the constructor of the base class using super().
        super();
        // Set the numberofArticles property of the Author instance.
        this.numberOfArticles = numberOfArticles;
    }
      
    // Override the area method in the Square class to calculate the area of a square.
    calcScores() {
        return this.numberOfArticles * 6 + 15;
    }
}

// Create instances of Square and Circle
const author = new Author();
author.setNumberOfArticles(8);

const editor = new Editor();
editor.setNumberOfArticles(10);

// Calculate and print the area for each shape
console.log("Author:", author.area());
console.log("Editor:", editor.area());