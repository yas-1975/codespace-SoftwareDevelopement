describe('Test the RPS game', () => {
  beforeEach (() => {
    // Visit htlm file on my c drive.
    cy.visit('index.html');
  });


   // Play the gam ewith the 'Rock' optionn and checks result
  it('plays the game with rock option and checks the result', () => {
   
    // Click the 'rock' button should exist
    cy.get('[data-cy="rock"]').should("exist").click();
    
    // check that the user option is set to 'Rock'
    cy.get('[data-cy="user-option"]').should("have.text", "Rock");

    //check the computer option
    cy.get('[data-cy="computer-option"]').then((option)=> {
    
      //if the computer option is set to 'Rock'
    if (option.text().includes("Rock")) {
      //The result is a tie
      cy.get('[data-cy="result"]').contains("It's a tie!");
    }
    
   
       //if the computer option is set to 'Paper'
    else if(option.text().includes("Paper")) {
        //The result is a computer win
        cy.get('[data-cy="result"]').contains("You Lose!");
      }
    
      //if the computer option is set to Scissors
    else {
      cy.get('[data-cy="result"]').contains("You Win!");

    }

    });
    
  })
 
  // Play the gam ewith the 'Paper' optionn and checks result
  it('plays the game with paper option and checks the result', () => {
   
    // Click the 'paper' button should exist
    cy.get('[data-cy="paper"]').should("exist").click();
    
    // check that the user option is set to 'Paper'
    cy.get('[data-cy="user-option"]').should("have.text", "Paper");

    //check the computer option
    cy.get('[data-cy="computer-option"]').then((option)=> {
    
      //if the computer option is set to 'Paper'
    if (option.text().includes("Paper")) {
      //The result is a tie
      cy.get('[data-cy="result"]').contains("It's a tie!");
    }
   
       //if the computer option is set to 'Rock'
    else if(option.text().includes("Rock")) {
        //The result is a computer win
        cy.get('[data-cy="result"]').contains("You Win!");
      }
    
      //if the computer option is set to Scissors
    else {
      cy.get('[data-cy="result"]').contains("You Lose!");

    }
      

    });
    
  }) 
   // Play the gam ewith the 'Scissors' optionn and checks result
   it('plays the game with scissors option and checks the result', () => {
   
    // Click the 'Scissors' button should exist
    cy.get('[data-cy="scissors"]').should("exist").click();
    
    // check that the user option is set to 'Paper'
    cy.get('[data-cy="user-option"]').should("have.text", "Scissors");

    //check the computer option
    cy.get('[data-cy="computer-option"]').then((option)=> {
    
      //if the computer option is set to 'Paper'
    if (option.text().includes("Scissors")) {
      //The result is a tie
      cy.get('[data-cy="result"]').contains("It's a tie!");
    }
   
       //if the computer option is set to 'Rock'
    else if(option.text().includes("Rock")) {
        //The result is a computer win
        cy.get('[data-cy="result"]').contains("You Lose!");
      }
    
      //if the computer option is set to Scissors
    else {
      cy.get('[data-cy="result"]').contains("You Win!");

    }
      

    });
    
  }) 
});