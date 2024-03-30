describe('Test Calculator - Subtraction', () => {
  beforeEach(() => {
    // Visit HTML file
    cy.visit('index.html');
  });


  // calculate the value of 1 - 2 and checks the result
  it('subtracts number one from two', () => {

    // Click the 'one' button
    cy.get('[data-cy="one"]').click();
    
    // Click the '+' button
    cy.get('[data-cy="subtract"]').click();
    
    // Click the 'two' button
    cy.get('[data-cy="two"]').click();
    
    // Click the '=' button
    cy.get('[data-cy="equals"]').click();
    
    // Check that the output is '-1' (result of 1 - 2)
    cy.get('[data-cy="output"]').should('have.value', '-1');
  });


  
  // calculate the value of 2 - 3 and checks the result
  it('subtracts number two from three', () => {
    
    // Click the 'two' button
    cy.get('[data-cy="two"]').click();
    
    // Click the '+' button
    cy.get('[data-cy="subtract"]').click();
    
    // Click the 'three' button
    cy.get('[data-cy="three"]').click();
    
    // Click the '=' button
    cy.get('[data-cy="equals"]').click();
    
    // Check that the output is '-1' (result of 2 - 3)
    cy.get('[data-cy="output"]').should('have.value', '-1');
  });

  // calculate the value of 1 - 3 and checks the result
  it('subtract number one from three', () => {
    
    // Click the 'one' button
    cy.get('[data-cy="one"]').click();
    
    // Click the '+' button
    cy.get('[data-cy="subtract"]').click();
    
    // Click the 'three' button
    cy.get('[data-cy="three"]').click();
    
    // Click the '=' button
    cy.get('[data-cy="equals"]').click();
    
    // Check that the output is '-2' (result of 1 - 3)
    cy.get('[data-cy="output"]').should('have.value', '-2');
  });


  
  // calculate the value of 2 - 1 and checks the result
  it('subtracts number two from one', () => {

    // Click the 'two' button
    cy.get('[data-cy="two"]').click();
    
    // Click the '-' button
    cy.get('[data-cy="subtract"]').click();
    
    // Click the 'one' button
    cy.get('[data-cy="one"]').click();
    
    // Click the '=' button
    cy.get('[data-cy="equals"]').click();
    
    // Check that the output is '1' (result of 2 - 1)
    cy.get('[data-cy="output"]').should('have.value', '1');
  });


  
  // calculate the value of 3 - 2 and checks the result
  it('subtracts number three from two', () => {
    
    // Click the 'three' button
    cy.get('[data-cy="three"]').click();
    
    // Click the '-' button
    cy.get('[data-cy="subtract"]').click();
    
    // Click the 'two' button
    cy.get('[data-cy="two"]').click();
    
    // Click the '=' button
    cy.get('[data-cy="equals"]').click();
    
    // Check that the output is '1' (result of 3 - 1)
    cy.get('[data-cy="output"]').should('have.value', '1');
  });

  // calculate the value of 3 - 1 and checks the result
  it('subtract number one from three', () => {
    
    // Click the 'three' button
    cy.get('[data-cy="three"]').click();
    
    // Click the '-' button
    cy.get('[data-cy="subtract"]').click();
    
    // Click the 'one' button
    cy.get('[data-cy="one"]').click();
    
    // Click the '=' button
    cy.get('[data-cy="equals"]').click();
    
    // Check that the output is '2' (result of 3 - 1)
    cy.get('[data-cy="output"]').should('have.value', '2');
  });


});