describe('Test Calculator - Addition', () => {
  beforeEach(() => {
    // Visit HTML file
    cy.visit('index.html');
  });


  // calculate the value of 1 + 2 and checks the result
  it('adds numbers one and two together', () => {

    // Click the 'one' button
    cy.get('[data-cy="one"]').click();
    
    // Click the '+' button
    cy.get('[data-cy="add"]').click();
    
    // Click the 'two' button
    cy.get('[data-cy="two"]').click();
    
    // Click the '=' button
    cy.get('[data-cy="equals"]').click();
    
    // Check that the output is '3' (result of 1 + 2)
    cy.get('[data-cy="output"]').should('have.value', '3');
  });


  
  // calculate the value of 2 + 3 and checks the result
  it('adds numbers two and three together', () => {
    
    // Click the 'two' button
    cy.get('[data-cy="two"]').click();
    
    // Click the '+' button
    cy.get('[data-cy="add"]').click();
    
    // Click the 'three' button
    cy.get('[data-cy="three"]').click();
    
    // Click the '=' button
    cy.get('[data-cy="equals"]').click();
    
    // Check that the output is '5' (result of 2 + 3)
    cy.get('[data-cy="output"]').should('have.value', '5');
  });

  // calculate the value of 1 + 3 and checks the result
  it('adds numbers one and three together', () => {
    
    // Click the 'one' button
    cy.get('[data-cy="one"]').click();
    
    // Click the '+' button
    cy.get('[data-cy="add"]').click();
    
    // Click the 'three' button
    cy.get('[data-cy="three"]').click();
    
    // Click the '=' button
    cy.get('[data-cy="equals"]').click();
    
    // Check that the output is '4' (result of 1 + 3)
    cy.get('[data-cy="output"]').should('have.value', '4');
  });


});