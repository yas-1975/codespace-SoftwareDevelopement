describe('Test Calculator - Multiple', () => {
  beforeEach(() => {
    // Visit HTML file
    cy.visit('index.html');
  });


  // calculate the value of 1 x 2 and checks the result
  it('multiply numbers one and two together', () => {

    // Click the 'one' button
    cy.get('[data-cy="one"]').click();
    
    // Click the 'x' button
    cy.get('[data-cy="multiply"]').click();
    
    // Click the 'two' button
    cy.get('[data-cy="two"]').click();
    
    // Click the '=' button
    cy.get('[data-cy="equals"]').click();
    
    // Check that the output is '2' (result of 1 x 2)
    cy.get('[data-cy="output"]').should('have.value', '2');
  });


  
  // calculate the value of 2 x 3 and checks the result
  it('multiply numbers two and three together', () => {
    
    // Click the 'one' button
    cy.get('[data-cy="two"]').click();
    
    // Click the 'x' button
    cy.get('[data-cy="multiply"]').click();
    
    // Click the 'two' button
    cy.get('[data-cy="three"]').click();
    
    // Click the '=' button
    cy.get('[data-cy="equals"]').click();
    
    // Check that the output is '6' (result of 2 x 3)
    cy.get('[data-cy="output"]').should('have.value', '6');
  });

  // calculate the value of 1 x 3 and checks the result
  it('multiply numbers one and three together', () => {
    
    // Click the 'one' button
    cy.get('[data-cy="one"]').click();
    
    // Click the 'multiply' button
    cy.get('[data-cy="multiply"]').click();
    
    // Click the 'three' button
    cy.get('[data-cy="three"]').click();
    
    // Click the '=' button
    cy.get('[data-cy="equals"]').click();
    
    // Check that the output is '3' (result of 1 x 3)
    cy.get('[data-cy="output"]').should('have.value', '3');
  });


});