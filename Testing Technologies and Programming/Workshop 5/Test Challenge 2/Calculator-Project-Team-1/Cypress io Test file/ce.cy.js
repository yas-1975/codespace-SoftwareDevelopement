describe('Test Calculator - CE Button', () => {
  beforeEach(() => {
    // Visit HTML file
    cy.visit('index.html');
  });

  // calculate the value of 1 CE and checks the result
  it('zeros the number clicked', () => {
    // Click the 'one' button
    cy.get('[data-cy="one"]').click();
    
    // Click the 'CE' button
    cy.get('[data-cy="delete"]').click();
    
    // Add a slight delay to ensure UI update
    cy.wait(500);

    // Check that the output is '' (result of 1 CE)
    cy.get('[data-cy="output"]').should('have.value', "");
  });

 // input a value and an addition operator a number
 // then clear the numnber
 it('inputs a number, operation, number then removes the number', () => {

  // Click the 'one' button
  cy.get('[data-cy="one"]').click();
  
  // Click the '+' button
  cy.get('[data-cy="add"]').click();
  
  // Click the 'two' button
  cy.get('[data-cy="two"]').click();

      // Click the 'CE' button
      cy.get('[data-cy="delete"]').click();
    
      // Add a slight delay to ensure UI update
      cy.wait(500);
  
      // Check that the output is 1+ (result of 1 + 2 CE)
      cy.get('[data-cy="output"]').should('have.value', "1+");
  });  


 // input a value and an addition operator and two numbers
 // then clear one of the number
 it('inputs a number, operation, two numbers then removes two number', () => {

  // Click the 'one' button
  cy.get('[data-cy="one"]').click();
  
  // Click the '+' button
  cy.get('[data-cy="add"]').click();
  
  // Click the 'two' button
  cy.get('[data-cy="two"]').click();

  // Click the 'three' button
  cy.get('[data-cy="three"]').click();

  // Click the 'CE' button
      cy.get('[data-cy="delete"]').click();
    
      // Add a slight delay to ensure UI update
      cy.wait(500);
  
      // Check that the output is 1+2 (result of 1 + 23 CE)
      cy.get('[data-cy="output"]').should('have.value', "1+2");
  });  


 // input a value and an addition operator and two numbers
 // then clear two number
 it('inputs a number, operation, two numbers then removes one number', () => {

  // Click the 'one' button
  cy.get('[data-cy="one"]').click();
  
  // Click the '+' button
  cy.get('[data-cy="add"]').click();
  
  // Click the 'two' button
  cy.get('[data-cy="two"]').click();

  // Click the 'three' button
  cy.get('[data-cy="three"]').click();

  // Click the 'CE' button
      cy.get('[data-cy="delete"]').click();


  // Click the 'CE' button
  cy.get('[data-cy="delete"]').click();
      
      // Add a slight delay to ensure UI update
      cy.wait(500);
  
      // Check that the output is 1+ (result of 1 + 23 CE CE)
      cy.get('[data-cy="output"]').should('have.value', "1+");
  });  

  
 // input a value and an addition operator and two numbers
 // then clear two number
 it('inputs a number, operation, two numbers and the operator', () => {

  // Click the 'one' button
  cy.get('[data-cy="one"]').click();
  
  // Click the '+' button
  cy.get('[data-cy="add"]').click();
  
  // Click the 'two' button
  cy.get('[data-cy="two"]').click();

  // Click the 'three' button
  cy.get('[data-cy="three"]').click();

  // Click the 'CE' button
      cy.get('[data-cy="delete"]').click();


  // Click the 'CE' button
  cy.get('[data-cy="delete"]').click();

   // Click the 'CE' button
   cy.get('[data-cy="delete"]').click();
 
      // Add a slight delay to ensure UI update
      cy.wait(500);
  
      // Check that the output is 1+ (result of 1 + 23 CE CE CE)
      cy.get('[data-cy="output"]').should('have.value', "1");
  });  

   // input a value and an addition operator and two numbers
 // then clear two number
 it('inputs a number, operation, two numbers and the operator, then clears all', () => {

  // Click the 'one' button
  cy.get('[data-cy="one"]').click();
  
  // Click the '+' button
  cy.get('[data-cy="add"]').click();
  
  // Click the 'two' button
  cy.get('[data-cy="two"]').click();

  // Click the 'three' button
  cy.get('[data-cy="three"]').click();

  // Click the 'CE' button
      cy.get('[data-cy="delete"]').click();


  // Click the 'CE' button
  cy.get('[data-cy="delete"]').click();

   // Click the 'CE' button
   cy.get('[data-cy="delete"]').click();
 
   // Click the 'CE' button
   cy.get('[data-cy="delete"]').click();
 
      // Add a slight delay to ensure UI update
  cy.wait(500);
  
  // Check that the output is 1+ (result of 1 + 23 CE CE CE CE)
      cy.get('[data-cy="output"]').should('have.value', "");
  });  

});