// User class
class User {
    constructor() {
      this.numberOfArticles = 0;
    }
  
    // Method to set the number of articles
    setNumberOfArticles(numberOfArticles) {
      this.numberOfArticles = numberOfArticles;
    }
  
    // Method to get the number of articles
    getNumberOfArticles() {
      return this.numberOfArticles;
    }
  
    // Method to calculate scores (to be overridden by subclasses)
    calcScores() {
      throw new Error('calcScores method must be implemented by subclasses');
    }
  }
  
  // Author class inherits from User class
  class Author extends User {
    constructor() {
      super();
    }
  
    // Method to calculate scores for Author
    calcScores() {
      return this.numberOfArticles * 10 + 20;
    }
  }
  
  // Editor class inherits from User class
  class Editor extends User {
    constructor() {
      super();
    }
  
    // Method to calculate scores for Editor
    calcScores() {
      return this.numberOfArticles * 6 + 15;
    }
  }
  
  // Creating an object author from the Author class
  const author = new Author();
  author.setNumberOfArticles(8);
  
  // Printing the scores gained by the author
  console.log("Scores gained by the author:", author.calcScores());
  
  // Creating an object editor from the Editor class
  const editor = new Editor();
  editor.setNumberOfArticles(15);
  
  // Printing the scores gained by the editor
  console.log("Scores gained by the editor:", editor.calcScores());
  